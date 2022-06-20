@extends('layouts.admin')
@section('content')
  <br>
    <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Nama Pembeli</th>
          <th>No Telepon</th>
          <th>Alamat</th>
          <th>Total Pembelian</th>
          <th>Id Pembelian</th>
          <th>Pembayaran</th>
        </tr>
        <?php
          $no = 1;
        ?>
        @foreach ($menus as $menu)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $menu->user->name }}</td>
          <td>{{ $menu->user->nohp }}</td>
          <td>{{ $menu->user->alamat }}</td>
          <td>{{ $menu->total_harga }}</td>
          <td>{{ $menu->id }}</td>
          <td>
            <form action="{{ url('dibeli/'.$menu->id) }}" method="POST" onsubmit="return confirm('Apakah sudah di terima ?')">
              @csrf
              <input type="hidden" name="_method" value="delete">
            <button class="btn btn-primary" type="submit"><i class="bi bi-bag-check-fill"></i> sudah diterima</button>
          </form>
        </td>
        </tr>
        @endforeach
    </table>
@endsection