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
        Schema::create('route_iternaries', function (Blueprint $table) {
            $table->increments('ri_id');
            $table->string('sr_code');
            $table->string('day');
            $table->string('sr_start');
            $table->string('sr_end');
            $table->string('duration_hour');
            $table->string('ri_desc');
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
        Schema::dropIfExists('route_iternaries');
    }
}
