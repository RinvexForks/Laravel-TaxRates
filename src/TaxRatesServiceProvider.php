<?php

/*
 * This file is part of Laravel Tax Rates.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\TaxRates;

use BrianFaust\Countries\CountriesServiceProvider;
use BrianFaust\ServiceProvider\ServiceProvider;

class TaxRatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishMigrations();

        $this->publishConfig();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();

        $this->mergeConfig();

        $this->commands(SeedTaxRates::class);

        $this->app->register(CountriesServiceProvider::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return array_merge(parent::provides(), [
            SeedTaxRates::class,
            CountriesServiceProvider::class,
        ]);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'taxrates';
    }
}
