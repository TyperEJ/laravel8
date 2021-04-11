<?php

namespace App\Services\Facebook;

use App\Services\Contracts\Oauth;
use GuzzleHttp\Client;

class Login implements Oauth
{
    const AUTH_URL = 'https://www.facebook.com/v10.0';
    const API_URL = 'https://graph.facebook.com';

    protected $clientId;
    protected $clientSecret;
    protected $clientToken;

    protected $curlClient;

    /**
     * Login constructor.
     * @param $config
     * @param Client $curlClient
     */
    public function __construct($config,Client $curlClient)
    {
        $this->clientId = $config['client_id'];
        $this->clientSecret = $config['client_secret'];
        $this->clientToken = $config['client_token'];

        $this->curlClient = $curlClient;
    }

    /**
     * @param array $params
     * @return string
     */
    public function getRedirectUrl($params = [])
    {
        $params['client_id'] = $this->clientId;

        return implode('?',[self::AUTH_URL.'/dialog/oauth',$this->generateQueryParam($params)]);
    }

    /**
     * @param string $code
     * @param string $redirectUri
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccessToken($code = '',$redirectUri = '')
    {
        $response = $this->curlClient->get(self::API_URL.'/oauth/access_token',[
            'query' => [
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'redirect_uri' => $redirectUri,
                'code' => $code,
            ]
        ]);

        $data = json_decode($response->getBody()->getContents());

        return $data->access_token;
    }

    /**
     * @param string $accessToken
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getProfile($accessToken = '')
    {
        $response = $this->curlClient->get(self::API_URL.'/debug_token',[
            'query' => [
                'input_token' => $accessToken,
                'access_token' => $this->clientToken,
            ]
        ]);

        $data = json_decode($response->getBody()->getContents());

        return $data->data;
    }

    /**
     * @param $params
     * @return string
     */
    protected function generateQueryParam($params)
    {
        return http_build_query($params);
    }
}
