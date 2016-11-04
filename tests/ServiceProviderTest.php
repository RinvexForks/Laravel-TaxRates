<?php

namespace BrianFaust\Tests\TaxRates;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use BrianFaust\TaxRates\Console\SeedTaxRates;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testSeedTaxRatesCommandInjectable()
    {
        $this->assertIsInjectable(SeedTaxRates::class);
    }
}
