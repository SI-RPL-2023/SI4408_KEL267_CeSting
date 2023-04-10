<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'nama_depan',
        'nama_belakang',
        'tanggal_lahir',
        'no_hp',
        'provinsi',
        'kabupaten_kota',
        'alamat',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function profilanak()
    {
        return $this->hasMany('App\Models\ProfilAnak');
    }
    public function rekammedis()
    {
        return $this->hasOne('App\Models\RekamMedis');
    }
}
