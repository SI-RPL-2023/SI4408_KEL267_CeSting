<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->id('artikel_id');
            $table->string('judul');
            $table->longText('isi');
            $table->date('tanggal');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
};
