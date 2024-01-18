<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailpengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->bigIncrements('idtanggapan');
            $table->foreignId('idpengajuan');
            $table->date('tgl_tanggapan');
            $table->foreignId('id');
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('idpc');
            // $table->foreign('idpengajuan');


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
