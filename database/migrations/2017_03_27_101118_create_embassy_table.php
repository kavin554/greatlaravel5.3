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
            $table->string('country_tel_code');
            $table->string('location');
            $table->string('contact_person');
            $table->string('position');
            $table->string('mobile_no');
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
        Schema::dropIfExists('embassy');
    }
}
