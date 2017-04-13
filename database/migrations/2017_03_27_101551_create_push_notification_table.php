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
            $table->increments('id');
            $table->integer('sr_id')-> unsigned();
            //$table->foreign('sr_id')-> references('id')-> on ('setup_route');
            $table->string('pn_title')->nullable();
            $table->date('pn_date')->nullable();
            $table->string('pn_desc')->nullable();
            $table->integer('imei_number')->nullable();
            $table->integer('mobile_number')->nullable();
            $table->integer('latitude')->nullable();
            $table->integer('longitude')->nullable();
            $table->integer('altitude')->nullable();
            $table->string('image_path')->nullable();
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
        Schema::dropIfExists('push_notification');
    }
}
