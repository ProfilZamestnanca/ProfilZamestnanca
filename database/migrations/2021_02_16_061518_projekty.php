<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projekty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projekty', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('nazov');
            $table->integer('rok');
            $table->string('popis')->nullable();
            $table->string('kratky_popis')->nullable();
            $table->integer('rok_od')->nullable();
            $table->integer('rok_do')->nullable();
            $table->integer('mesiac_od')->nullable();
            $table->integer('mesiac_do')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projekty');
    }
}
