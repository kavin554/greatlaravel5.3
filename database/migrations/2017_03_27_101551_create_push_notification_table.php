<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePushNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('push_notification', function (Blueprint $table) {
            $table->increments('pn_id');
            $table->string('pn_date');
            $table->string('pn_title');
            $table->string('pn_desc');
            $table->string('imei_number');
            $table->string('mobile_number');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('altitude');
            $table->string('image_path');
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
        Schema::dropIfExists('push_notification');
    }
}
