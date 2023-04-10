<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/style.css')}}"rel="stylesheet">
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <?php
    use App\Models\Profil;
    use App\Models\Profilanak;
  ?>
</head>
<body>
  <header>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
	    <div class="container">
	    	<a class="navbar-brand" href="/"><img src="{{asset('assets/images/Logo-CeSting.png')}}" style="width: 80px; height: 80px;">CeSting</a>
	      <div class="collapse navbar-collapse">
	        <ul class="navbar-nav m-auto">
            <li class="nav-item active"><a href="/" class="nav-link" style="text-align: center"><img src="{{asset('assets/images/Icon-Home.png')}}" style="width: 30px; height: 30px; margin-right: 5px"><br><br>Home</a></li>
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-align: center"><img src="{{asset('assets/images/Icon-Si_Ibu.png')}}" style="width: 30px; height: 30px; margin-right: 5px"><br><br>Cek Si Ibu</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="/rekam_medis">Rekam Medis</a>
                    <a class="dropdown-item" href="/lokasi_pengecekan">Lokasi Pengecekan</a>
                </div>
              </li>
              <li class="nav-item"><a href="/catat_tumbuh" class="nav-link" style="text-align: center"><img src="{{asset('assets/images/Icon-1000_Hari_Anak.png')}}" style="width: 30px; height: 30px; margin-right: 5px"></img><br><br>1000 Hari Anak</a></li>
              <li class="nav-item"><a href="/artikel" class="nav-link" style="text-align: center"><img src="{{asset('assets/images/Icon-Informasi_Stunting.png')}}" style="width: 30px; height: 30px; margin-right: 5px"></img><br><br>Informasi Stunting</a></li>
              <?php if (Auth::user()->type == 'user') { ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-align: center"><img src="{{asset('assets/images/Icon-Profil.png')}}" style="width: 30px; height: 30px; margin-right: 5px"><br><br>Profil</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="/profil">Profil</a>
                    <a class="dropdown-item" href="/profil_anak">Profil Anak</a>
                  </div>
                </li>
              <?php } ?>
              <li class="nav-item"><a href="{{route('logout')}}" class="nav-link" style="text-align: center"><img src="{{asset('assets/images/Icon-Logout.png')}}" style="width: 30px; height: 30px; margin-right: 5px"></img><br><br>Logout</a></li>
            @endauth
            @guest
              <li class="nav-item"><a href="{{route('login')}}" class="nav-link" style="text-align: center"><img src="{{asset('assets/images/Icon-Logout.png')}}" style="width: 30px; height: 30px; margin-right: 5px"><br><br>Login</a>
              <li class="nav-item"><a href="{{route('register')}}" class="nav-link" style="text-align: center"><img src="{{asset('assets/images/Icon-Register.png')}}" style="width: 30px; height: 30px; margin-right: 5px"><br><br>Register</a>
            @endguest
	        </ul>
	      </div>
	    </div>
	  </nav>
  </header>
  <main>
    @yield('isihalaman')
  </main>
</body>
</html>