<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sr_id')-> unsigned();
            $table->foreign('sr_id')-> references('id')-> on ('setup_route');
            $table->integer('sl_id')->unsigned();
            $table->foreign('sl_id')->references('id')-> on ('setup_location');
            $table->integer('days')->nullable();
            $table->integer('Stop_no')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->float('altitude')->nullable();
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
        Schema::dropIfExists('stops');
    }
}
