<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/favicon.ico" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styleMenu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body>
<div id="preloader"></div>
  <header>
    <a href="/"><img class="logo" src="images/logo1.png" alt="logo" widht = "70" height = "70"></a>
        <div id="menu-bar" class="fas fa-users"></div>
        <nav class="navbar">
            <a href="/">Home</a>
            <a href="/pemesanan">Menu</a>
            <?php
            $pesanan_utama = \App\Models\Pesanan::where('user_id')->where('status',0)->first();
            if (!empty($pesanan_utama)) 
                {
                    $notif = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                }
            ?>
            <a href="{{ url('check-out') }}">
                <i class="bi bi-cart-fill"></i>Check-Out
                @if(!empty($notif))
                <span class="badge text-bg-danger">{{ $notif }}</span>
                @endif
            </a>
            <a href="/galeri">Gallery</a>
            <a href="/review">Review</a>
            <a href="#aboutUs">About Us</a>

            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <ul class="navbar-nav ms-auto">
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/profile" style="background:none">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><a><i class="bi bi-box-arrow-left"></i>&nbsp; Log Out</a> </button>
                                    </form>
                                </li>
                            </ul>
                        @else
                        <a href="/login" style="color: brown"><i class="bi bi-box-arrow-in-right"></i> Login</a>

                        @endauth
                    </ul>
                </div>
            </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
                <br><br>    
            <div class="row">
                <div class="col-md-5">
                    <h1>Brew Brother Coffee</h1>
                    <br>
                    <div class="info-lokasi">
                        <p>Jl. Lintas Barat Sumatra No.160,</p>
                        <p>Hutatoruan VI, Tarutun,</p>
                        <p>Kabupaten Tapanuli Utara,</p>
                        <p>Sumatera Utara</p>
                    </div><br>
                    <div class="phone-num">
                        <p>Phone :+62 812-9506-0680</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="useful-link">
                        <h5>Useful Links</h5><br>
                        <p>><a href="/">Home</a></p>
                        <p>><a href="/pemesanan">Menu</a></p>
                        <p>><a href="#booking">Booking</a></p>
                        <p>><a href="/review">Review</a></p>
                        <p>><a href="#aboutUs">About Us</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-link">
                        <h5>Our Service</h5><br>
                        <a href="https://www.facebook.com/pages/Brew%20Brother%20Coffee%20&%20Roastry/355704245329646/"><img src="images/iconFb.png" width="40px" alt="fb-icon"></a>            
                        <a href="https://www.instagram.com/brewbrothercoffee/"><img src="images/iconIg.png" width="50px" alt="ig-icon"></a>
                    </div>
                </div>
              <center><p>&#169; Copyright Team 5 PA 1 Institut Teknologi Del 2022</p></center>
            </div>
          </div>
      </footer>
    <script src="js/script.js"></script>
    <script>
        var loading = document.getElementById('preloader');

        window.addEventListener('load',function(){
            loading.style.display="none";
        })
    </script>
  </html>