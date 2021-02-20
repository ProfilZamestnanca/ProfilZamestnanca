<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Zamestnanci extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamestnanci', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('meno');
            $table->string('heslo');
            $table->string('pracovisko')->nullable();
            $table->string('oddelenie')->nullable();
            $table->string('miestnost')->nullable();
            $table->string('telefon')->nullable();
            $table->string('mobil')->nullable();
            $table->string('email')->nullable();
            $table->string('funkcia')->nullable();
            $table->string('info')->nullable();
            $table->string('photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zamestnanci');
    }
}
