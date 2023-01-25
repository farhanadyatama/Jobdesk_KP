<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembangunans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->text('nama_kegiatan');
            $table->integer('target');
            $table->integer('kontrak');
            $table->string('nama_perusahaan');
            $table->string('konsultan_pengawas');
            $table->date('tanggal_kontrak');
            $table->integer('pelaksanaan');
            $table->integer('pemberian_kesempatan');
            $table->date('tanggal_akhir_kontrak');
            $table->integer('keuangan_rp');
            $table->integer('keuangan_persen');
            $table->integer('fisik_rencana');
            $table->integer('fisik_realisasi');
            $table->integer('fisik_deviasi');
            $table->text('keterangan');
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
        Schema::dropIfExists('pembangunans');
    }
}
