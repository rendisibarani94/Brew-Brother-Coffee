@extends('layouts.main5')

@section('content')
@include('sweetalert::alert')
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('pemesanan') }}" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i>Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('images/makanan2.png') }}" class="rounded mx-auto d-block"  alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h1 class="pesan">{{ $product->name }}</h1>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($product->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pesanan</td>
                                        <td>:</td>
                                        <td>
                                            <form method="post" action="{{ url('pesan') }}/{{ $product->id }}">
                                            @csrf
                                                <input type="number" name="jumlah_pesan" style="font-size: 1.7rem" class="form-control" required>
                                                <button type="submit" class="btn btn-primary mt-3" style="font-size: 1.7rem" onclick="swal('Pesanan Sukses Masuk Keranjang ', 'Terimakasih', 'success')"><i class="bi bi-cart2"></i> pesan</button>
                                                <script src="dist/sweetalert2.all.min.js"></script>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<div class="bawah" id="bawah"></div>
    <section class="aboutUs" id="aboutUs"><br><br>
        <div>
            <img src="{{asset('images/placeholder.png') }}" alt="placeholder">
            <p class="icon">Location :</p>
            <p id="icon">Jl. Lintas Barat Sumatera No.160, Hutatoruan VI, Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara  </p>
        </div><br><br><br>
        <div>
            <img src="{{asset('images/stopwatch.png') }}" alt="jam">
            <p class="icon">Open Hours :</p>
            <p id="icon">Everyday</p>
        </div><br><br><br>
        <div>
            <img src="{{asset('images/phone.png') }}" alt="phone">
            <p class="icon">Call :</p>
            <p id="icon">+62 812-9506-0680</p>
        </div><br><br><br>
        <iframe src="{{asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.3350545785597!2d98.96054581429458!3d2.0215998596131666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6ef35113edc5%3A0x56e4b23e2b984d90!2sBREW%20BROTHER%20COFFEE!5e0!3m2!1sid!2sid!4v1650291102799!5m2!1sid!2sid') }}" 
            width="1350" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <div class="button">
        <a href="#menu" class="fas fa-arrow-up"></a>
    </div>
</body>
@endsection