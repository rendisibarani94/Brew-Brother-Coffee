<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew Brothers Coffe</title>
    <link href="images/favicon.ico" rel="icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/style/cssgaleri.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div id="preloader"></div>
    <header>
    <a href="/"><img class="logo" src="images/logo1.png" alt="logo" widht = "70" height = "70"></a>
        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">
            <a href="/">Home</a>
            <a href="/pemesanan">Menu</a>
            {{-- <?php
                // $pesanan_utama = \App\Models\Pesanan::where('user_id', auth()->user()->id)->where('status',0)->first();
                // if (!empty($pesanan_utama)) 
                //     {
                //         $notif = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                //     }
            ?>
            <a href="{{ url('check-out') }}">
                <i class="bi bi-cart-fill"></i>Check-Out
                @if(!empty($notif))
                <span class="badge text-bg-danger">{{ $notif }}</span>
                @endif
            </a> --}}
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
                                <li><a class="dropdown-item" href="product" style="background:none">Admin</a></li>
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
    
</body>
<script src="js/script.js"></script>
<script>
    var loading = document.getElementById('preloader');

    window.addEventListener('load',function(){
        loading.style.display="none";
    })
</script>
</html>