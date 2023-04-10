@extends('navbar')
@section('isihalaman')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card my-5">
                <form class="card-body cardbody-color p-lg-5" action="{{route('register.action')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <center>
                        <img src="{{asset('assets/images/Logo-CeSting.png')}}" class="img-fluid rounded-circle" width="200px">
                    </center>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary mb1 bg-red px-5 mb-5 w-100">Register</button></div>
                    <div class="form-text text-center mb-5 text-dark">Sudah ada akun? <a href="/login" class="text-dark fw-bold">Login</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection