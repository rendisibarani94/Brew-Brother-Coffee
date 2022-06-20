@extends('layouts.main5')

@section('content')
@include('sweetalert::alert')
<br><br><br><br><br><br><br><br>
<div class="container" id="check-out">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('pemesanan') }}" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i>Kembali</a>
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Check Out</h3>
                    <div class="col-md-12">
                        <div class="card">
                            <p style="font-size: 1.8rem; text-align:center">Pastikan anda sudah mengisi data diri anda dengan lengkap sebelum <span style="color: red">Check Out</span></p>
                        </div>
                    </div><br><br>
                    @if(!empty($pesanan))
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="th">
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                            ?>
                            @foreach($pesanan_details as $pesanan_detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan_detail->product->name }}</td>
                                <td>{{ $pesanan_detail->jumlah_pesanan }}</td>
                                <td align="left">Rp. {{ number_format($pesanan_detail->product->harga) }}</td>
                                <td align="left">Rp. {{ number_format($pesanan_detail->total_harga) }}</td>
                                <td>
                                    <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="swal('Pesanan Dihapus', '', 'success')"><i class="fa fa-trash"></i> Batal</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" align="center"><strong>Total Harga :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->total_harga) }}</strong></td>
                                <td>
                                    <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success">
                                        <i class="fa fa-shopping-cart"></i> Check Out
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div><br><br><br>
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
          <a href="#check-out" class="fas fa-arrow-up"></a>
      </div>
  </section>
</body>
@endsection