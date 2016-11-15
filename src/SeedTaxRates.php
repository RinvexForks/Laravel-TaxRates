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

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;

class SeedTaxRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:taxrates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $taxrate = $this->getModel('taxrate');
        $taxrate->truncate();

        $data = base_path('vendor/faustbrian/laravel-taxrates/resources/taxrates.json');
        $data = json_decode(file_get_contents($data), true);

        foreach ($this->getModel('country')->all() as $country) {
            $rate = 0;

            if (array_key_exists($country['name']['common'], $data)) {
                $rate = $data[$country['name']['common']];
            }

            $taxrate->create([
                'country_id' => $country->id,
                'rate'       => $rate,
                'percentage' => $rate * 100,
            ]);
        }

        $this->getOutput()->writeln('<info>Seeded:</info> TaxRates');
    }

    /**
     * @return \Illuminate\Databse\Eloquent\Model
     */
    private function getModel(string $model) : Model
    {
        $model = config("taxrates.models.$model");

        return new $model();
    }
}
