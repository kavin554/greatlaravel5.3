<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteIternariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_itineraries', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('sr_id')->unsigned();
           // $table->foreign('sr_id')->references('id')->on('setup_route');

            $table->integer('day')->nullable();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->integer('duration_hour')->nullable();
            $table->string('desc')->nullable();
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
        Schema::dropIfExists('route_itineraries');
    }
}
