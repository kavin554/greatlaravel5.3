<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setup_location', function (Blueprint $table) {
            $table->increments('sl_id');
            $table->string('pl_id');
            $table->string('sl_name');
            $table->string('sl_latitude');
            $table->string('sl_longitude');
            $table->string('sl_altitude');
            $table->string('sl_desc');
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
        Schema::dropIfExists('setup_location');
    }
}
