<?php

/*
 * This file is part of Laravel Tax Rates.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\TaxRates;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $this->setUpDatabase($this->app);
    }

    protected function getServiceProviderClass($app)
    {
        return \BrianFaust\TaxRates\ServiceProvider::class;
    }

    protected function setUpDatabase($app)
    {
        include_once __DIR__.'/../resources/migrations/create_taxrates_table.php';

        (new \CreateTaxRatesTable())->up();
    }
}
