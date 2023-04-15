<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekammedis extends Model
{
    use HasFactory;
    protected $table = 'rekam_medis';
    protected $primaryKey = 'rekam_id';
    protected $fillable = [
        'username',
        'berat_janin',
        'berat_ibu',
        'panjang_janin',
        'detak_janin',
        'detak_ibu',
        'tanggal_rekam_medis',
    ];
    public function profil()
    {
        return $this->belongsTo('App\Models\Profil');
    }
}
