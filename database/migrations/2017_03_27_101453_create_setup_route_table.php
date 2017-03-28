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
            $table->increments('sr_code');
            $table->string('sr_name');
            $table->string('sr_level');
            $table->string('no_days');
            $table->string('speciality');
            $table->string('season');
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
        Schema::dropIfExists('setup_route');
    }
}
