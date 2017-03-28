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
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('email_1');
            $table->string('email_2');
            $table->string('emergency_contact_1');
            $table->string('emergency_contact_2');
            $table->string('emergency_contact_3');
            $table->string('nationality');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('passport_no');
            $table->string('visa_issue_date');
            $table->string('visa_expiry_date');
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
        Schema::dropIfExists('user_registration');
    }
}
