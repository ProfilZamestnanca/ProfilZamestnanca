<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZamestnanciLaboratoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamestnanci_laboratoria', function (Blueprint $table) {
            $table->integer('laboratorium_id')->index();
            $table->integer('zamestnanec_id')->index();
            $table->primary(['zamestnanec_id', 'laboratorium_id']);

            $table->foreign('laboratorium_id')
                ->references('id')->on('laboratoria')
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
        Schema::dropIfExists('zamestnanci_laboratoria');
    }
}
