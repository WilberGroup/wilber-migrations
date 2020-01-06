<?php

namespace Wilber\WilberMigrations;

use Illuminate\Support\ServiceProvider;

class WilberClaimsMigrationsTestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->loadMigrationsFrom(__DIR__.'/database/claim_migrations');

        }
    }

}
