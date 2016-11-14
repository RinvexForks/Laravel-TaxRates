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

class SeedTaxRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'taxrates:seed';

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
        $model = $this->getModel();
        $model->truncate();

        $data = base_path('vendor/faustbrian/laravel-taxrates/resources/taxrates.json');
        $data = json_decode(file_get_contents($data), true);

        foreach ($data as $country => $rate) {
            $model->create(compact('country', 'rate'));
        }

        $this->getOutput()->writeln('<info>Seeded:</info> TaxRates');
    }

    /**
     * @return \Illuminate\Databse\Eloquent\Model
     */
    private function getModel()
    {
        $model = config('taxrates.model');

        return new $model();
    }
}
