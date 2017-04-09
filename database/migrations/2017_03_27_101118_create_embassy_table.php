<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbassyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embassy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')-> unsigned();
            $table->foreign('country_id')-> references('id')-> on ('country');
            $table->string('location')->nullable();
            $table->integer('contact_person')->nullable();
            $table->string('position')->nullable();
            $table->integer('mobile_no')->nullable();
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
        Schema::dropIfExists('embassy');
    }
}
