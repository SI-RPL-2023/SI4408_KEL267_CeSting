<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('catat_tumbuh', function (Blueprint $table) {
            $table->id('catat_id');
            $table->string('username');
            $table->foreign('username')->references('username')->on('user')->onDelete('cascade');
            $table->integer('tinggi_badan_anak')->nullable();
            $table->integer('berat_badan_anak')->nullable();
            $table->integer('lingkar_kepala_anak')->nullable();
            $table->date('tanggal_catat_tumbuh')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('catattumbuh');
    }
};
