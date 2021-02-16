<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tituly extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tituly', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('nazov')->nullable();
            $table->string('skratka');
            $table->integer('rok');
            $table->boolean('za')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tituly');
    }
}
