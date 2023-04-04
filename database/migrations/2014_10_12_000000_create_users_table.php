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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            // $table->integer('jabatan_pref')->unsigned();
            // $table->integer('jabatan_next')->unsigned();
            $table->integer('nip')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('mata_kuliah_yang_diampu')->nullable();
            $table->string('bidang_ilmu')->nullable();
            $table->string('foto')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('judulkum')->nullable();
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('jabatan_pref')->references('id_jabatan_pref')->on('jabatan_fungsional_prefs')->onDelete('cascade');
            // $table->foreign('jabatan_next')->references('id_jabatan_next')->on('jabatan_fungsional_nexts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
