@extends('navbar')
@section('isihalaman')
<div class="container mt-5 mb-5">
    <div class="card row mb-3">
        <div class="col">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="img-fluid" width="150px" src="{{asset('assets/images/Icon-Informasi_Stunting.png')}}">
                <h1><span class="font-weight-bold"><br>Informasi Stunting</span></h1>
            </div>
        </div>
    </div>
    <?php if (Auth::user()->type == 'admin') { ?>
        <div class="card row mb-3">
            <a href="/artikel/create" class="btn btn-primary">Tambah +</a>
        </div>
    <?php } ?>
    @foreach($listartikel as $artikel)
        <div class="card row mb-3">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="/artikel/{{$artikel -> artikel_id}}">
                        @method('GET')
                        <h2>{{$artikel -> judul}}</h2></a>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <p><?php echo Str::substr($artikel -> isi, 0, 500)?>...</p>
                    </div>
                </div>
                <?php if (Auth::user()->type == 'admin') { ?>
                    <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="/artikel/{{$artikel -> artikel_id}}/edit" class="btn btn-primary">
                                    Edit
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <form action="/artikel/{{$artikel -> artikel_id}}" method="POST">
                                    @csrf
                                        @method('DELETE')
                                        <button class="btn btn-primary">
                                            Delete
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                            </svg>
                                        </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    @endforeach
</div>
@endsection