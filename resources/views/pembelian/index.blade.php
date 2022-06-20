@extends('layouts.admin')
@section('content')
  <br>
    <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Jumlah Pesanan</th>
          <th>Id Pesanan</th>
          <th>Total Pembelian</th>
          <th>Aksi</th>
        </tr>
        <?php
          $no = 1;
        ?>
        @foreach ($menus as $menu)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $menu->product->name }}</td>
          <td>{{ $menu->jumlah_pesanan }}</td>
          <td>{{ $menu->pesanan_id }}</td>
          <td>{{ $menu->total_harga }}</td>
          <td>
            <form action="{{ url('pembelian/'.$menu->id) }}" method="POST" onsubmit="return confirm('Apakah sudah di bayar ?')">
              @csrf
              <input type="hidden" name="_method" value="delete">
            <button class="btn btn-primary" type="submit"><i class="bi bi-cash-coin"></i> Proses </button>
          </form>
        </td>
        </tr>
        @endforeach
    </table>
@endsection