<?php

namespace App\Providers;

use App\Services\Facebook\Login;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\Oauth;

class OauthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Oauth::class,function($app){
            $config = $app->make('config')->get('services.facebook');

            return new Login($config,new Client());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
