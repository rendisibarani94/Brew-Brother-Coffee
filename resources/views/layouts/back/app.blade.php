<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Halaman Administrator</title>
        <!-- Favicon-->
        <link rel="icon" type="{{asset('back/image/x-icon')}}" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('back/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            @section('sidebar')
                @include('layouts.back.inc.sidebar')
            @show
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
            @section('header')
                @include('layouts.back.inc.header')
            @show
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{asset('back/js/scripts.js')}}"></script>
    </body>
</html>
