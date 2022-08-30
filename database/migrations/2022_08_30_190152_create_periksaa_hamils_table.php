<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaaHamilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksaa_hamils', function (Blueprint $table) {
            $table->id();
            $table->string('vitamin');
            $table->string('keterangan');
            $table->string('golongan_darah');
            $table->timestamps();
            $table->unsignedBigInteger('id_hamil');
            $table->foreign('id_hamil')->references('id')->on('hamils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periksaa_hamils');
    }
}
