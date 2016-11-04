<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxRatesTable extends Migration
{
    public function up()
    {
        Schema::create('tax_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('country');
            $table->decimal('rate', 13, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tax_rates');
    }
}
