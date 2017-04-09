<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setup_route', function (Blueprint $table) {
            $table->increments('id');
            $table->string('region')->nullable();
            $table->string('sr_name')->nullable();
            $table->string('sr_level')->nullable();
            $table->integer('no_days')->nullable();
            $table->string('season')->nullable();
            $table->integer('total_distance')->nullable();
            $table->float('highest_point')->nullable();
            $table->string('unit')->nullable();
            $table->float('start_latitude')->nullable();
            $table->float('start_longitude')->nullable();
            $table->float('start_altitude')->nullable();
            $table->float('end_latitude')->nullable();
            $table->float('end_longitude')->nullable();
            $table->float('end_altitude')->nullable();
            $table->string('speciality')->nullable();
            $table->string('resources')->nullable();
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
        Schema::dropIfExists('setup_route');
    }
}
