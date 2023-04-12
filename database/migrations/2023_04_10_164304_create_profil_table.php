<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->unique()->primary();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('nama_depan')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('no_hp')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('alamat')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('profil');
    }
};