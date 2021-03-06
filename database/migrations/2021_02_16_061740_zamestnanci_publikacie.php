<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZamestnanciPublikacie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamestnanci_publikacie', function (Blueprint $table) {
            $table->integer('publikacia_id')->index();
            $table->integer('zamestnanec_id')->index();
            $table->primary(['zamestnanec_id', 'publikacia_id']);

            $table->foreign('publikacia_id')
                ->references('id')->on('publikacie')
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
        Schema::dropIfExists('zamestnanci_publikacie');
    }
}
