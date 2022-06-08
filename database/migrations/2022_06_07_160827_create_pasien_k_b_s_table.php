<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienKBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien_kb', function (Blueprint $table) {
            $table->id();
            $table->string('nama_suami');
            $table->string('suntik_kb');
            $table->date('tgl_kb');
            $table->date('tgl_kembali');
            $table->foreignId('id_pasien')->references('id')->on('tb_pasien')->onDelete('cascade');
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
        Schema::dropIfExists('pasien_k_b_s');
    }
}
