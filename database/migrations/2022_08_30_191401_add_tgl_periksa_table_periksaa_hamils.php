<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTglPeriksaTablePeriksaaHamils extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('periksaa_hamils', function (Blueprint $table) {
            $table->date('tgl_periksa');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('periksaa_hamils', function (Blueprint $table) {
            //
        });
    }
}
