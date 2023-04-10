@extends('navbar')
@section('isihalaman')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @if(session('success'))
                <div class="alert alert-success my-5" role="alert">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                @foreach($errors->all() as $err)
                    <div class="alert alert-danger my-5" role="alert">{{ $err }}</div>
                @endforeach
            @endif
            <div class="card my-5">
                <form class="card-body cardbody-color p-lg-5" action="{{route('login.action')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <center>
                        <img src="{{asset('assets/images/Logo-CeSting.png')}}" class="img-fluid rounded-circle" width="200px">
                    </center>
                    <div class="mb-3">
                        <input type="username" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary mb1 bg-red px-5 mb-5 w-100">Login</button></div>
                    <div class="form-text text-center mb-5 text-dark">Belum ada akun? <a href="/register" class="text-dark fw-bold">Register</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection