<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZamestnanciSoczrucnosti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamestnanci_soc_zrucnosti', function (Blueprint $table) {
            $table->integer('soc_zrucnost_id')->index();
            $table->integer('zamestnanec_id')->index();
            $table->primary(['zamestnanec_id', 'soc_zrucnost_id']);

            $table->foreign('soc_zrucnost_id')
                ->references('id')->on('soc_zrucnosti')
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
        Schema::dropIfExists('zamestnanci_soc_zrucnosti');
    }
}
