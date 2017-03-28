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
            $table->increments('wf_id');
            $table->string('weather_id');
            $table->string('wf_date');
            $table->string('wf_desc');
            $table->string('temp_max');
            $table->string('temp_min');
            $table->string('humidity');
            $table->string('visuality');
            $table->string('wind');
            $table->string('wind_direction');
            $table->string('pressure');
            $table->string('remarks');
            $table->string('created_by');
            $table->string('created_date');
            $table->string('modified_by');
            $table->string('modified_date');
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
