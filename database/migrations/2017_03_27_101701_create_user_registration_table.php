<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registration', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('user_name')->nullable();
            $table->integer('country_id')-> unsigned();
            $table->foreign('country_id')-> references('id')-> on ('country');
            $table->string('image')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('mobile_no')->nullable();
            $table->integer('home_no')->nullable();
            $table->string('email_1')->nullable();
            $table->string('email_2')->nullable();
            $table->float('passport_no')->nullable();
            $table->date('issue_date')->nullable();
            $table->string('type')->nullable();
            $table->date('expiry_date')->nullable();
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
        Schema::dropIfExists('user_registration');
    }
}
