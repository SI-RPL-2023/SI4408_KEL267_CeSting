<?php

namespace App\Http\Controllers;
use App\Models\ProfilAnak;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfilanakController extends Controller
{
    public function index()
    {
        return view('profil.profil_anak');
    }
    public function store(Request $request)
    {
        Profilanak::updateOrCreate([
            'anak_id' => Auth::user() -> id
            ], [
            'anak_id' => Auth::user() -> id,
            'nama_depan_anak' => $request -> nama_depan_anak,
            'nama_belakang_anak' => $request -> nama_belakang_anak,
            'tanggal_lahir_anak' => $request -> tanggal_lahir_anak,
        ]);
        return redirect('/profil_anak');
    }
}