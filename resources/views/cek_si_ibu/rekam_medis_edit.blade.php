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
    <div class="card row mb-3">
        <div class="p-3 py-5">
            <form action="/rekam_medis/{{$rekammedis -> rekam_id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2><b>Janin</b></h2>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Berat Janin (g)</h5>
                                <h1><input type="int" class="form-control-plaintext" value="{{$rekammedis -> berat_janin}}" name="berat_janin" placeholder="..."></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Panjang Janin (cm)</h5>
                                <h1><input type="int" class="form-control-plaintext" value="{{$rekammedis -> panjang_janin}}" name="panjang_janin" placeholder="..."></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Detak Jantung Janin (bpm)</h5>
                                <h1><input type="int" class="form-control-plaintext" value="{{$rekammedis -> detak_janin}}" name="detak_janin" placeholder="..."></h1>
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
                                <h1><input type="int" class="form-control-plaintext" value="{{$rekammedis -> berat_ibu}}" name="berat_ibu" placeholder="..."></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Detak Jantung Ibu (bpm)</h5>
                                <h1><input type="int" class="form-control-plaintext" value="{{$rekammedis -> detak_ibu}}" name="detak_ibu" placeholder="..."></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection