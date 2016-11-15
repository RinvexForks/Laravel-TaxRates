<?php

/*
 * This file is part of Laravel Tax Rates.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Eloquent Models
    |--------------------------------------------------------------------------
    */

   'models' => [

       /*
       |--------------------------------------------------------------------------
       | Tax Rate Model
       |--------------------------------------------------------------------------
       */

       'taxrate' => BrianFaust\TaxRates\TaxRate::class,

       /*
       |--------------------------------------------------------------------------
       | Country Model
       |--------------------------------------------------------------------------
       */

       'country' => BrianFaust\Countries\Country::class,

   ]

];
