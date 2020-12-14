<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\Louise;

class NewProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Library\Services\Louise', function ($app){

            return new Louise();
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
