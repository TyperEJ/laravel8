<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Jobs\CrawlClick108 as CrawlClick108Job;

class CrawlClick108 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'click108:crawl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl Website Click108';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dispatch(new CrawlClick108Job());

        $this->output->success('Crawled Success At '.Carbon::now()->toDateTimeString());
    }
}
