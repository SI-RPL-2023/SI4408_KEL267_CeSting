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
    @if($errors->any())
        @foreach($errors->all() as $err)
            <div class="alert alert-danger my-5" role="alert">{{ $err }}</div>
        @endforeach
    @endif
    <div class="card row mb-3">
        <div class="p-3 py-5">
            <form action="/rekam_medis" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2><b>Janin</b></h2>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Username Ibu</h5>
                                <h1><input type="text" class="form-control-plaintext" value="" name="username" placeholder="..."></h1>
                            </div>
                        </div>
                    </div>
    </div>
</div>
@endsection