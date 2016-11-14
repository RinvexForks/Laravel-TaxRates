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

use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['code', 'country', 'rate'];
}
