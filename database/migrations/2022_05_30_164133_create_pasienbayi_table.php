<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienbayiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasienbayi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pasienbayi');
            $table->string('keluhan');
            $table->string('berat_badan');
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
        Schema::dropIfExists('pasienbayi');
    }
}
