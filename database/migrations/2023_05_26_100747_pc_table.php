<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pc', function (Blueprint $table) {
            $table->bigIncrements('idpc');
            $table->foreignId('idlab');
            $table->string('namapc');
            $table->string('deskripsi');
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('idlab')->references('idlab')->on('lab');
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
