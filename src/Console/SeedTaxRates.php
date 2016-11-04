<?php

namespace BrianFaust\TaxRates\Console;

use DB;
use BrianFaust\TaxRates\Models\TaxRate;
use Illuminate\Console\Command;

class SeedTaxRates extends Command
{
    protected $signature = 'taxrates:seed';

    protected $description = 'Command description.';

    public function fire()
    {
        DB::table('taxrates')->delete();

        $data = base_path('vendor/faustbrian/laravel-taxrates/resources/taxrates.json');
        $data = json_decode(file_get_contents($data), true);

        foreach ($data as $country => $rate) {
            TaxRate::create(compact('country', 'rate'));
        }

        $this->getOutput()->writeln('<info>Seeded:</info> TaxRates');
    }
}
