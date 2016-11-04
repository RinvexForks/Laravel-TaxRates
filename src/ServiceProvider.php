<?php

namespace BrianFaust\TaxRates;

use BrianFaust\TaxRates\Console\SeedTaxRates;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
{
    public function boot()
    {
        parent::boot();

        $this->publishMigrations();
    }

    public function register()
    {
        parent::register();

        $this->commands(SeedTaxRates::class);
    }

    public function getPackageName()
    {
        return 'taxrates';
    }
}
