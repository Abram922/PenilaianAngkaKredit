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
        Schema::create('jabatan_fungsional_prefs', function (Blueprint $table) {
            $table->increments('id_jabatan_pref');
            $table->integer('user_id')->unsigned();
            $table->string('jabatan');
            $table->integer('angkaKreditKumulatif');
            $table->integer('pelaksanaanPendidikan');
            $table->integer('pelaksanaanPenelitian');
            $table->integer('pelaksanaanPengabdianMasyarakat');
            $table->integer('penunjang');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatan_fungsional_prefs');
    }
};
