<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiensakit', function (Blueprint $table) {
            $table->id();
            $table->string('keluhan');
            $table->date('tgl_periksa');
            $table->foreignId('id_pasiensakit')->references('id')->on('tb_pasien')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiensakit');
    }
}
