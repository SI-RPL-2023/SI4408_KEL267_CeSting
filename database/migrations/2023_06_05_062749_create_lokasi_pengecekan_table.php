<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lokasi_pengecekan', function (Blueprint $table) {
            $table->id('rumah_sakit_id');
            $table->string('rumah_sakit');
            $table->string('no_telepon');
            $table->string('alamat');
            $table->timestamps();            
        });
    }
    public function down()
    {
        Schema::dropIfExists('lokasi_pengecekan');
    }
};
