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
            $table->increments('rp_id');
            $table->string('sr_code');
            $table->string('rp_default');
            $table->string('rp_image');
            $table->string('rp_image_desc');
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
        Schema::dropIfExists('route_photo');
    }
}
