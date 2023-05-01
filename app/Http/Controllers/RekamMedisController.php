<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RekamMedis;
use Illuminate\Support\Facades\Auth;
use DB;

class RekamMedisController extends Controller
{
    public function index()
    {
        $listrekammedis = RekamMedis::orderBy('username') -> get();
        return view('cek_si_ibu.rekam_medis', compact('listrekammedis'));
    }
    public function create()
    {
        return view('cek_si_ibu.rekam_medis_create');
    } 
    public function store(Request $request)
    {
        if (DB::table('user')->where('username', $request -> username)->exists()) {
            RekamMedis::create([
                'username' => $request -> username,
                'berat_janin' => $request -> berat_janin,
                'panjang_janin' => $request -> panjang_janin,
                'detak_janin' => $request -> detak_janin,
                'berat_ibu' => $request -> berat_ibu,
                'detak_ibu' => $request -> detak_ibu,
                'tanggal_rekam_medis' => $request -> tanggal_rekam_medis
            ]);
            return redirect('/rekam_medis');
        } else {
            return back()->withErrors([
                'username' => "Username doesn't exist!",
            ]);
        }
    }
}