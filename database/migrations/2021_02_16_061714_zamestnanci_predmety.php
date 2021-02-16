<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZamestnanciPredmety extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamestnanci_predmety', function (Blueprint $table) {
            $table->integer('predmet_id')->index();
            $table->integer('zamestnanec_id')->index();
            $table->primary(['zamestnanec_id', 'predmet_id']);

            $table->foreign('predmet_id')
                ->references('id')->on('predmety')
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
        Schema::dropIfExists('zamestnanci_predmety');
    }
}
