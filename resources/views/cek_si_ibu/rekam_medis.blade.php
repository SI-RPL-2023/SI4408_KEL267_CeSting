@extends('navbar')
@section('isihalaman')
<div class="container mt-5 mb-5">
    <div class="card row mb-3">
        <div class="col">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="img-fluid" width="150px" src="{{asset('assets/images/Icon-Si_Ibu.png')}}">
                <h1><span class="font-weight-bold"><br>Rekam Medis</span></h1>
            </div>
        </div>
    </div>
    <?php if (Auth::user()->type == 'admin') { ?>
        <div class="card row mb-3">
            <a href="/rekam_medis/create" class="btn btn-primary">Tambah +</a>
        </div>
        @foreach($listrekammedis as $rekammedis)
            <div class="card row mb-3">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2><b>{{$rekammedis -> username}}</b></h2>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2><b>Janin</b></h2></a>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Berat Janin (g)</h5>
                                    <h1>{{$rekammedis -> berat_janin}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Panjang Janin (cm)</h5>
                                    <h1>{{$rekammedis -> panjang_janin}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Detak Jantung Janin (bpm)</h5>
                                    <h1>{{$rekammedis -> detak_janin}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2><b>Ibu</b></h2></a>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Berat Ibu (kg)</h5>
                                    <h1>{{$rekammedis -> berat_ibu}}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Detak Jantung Ibu (bpm)</h5>
                                    <h1>{{$rekammedis -> detak_ibu}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <a href="/rekam_medis/{{$rekammedis -> rekam_id}}/edit" class="btn btn-primary">
                                Edit
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <form action="/rekam_medis/{{$rekammedis -> rekam_id}}" method="POST">
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
                    <div class="d-flex flex-row-reverse justify-content-between align-items-center">
                        {{$rekammedis -> tanggal_rekam_medis}}
                    </div>
                </div>
            </div>
        @endforeach
    <?php } ?>
    <?php if (Auth::user()->type == 'user') { ?>
        @if($listrekammedis->count()!=0)
            @if(DB::table('rekam_medis')->where('username', Auth::user()->username)->exists())
                @foreach($listrekammedis as $rekammedis)
                    @if($rekammedis->username==Auth::user()->username)
                        <div class="card row mb-3">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h2><b>{{$rekammedis -> username}}</b></h2>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h2><b>Janin</b></h2></a>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Berat Janin (g)</h5>
                                                <h1>{{$rekammedis -> berat_janin}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Panjang Janin (cm)</h5>
                                                <h1>{{$rekammedis -> panjang_janin}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Detak Jantung Janin (bpm)</h5>
                                                <h1>{{$rekammedis -> detak_janin}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h2><b>Ibu</b></h2></a>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Berat Ibu (kg)</h5>
                                                <h1>{{$rekammedis -> berat_ibu}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Detak Jantung Ibu (bpm)</h5>
                                                <h1>{{$rekammedis -> detak_ibu}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row-reverse justify-content-between align-items-center">
                                    {{$rekammedis -> tanggal_rekam_medis}}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="row mt-3">
                    <div class="col-md-12">
                        <a href="/line-chart" class="btn btn-primary">
                            Statistik
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @else
            <div class="col">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <h1><span class="font-weight-bold"><br>Anda belum memiliki riwayat rekam medis</span></h1>
                </div>
            </div>
            @endif
        @else
        <div class="col">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <h1><span class="font-weight-bold"><br>Anda belum memiliki riwayat rekam medis</span></h1>
            </div>
        </div>
        @endif
    <?php } ?>
</div>
@endsection