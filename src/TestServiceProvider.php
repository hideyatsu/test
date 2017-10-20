<?php

namespace Hideyatsu\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Hideyatsu\Test\TestController');
        $this->loadViewsFrom(__DIR__.'/views', 'test');
    }
}
