<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSynopsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synopsis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nwp_a')->nullable();
            $table->string('nwp_b')->nullable();
            $table->string('nwp_c')->nullable();
            $table->string('nwp_note')->nullable();
            $table->string('cc')->nullable();
            $table->string('hhk')->nullable();
            $table->string('hha')->nullable();
            $table->string('imp_1')->nullable();
            $table->string('imp_2')->nullable();
            $table->string('note')->nullable();
            $table->string('entry_data')->nullable();
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
        Schema::dropIfExists('synopsis');
    }
}
