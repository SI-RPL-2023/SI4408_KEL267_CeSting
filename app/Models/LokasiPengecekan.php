<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiPengecekan extends Model
{
    use HasFactory;
    protected $table = "lokasi_pengecekan";
    protected $primaryKey = 'rumah_sakit_id';
    protected $guarded = ['rumah_sakit_id'];
}