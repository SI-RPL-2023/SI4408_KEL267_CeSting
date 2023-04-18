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
    
}