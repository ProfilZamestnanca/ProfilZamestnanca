<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Publikacie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikacie', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('nazov');
            $table->string('druh')->nullable();
            $table->string('obsah')->nullable();
            $table->integer('rok');
            $table->string('isbn')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publikacie');
    }
}
