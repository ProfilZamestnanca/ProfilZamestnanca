<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Laboratoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratoria', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('nazov');
            $table->string('image')->nullable();
            $table->string('popis')->nullable();
            $table->string('kratky_popis')->nullable();
            $table->date('datum')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratoria');
    }
}
