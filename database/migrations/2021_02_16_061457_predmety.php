<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Predmety extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predmety', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('kod')->nullable();
            $table->integer('rok');
            $table->string('nazov');
            $table->string('druh')->nullable();
            $table->string('rozsah')->nullable();
            $table->integer('kredity')->nullable();
            $table->string('podmienky')->nullable();
            $table->string('vysledky')->nullable();
            $table->string('osnova')->nullable();
            $table->string('literatura')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predmety');
    }
}
