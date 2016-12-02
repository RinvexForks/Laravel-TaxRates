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

use BrianFaust\TaxRates\Console\SeedTaxRates;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

class ServiceProviderTest extends TestCase
{
    use ServiceProviderTrait;

    public function testSeedTaxRatesCommandInjectable()
    {
        $this->assertIsInjectable(SeedTaxRates::class);
    }
}
