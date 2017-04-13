<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alert_notification', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('sr_id')-> unsigned();
            //$table->foreign('sr_id')-> references('id')-> on ('setup_route');
            $table->date('an_date')->nullable();
            $table->string('an_title')->nullable();
            $table->string('an_desc')->nullable();
            $table->integer('an_imei')->nullable();
            $table->integer('an_mobile_number')->nullable();
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
        Schema::dropIfExists('alert_notification');
    }
}
