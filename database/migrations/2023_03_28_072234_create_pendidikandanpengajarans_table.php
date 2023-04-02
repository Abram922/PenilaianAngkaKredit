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
        Schema::create('pendidikandanpengajarans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelaksanaan')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('kegiatan')->nullable();
            $table->string('semesterWaktu')->nullable();
            $table->integer('jumlahDosen')->nullable();
            $table->integer('jumlahKelas')->nullable();
            $table->integer('jumlahSKS')->nullable();
            $table->string('keteranganPelaksanaan')->nullable();
            $table->string('file');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_pelaksanaan')->references('id')->on('pelaksanaanpdps')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikandanpengajarans');
    }
};
