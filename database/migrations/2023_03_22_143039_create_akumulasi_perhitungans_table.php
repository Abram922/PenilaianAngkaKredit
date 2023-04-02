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
        Schema::create('akumulasi_perhitungans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('jabatan_pref')->unsigned();
            $table->integer('jabatan_next')->unsigned();
            $table->string('judul');

            $table->timestamps();

            
            $table->foreign('jabatan_pref')->references('id_jabatan_pref')->on('jabatan_fungsional_prefs')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jabatan_next')->references('id_jabatan_next')->on('jabatan_fungsional_nexts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akumulasi_perhitungans');
    }
};
