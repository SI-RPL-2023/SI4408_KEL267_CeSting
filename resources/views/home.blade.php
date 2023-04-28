@extends('navbar')
@section('isihalaman')
<?php 
    use App\Models\Artikel;
    use App\Http\Controllers\ArtikelController;
    $listartikel = Artikel::orderBy('artikel_id') -> get();
    use App\Models\Event;
    use App\Http\Controllers\EventController;
    $listevent = Event::orderBy('event_id') -> get();
?>
    @auth
        <div class="container mt-5 mb-5">
            <div class="card row mb-3">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Artikel Terbaru</h2>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach($listartikel as $artikel)
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title">{{$artikel -> judul}}</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <a href="/artikel/{{$artikel -> id}}"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></a>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Event Terbaru</h2>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach($listevent as $event)
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title">{{$event -> judul}}</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <a href="/event/{{$event -> id}}"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></a>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endauth
    @guest
        <div class="container mt-5 mb-5">
            <div class="card row mb-3">
                <center>
                    <img class="rounded-circle" src="{{asset('assets/images/Logo-CeSting-Homepage.png')}}">
                    <h1><span class="font-weight-bold"><br>Selamat datang di CeSting!</span></h1>
                </center>
            </div>
        </div>
    @endguest
@endsection