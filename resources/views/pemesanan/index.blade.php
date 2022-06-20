@extends('layouts.main4')

@section('content')
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="judul">
          <center>
              <h1 id="menu">Our<span> Menu</span></h1>
          </center>
      </div>

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
                <button type="button" class="btn btn-secondary mt-3" data-bs-toggle="tooltip" data-bs-html="true" title="{{ $product->deskripsi }}">
                  Deskripsi
                </button>
              </div>
            </div>
        </div><br>
      @endforeach
    </div>
  </div>
  </div>
  <div class="bawah" id="bawah"></div>
      <section class="aboutUs" id="aboutUs"><br><br>
          <div>
              <img src="images/placeholder.png" alt="placeholder">
              <p class="icon">Location :</p>
              <p id="icon">Jl. Lintas Barat Sumatera No.160, Hutatoruan VI, Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara  </p>
          </div><br><br><br>
          <div>
              <img src="images/stopwatch.png" alt="jam">
              <p class="icon">Open Hours :</p>
              <p id="icon">Everyday</p>
          </div><br><br><br>
          <div>
              <img src="images/phone.png" alt="phone">
              <p class="icon">Call :</p>
              <p id="icon">+62 812-9506-0680</p>
          </div><br><br><br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.3350545785597!2d98.96054581429458!3d2.0215998596131666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6ef35113edc5%3A0x56e4b23e2b984d90!2sBREW%20BROTHER%20COFFEE!5e0!3m2!1sid!2sid!4v1650291102799!5m2!1sid!2sid" 
              width="1350" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>
      <div class="button">
          <a href="#menu" class="fas fa-arrow-up"></a>
      </div>
  </section>
</body>
@endsection