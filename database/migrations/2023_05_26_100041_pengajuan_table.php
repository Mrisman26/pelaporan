<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->bigIncrements('idpengajuan');
            $table->integer('idpc'); 
            $table->date('tglpengajuan');
            $table->string('notlp')->unique(); 
            $table->string('status')->default('sedang di proses');
            $table->string('nama_pengaju');
            $table->text('bukti_foto');
            $table->string('deskripsikerusakan');
            $table->rememberToken();
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
        //
    }
}
