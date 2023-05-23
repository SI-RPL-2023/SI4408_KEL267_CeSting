<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CatatTumbuh;
use Illuminate\Support\Facades\Auth;
use DB;

class CatatTumbuhController extends Controller
{
    public function index()
    {
        $listcatattumbuh = CatatTumbuh::orderBy('username') -> get();
        return view('1000_hari_anak.catat_tumbuh', compact('listcatattumbuh'));
    }
    public function create()
    {
        return view('1000_hari_anak.catat_tumbuh_create');
    }
    public function store(Request $request)
    {
        if (DB::table('user')->where('username', $request -> username)->exists()) {
            CatatTumbuh::create([
                'username' => $request -> username,
                'tinggi_badan_anak' => $request -> tinggi_badan_anak,
                'berat_badan_anak' => $request -> berat_badan_anak,
                'lingkar_kepala_anak' => $request -> lingkar_kepala_anak,
                'tanggal_catat_tumbuh' => $request -> tanggal_catat_tumbuh,
            ]);
            return redirect('/catat_tumbuh');
        } else {
            return back()->withErrors([
                'username' => "Username doesn't exist!",
            ]);
        }
    }
    public function edit($catat_id)
    {
        $catattumbuh = CatatTumbuh::find($catat_id);
        return view('1000_hari_anak.catat_tumbuh_edit', compact('catattumbuh'));
    }
    public function update(Request $request, $catat_id)
    {
        CatatTumbuh::find($catat_id)->update([
            'username' => $request -> username,
            'tinggi_badan_anak' => $request -> tinggi_badan_anak,
            'berat_badan_anak' => $request -> berat_badan_anak,
            'lingkar_kepala_anak' => $request -> lingkar_kepala_anak,
            'tanggal_catat_tumbuh' => $request -> tanggal_catat_tumbuh,
        ]);
        return redirect('/catat_tumbuh');
    }
    public function destroy($catat_id)
    {
        CatatTumbuh::find($catat_id)->delete();
        return redirect('/catat_tumbuh');
    }
}