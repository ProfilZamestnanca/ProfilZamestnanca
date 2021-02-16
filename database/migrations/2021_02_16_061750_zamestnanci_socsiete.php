<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZamestnanciSocsiete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamestnanci_soc_siete', function (Blueprint $table) {
            $table->integer('soc_siet_id')->index();
            $table->integer('zamestnanec_id')->index();
            $table->primary(['zamestnanec_id', 'soc_siet_id']);

            $table->foreign('soc_siet_id')
                ->references('id')->on('soc_siete')
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
        Schema::dropIfExists('zamestnanci_soc_siete');
    }
}
