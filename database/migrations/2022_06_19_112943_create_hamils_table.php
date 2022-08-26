<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHamilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hamils', function (Blueprint $table) {
            $table->id();
            $table->string('vitamin');
            $table->string('perkembangan_janin')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('umur_kehamilan')->nullable();
            $table->string('umur_pasien')->nullable();
            $table->string('tgl_bulan_terakhir')->nullable();
            $table->date('tgl_periksa');
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
        Schema::dropIfExists('hamils');
    }
}
