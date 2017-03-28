<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_tel_code')->nullable();
            $table->string('country_name')->nullable();
            $table->string('continent')->nullable();
            $table->string('currency_name')->nullable();
            $table->string('symbol')->nullable();
            $table->string('flag')->nullable();
            $table->string('remarks')->nullable();
//            $table->string('created_by');
//            $table->string('created_date');
//            $table->string('modified_by');
//            $table->string('modified_date');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country');
    }
}
