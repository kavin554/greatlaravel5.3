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
            $table->increments('id');
            $table->integer('user_id')-> unsigned();
            $table->foreign('user_id')-> references('id')-> on ('user_registration');
            $table->integer('sr_id')-> unsigned();
            $table->foreign('sr_id')-> references('id')-> on ('setup_route');
            $table->string('route')->nullable();
            $table->string('place_name')->nullable();
            $table->time('time_stamps')->nullable();
            $table->date('date')->nullable();
            $table->integer('latitude')->nullable();
            $table->integer('longitude')->nullable();
            $table->integer('altitude')->nullable();
            $table->string('sl_desc')->nullable();
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
        Schema::dropIfExists('user_trace');
    }
}
