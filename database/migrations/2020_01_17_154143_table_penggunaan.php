<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePenggunaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunaan', function (Blueprint $table) {
            $table->Increments('id_penggunaan');
            $table->integer('id_labor');
            $table->integer('jumlah_mahasiswa');
            $table->integer('id_dosen');
            $table->date('tgl_penggunaan');
            
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
        Schema::dropIfExists('penggunaan');
    }
}
