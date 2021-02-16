<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZamestnanciTituly extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamestnanci_tituly', function (Blueprint $table) {
            $table->integer('titul_id')->index();
            $table->integer('zamestnanec_id')->index();
            $table->integer('rok')->nullable();
            $table->string('skola')->nullable();
            $table->primary(['zamestnanec_id', 'titul_id']);

            $table->foreign('titul_id')
                ->references('id')->on('tituly')
                ->onDelete('cascade');
            $table->foreign('zamestnanec_id')
                ->references('id')->on('zamestnanci')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zamestnanci_tituly');
    }
}
