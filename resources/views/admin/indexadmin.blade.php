@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Our Menu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Our Menu</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section>
        <div class="container">
          <div class="row justify-content-center">
            
      
            @foreach ($products as $product)
              <div class="col-md-3 mb-4">
                <div class="card" style="width: 13rem;">
                    <div class="card-body">
                    <center>
                        <img src="images/makanan2.png" class="icon-cfe" alt="ikon minuman">
                    </center>
                      <h5 class="card-title-cfe">{{ $product->name }}</h5>
                      <p class="card-text-hrg">Rp. {{ number_format($product->harga) }}</p>
                      <a href="{{ url('pesan') }}/{{ $product->id }}" class="btn-psn"><i class="bi bi-cart2"></i> order now</a>
                    </div>
                  </div>
              </div><br>
            @endforeach
          </div>
        </div>
        </div>
    </body>
    <!-- /.content -->
  </div>
@endsection