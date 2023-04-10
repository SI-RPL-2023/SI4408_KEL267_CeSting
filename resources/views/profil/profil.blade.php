@extends('navbar')
@section('isihalaman')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://cdn-icons-png.flaticon.com/512/522/522335.png">
                <span class="font-weight-bold">{{Auth::user()->username}}</span>
                <span class="text-black-50">{{Auth::user()->email}}</span>
                <span></span>
            </div>
        </div>
        <div class="col">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profil</h4>
                </div>
                <form class="card-body cardbody-color p-lg-5" action="/profil" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Nama Depan</label>
                            <input type="text" class="form-control" placeholder="Nama Depan" value="{{App\Models\Profil::where('user_id', Auth::user()->id)->value('nama_depan')}}" name="nama_depan">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Nama Belakang</label>
                            <input type="text" class="form-control" placeholder="Nama Belakang" value="{{App\Models\Profil::where('user_id', Auth::user()->id)->value('nama_belakang')}}" name="nama_belakang">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="mm-dd-yyyy" value="{{App\Models\Profil::where('user_id', Auth::user()->id)->value('tanggal_lahir')}}" name="tanggal_lahir">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">No. HP</label>
                            <input type="int" class="form-control" placeholder="No. HP" value="{{App\Models\Profil::where('user_id', Auth::user()->id)->value('no_hp')}}" name="no_hp">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Provinsi</label>
                            <input type="text" class="form-control" placeholder="Provinsi" value="{{App\Models\Profil::where('user_id', Auth::user()->id)->value('provinsi')}}" name="provinsi">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Kabupaten/Kota</label>
                            <input type="text" class="form-control" placeholder="Kabupaten/Kota" value="{{App\Models\Profil::where('user_id', Auth::user()->id)->value('kabupaten_kota')}}" name="kabupaten_kota">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" value="{{App\Models\Profil::where('user_id', Auth::user()->id)->value('alamat')}}" name="alamat">
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection