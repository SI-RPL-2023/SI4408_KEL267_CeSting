<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\LokasiPengecekan;
use DB;

class LokasipengecekanController extends Controller
{
    public function index()
    {
        $listrumahsakit = LokasiPengecekan::orderBy('rumah_sakit_id') -> get();
        return view('cek_si_ibu.lokasi_pengecekan', compact('listrumahsakit'));
    }
    public function create()
    {
        return view('cek_si_ibu.lokasi_pengecekan_create');
    }
    public function store(Request $request)
    {
        LokasiPengecekan::create([
            'rumah_sakit' => $request -> rumah_sakit,
            'no_telepon' => $request -> no_telepon,
            'alamat' => $request -> alamat,
        ]);
        return redirect('/lokasi_pengecekan');
    }
    public function edit($rumah_sakit_id)
    {
        $rumahsakit = LokasiPengecekan::find($rumah_sakit_id);
        return view('cek_si_ibu.lokasi_pengecekan_edit', compact('rumahsakit'));
    }
    public function update(Request $request, $rumah_sakit_id)
    {
        LokasiPengecekan::find($rumah_sakit_id)->update([
            'rumah_sakit' => $request -> rumah_sakit,
            'no_telepon' => $request -> no_telepon,
            'alamat' => $request -> alamat,
        ]);
        return redirect('/lokasi_pengecekan');
    }
    public function destroy($rumah_sakit_id)
    {
        LokasiPengecekan::find($rumah_sakit_id)->delete();
        return redirect('/lokasi_pengecekan');
    }
}