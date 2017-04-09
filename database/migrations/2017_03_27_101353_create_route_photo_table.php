<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutePhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_photo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sr_id')-> unsigned();
            //$table->foreign('sr_id')-> references('id')-> on ('setup_route');
            $table->string('rp_default')->nullable();
            $table->string('rp_image')->nullable();
            $table->string('rp_image_desc')->nullable();
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
        Schema::dropIfExists('route_photo');
    }
}
