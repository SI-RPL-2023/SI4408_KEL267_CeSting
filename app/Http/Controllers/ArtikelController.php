<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index()
    {
        $listartikel = Artikel::orderBy('artikel_id') -> get();
        return view('informasi_stunting.informasi_stunting', compact('listartikel'));
    }
    public function create()
    {
        return view('informasi_stunting.informasi_stunting_create');
    }
    public function store(Request $request)
    {
        Artikel::create([
            'judul' => $request -> judul,
            'isi' => $request -> isi,
            'tanggal' => $request -> tanggal,
        ]);
        return redirect('/artikel');
    }
    public function show($artikel_id)
    {
        $artikel = Artikel::find($artikel_id);
        return view('informasi_stunting.informasi_stunting_show', compact('artikel'));
    }
    public function edit($artikel_id)
    {
        $artikel = Artikel::find($artikel_id);
        return view('informasi_stunting.informasi_stunting_edit', compact('artikel'));
    }
    public function update(Request $request, $artikel_id)
    {
        Artikel::find($artikel_id)->update([
            'judul' => $request -> judul,
            'isi' => $request -> isi,
        ]);
        return redirect('/artikel');
    }
    public function destroy($artikel_id)
    {
        Artikel::find($artikel_id)->delete();
        return redirect('/artikel');
    }
}