<?php

namespace App\Services\Contracts;

interface Oauth
{
    /**
     * @param array $params
     * @return mixed
     */
    public function getRedirectUrl($params = []);

    /**
     * @param string $code
     * @param string $redirectUri
     * @return mixed
     */
    public function getAccessToken($code = '',$redirectUri = '');

    /**
     * @param string $accessToken
     * @return mixed
     */
    public function getProfile($accessToken = '');
}
