<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.profil');
    }
    public function store(Request $request)
    {
        Profil::updateOrCreate([
            'user_id' => Auth::user() -> id
            ], [
            'user_id' => Auth::user() -> id,
            'nama_depan' => $request -> nama_depan,
            'nama_belakang' => $request -> nama_belakang,
            'tanggal_lahir' => $request -> tanggal_lahir,
            'no_hp' => $request -> no_hp,
            'provinsi' => $request -> provinsi,
            'kabupaten_kota' => $request -> kabupaten_kota,
            'alamat' => $request -> alamat
        ]);
        return redirect('/profil');
    }
}
