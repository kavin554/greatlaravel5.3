<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTraceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_trace', function (Blueprint $table) {
            $table->increments('trace_id');
            $table->string('user_id');
            $table->string('route');
            $table->string('place_name');
            $table->string('time_stamps');
            $table->string('date');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('altitude');
            $table->string('sl_desc');
            $table->string('remarks');
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
        Schema::dropIfExists('user_trace');
    }
}
