<?php

namespace TPenaranda\BCoin;

use Illuminate\Support\ServiceProvider;

class BCoinServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        return true;
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['tpenaranda-bcoin-laravel'] = $this->app->singleton(BCoinServer::class, function ($app) {
            return new BCoinServer;
        });
    }
}
