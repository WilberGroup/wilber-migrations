<?php

namespace Wilber\WilberMigrations;

use Illuminate\Support\ServiceProvider;

class WilberMigrationsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        }
    }

}
