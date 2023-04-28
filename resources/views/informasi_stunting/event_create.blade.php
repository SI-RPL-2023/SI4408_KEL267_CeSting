@extends('navbar')
@section('isihalaman')
<div class="container mt-5 mb-5">
    <div class="card row mb-3">
        <div class="col">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="img-fluid" width="150px" src="{{asset('assets/images/Icon-Informasi_Stunting.png')}}">
                <h1><span class="font-weight-bold"><br>Event</span></h1>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="p-3 py-5">
            <form action="/event" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h4><b>Judul Event</b></h4>
                        <input type="text" class="form-control" value="" name="judul">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h4>Keterangan Event</h4>
                        <textarea type="text" class="form-control" name="isi"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h4>Tanggal Event</h4>
                        <input type="date" class="form-control" value="" name="tanggal">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                            Tambah
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