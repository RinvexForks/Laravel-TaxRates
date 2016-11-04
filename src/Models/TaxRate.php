<?php

namespace BrianFaust\TaxRates\Models;

use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    protected $table = 'taxrates';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
