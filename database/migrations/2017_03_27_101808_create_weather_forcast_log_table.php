<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeatherForcastLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_forecast_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wd_id')->unsigned();
            $table->foreign('wd_id')->references('id')-> on ('weather_data');
            $table->date('wf_date')->nullable();
            $table->string('wf_desc')->nullable();
            $table->float('temp_max')->nullable();
            $table->float('temp_min')->nullable();
            $table->float('humidity')->nullable();
            $table->float('visuality')->nullable();
            $table->float('wind')->nullable();
            $table->string('wind_direction')->nullable();
            $table->float('pressure')->nullable();
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
        Schema::dropIfExists('weather_forecast_log');
    }
}
