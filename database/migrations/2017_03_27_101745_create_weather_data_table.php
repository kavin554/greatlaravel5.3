<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeatherDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sl_id')->unsigned();
            $table->foreign('sl_id')->references('id')-> on ('setup_location');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->float('rain')->nullable();
            $table->float('humidity')->nullable();
            $table->float('sunshine')->nullable();
            $table->float('wind')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('weather_data');
    }
}
