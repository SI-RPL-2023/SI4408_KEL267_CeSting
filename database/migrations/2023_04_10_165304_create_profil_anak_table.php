<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('profil_anak', function (Blueprint $table) {
            $table->unsignedBigInteger('anak_id')->primary();
            $table->foreign('anak_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('nama_depan_anak')->nullable();
            $table->string('nama_belakang_anak')->nullable();
            $table->date('tanggal_lahir_anak')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('profil_anak');
    }
};
