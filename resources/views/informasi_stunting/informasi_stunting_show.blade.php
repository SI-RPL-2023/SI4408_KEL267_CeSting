@extends('navbar')
@section('isihalaman')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col">
            <div class="d-flex flex-column p-3 py-5">
                <h1><span class="font-weight-bold"><center>{{$artikel -> judul}}</center></span></h1>
            </div>
        </div>
    </div>
    <div class="row p-3 py-5">
        <div class="p-3 py-5">
            <div class="row mt-3">
                <div class="col-md-12">
                    <p>{{$artikel -> isi}}</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    {{$artikel -> tanggal}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
