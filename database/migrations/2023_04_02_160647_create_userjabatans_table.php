<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserjabatansTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('userjabatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_jabatan_sekarang')->unsigned();
            $table->integer('id_jabatan_dituju')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_jabatan_sekarang')->references('id')->on('jabatans')->onDelete('cascade');
            $table->foreign('id_jabatan_dituju')->references('id')->on('jabatans')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('userjabatans');
    }
}
