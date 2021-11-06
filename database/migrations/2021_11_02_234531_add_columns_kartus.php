<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsKartus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kartus', function (Blueprint $table) {
            //
            $table->string('kepala_keluarga');
            $table->string('alamat');
            $table->string('rtrw');
            $table->integer('kode_pos');
            $table->string('desakelurahan');
            $table->string('kecamatan');
            $table->string('kabupatenkota');
            $table->string('provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kartus', function (Blueprint $table) {
            //
        });
    }
}
