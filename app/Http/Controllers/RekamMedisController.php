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
    public function edit($rekam_id)
    {
        $rekammedis = RekamMedis::find($rekam_id);
        return view('cek_si_ibu.rekam_medis_edit', compact('rekammedis'));
    }
    public function update(Request $request, $rekam_id)
    {
        RekamMedis::find($rekam_id)->update([
            'berat_janin' => $request -> berat_janin,
            'panjang_janin' => $request -> panjang_janin,
            'detak_janin' => $request -> detak_janin,
            'berat_ibu' => $request -> berat_ibu,
            'detak_ibu' => $request -> detak_ibu,
        ]);
        return redirect('/rekam_medis');
    }
    public function destroy($rekam_id)
    {
        RekamMedis::find($rekam_id)->delete();
        return redirect('/rekam_medis');
    }
    public function LineChart(Request $request)
    {
        $target = Auth::user()->username;
        $result = DB::select(DB::raw("SELECT * FROM `rekam_medis` WHERE username = '$target'"));
        $data1 = "";
        $data2 = "";
        $data3 = "";
        $data4 = "";
        $data5 = "";
        foreach ($result as $val){
            $data1 = "[new Date('$val->tanggal_rekam_medis'), $val->berat_janin], $data1";
            $data2 = "[new Date('$val->tanggal_rekam_medis'), $val->panjang_janin], $data2";
            $data3 = "[new Date('$val->tanggal_rekam_medis'), $val->detak_janin], $data3";
            $data4 = "[new Date('$val->tanggal_rekam_medis'), $val->berat_ibu], $data4";
            $data5 = "[new Date('$val->tanggal_rekam_medis'), $val->detak_ibu], $data5";
        }
        return view('cek_si_ibu.rekam_medis_line_chart', compact('data1','data2','data3','data4','data5'));
    }
}
