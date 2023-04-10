@extends('navbar')
@section('isihalaman')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://cdn-icons-png.flaticon.com/512/4336/4336928.png">
                <span class="font-weight-bold">{{App\Models\Profilanak::where('anak_id', Auth::user()->id)->value('nama_depan_anak')}}</span>
                <span></span>
            </div>
        </div>
        <div class="col">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profil Anak</h4>
                </div>
                <form class="card-body cardbody-color p-lg-5" action="/profil_anak" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Nama Depan</label>
                            <input type="text" class="form-control" placeholder="Nama Depan" value="{{App\Models\Profilanak::where('anak_id', Auth::user()->id)->value('nama_depan_anak')}}" name="nama_depan_anak">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Nama Belakang</label>
                            <input type="text" class="form-control" placeholder="Nama Belakang" value="{{App\Models\Profilanak::where('anak_id', Auth::user()->id)->value('nama_belakang_anak')}}" name="nama_belakang_anak">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="mm-dd-yyyy" value="{{App\Models\Profilanak::where('anak_id', Auth::user()->id)->value('tanggal_lahir_anak')}}" name="tanggal_lahir_anak">
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Simpan</button>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection