<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unsur_pendidikan_pengajarans', function (Blueprint $table) {
            $table->increments('id_pdp');
            $table->integer('idPerhitungan')->unsigned();
            $table->integer('idkomponen')->unsigned()->nullable();
            $table->integer('idjenispelaksanaan')->unsigned()->nullable();
            $table->string('namaKegiatan')->nullable();
            $table->string('tempatInstansi')->nullable();
            $table->string('sks')->nullable();
            $table->string('bukti')->nullable();
            $table->integer('jumlahkelas')->nullable();
            $table->integer('jumlahAngkaKredit')->nullable();
            $table->integer('volumeDosen')->nullable();
            $table->string('keteranganKegiatan')->nullable();
            $table->timestamps();

            $table->foreign('idPerhitungan')->references('id')->on('akumulasi_perhitungans')->onDelete('cascade');
            $table->foreign('idkomponen')->references('id')->on('komponen_paks')->onDelete('cascade');
            $table->foreign('idjenispelaksanaan')->references('id')->on('pelaksanaanpdps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unsur_pendidikan_pengajarans');
    }
};
