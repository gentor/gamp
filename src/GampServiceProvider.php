<?php

namespace Gentor\Gamp;


use Illuminate\Support\ServiceProvider;

class GampServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('gamp', function ($app) {
            return new GampService($app['config']['gamp']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['gamp'];
    }

}