<?php

namespace App\Jobs;

use App\Models\ConstellationFate;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Pool;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

class CrawlClick108
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Client $client)
    {
        $requests = function () {
            foreach (range(0,11) as $i) {
                yield function () use ($i) {
                    return (new Client())
                        ->getAsync("https://astro.click108.com.tw/daily_{$i}.php?iAstro={$i}");
                };
            }
        };

        $pool = new Pool($client, $requests(), [
            'concurrency' => 5,
            'fulfilled' => function (Response $response, $index) {
                $this->parseAndStore($response);
            },
            'rejected' => function (RequestException $reason, $index) {
                logger()->error($reason->getMessage());
            },
        ]);

        $promise = $pool->promise();

        $promise->wait();
    }

    /**
     * @param ResponseInterface $response
     */
    protected function parseAndStore(ResponseInterface $response)
    {
        $crawler = new Crawler();

        $crawler->addHtmlContent($response->getBody()->getContents());

        $fates = $this->parseFates($crawler);

        ConstellationFate::query()->create([
            'date' => $this->parseDate($crawler),
            'constellation' => $this->parseConstellationName($crawler),
            'avg_percent' => $this->parseFatePercent($fates[0]),
            'avg_comment' => $fates[1],
            'love_percent' => $this->parseFatePercent($fates[2]),
            'love_comment' => $fates[3],
            'job_percent' => $this->parseFatePercent($fates[4]),
            'job_comment' => $fates[5],
            'wealth_percent' => $this->parseFatePercent($fates[6]),
            'wealth_comment'=> $fates[7],
        ]);
    }

    /**
     * @param string $string
     * @return float
     */
    protected function parseFatePercent($string = '')
    {
        return round(((substr_count($string,'★') / 5) * 100),2);
    }

    /**
     * @param Crawler $crawler
     * @return string
     */
    protected function parseDate(Crawler $crawler)
    {
        return $crawler->filter("#iAcDay > option:nth-child(1)")->text();
    }

    /**
     * @param Crawler $crawler
     * @return string
     */
    protected function parseConstellationName(Crawler $crawler)
    {
        $title = $crawler->filter("div.TODAY_CONTENT > h3")->text();

        return mb_substr($title,2,3);
    }

    /**
     * @param Crawler $crawler
     * @return array
     */
    protected function parseFates(Crawler $crawler)
    {
        return $crawler->filter("div.TODAY_CONTENT > p")->each(function ($node) {
            return strip_tags($node->text());
        });
    }
}
