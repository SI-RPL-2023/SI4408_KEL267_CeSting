<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id('rekam_id');
            $table->string('username');
            $table->foreign('username')->references('username')->on('user')->onDelete('cascade');
            $table->integer('berat_janin')->nullable();
            $table->integer('berat_ibu')->nullable();
            $table->integer('panjang_janin')->nullable();
            $table->integer('detak_janin')->nullable();
            $table->integer('detak_ibu')->nullable();
            $table->date('tanggal_rekam_medis')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('rekam_medis');
    }
};
