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
            $table->string('target');
            $table->string('kontrak');
            $table->string('nama_perusahaan');
            $table->string('konsultan_pengawas');
            $table->date('tanggal_kontrak');
            $table->string('pelaksanaan');
            $table->string('pemberian_kesempatan');
            $table->date('tanggal_akhir_kontrak');
            $table->string('keuangan_rp');
            $table->string('keuangan_persen');
            $table->string('fisik_rencana');
            $table->string('fisik_realisasi');
            $table->string('fisik_deviasi');
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