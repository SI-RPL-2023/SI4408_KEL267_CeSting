<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catattumbuh extends Model
{
    use HasFactory;
    protected $table = 'catat_tumbuh';
    protected $primaryKey = 'catat_id';
    protected $fillable = [
        'catat_id',
        'username',
        'tinggi_badan_anak',
        'berat_badan_anak',
        'lingkar_kepala_anak',
        'tanggal_catat_tumbuh',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
