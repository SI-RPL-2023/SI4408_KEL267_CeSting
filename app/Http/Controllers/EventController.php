<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $listevent = Event::orderBy('event_id') -> get();
        return view('informasi_stunting.event', compact('listevent'));
    }
    public function create()
    {
        return view('informasi_stunting.event_create');
    }
    public function store(Request $request)
    {
        Event::create([
            'judul' => $request -> judul,
            'isi' => $request -> isi,
            'tanggal' => $request -> tanggal,
        ]);
        return redirect('/event');
    }
    public function show($event_id)
    {
        $event = Event::find($event_id);
        return view('informasi_stunting.event_show', compact('event'));
    }
    public function edit($event_id)
    {
        $event = Event::find($event_id);
        return view('informasi_stunting.event_edit', compact('event'));
    }
    public function update(Request $request, $event_id)
    {
        Event::find($event_id)->update([
            'judul' => $request -> judul,
            'isi' => $request -> isi,
        ]);
        return redirect('/event');
    }
    public function destroy($event_id)
    {
        Event::find($event_id)->delete();
        return redirect('/event');
    }
}