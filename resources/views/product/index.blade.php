@extends('layouts.admin')
@section('content')
  <br>
  <a class="btn btn-info mb-3" href="{{ url('product/create') }}"><i class="bi bi-cart-plus"></i> Tambah</a>
    <table class="table table-bordered">
        <tr>
          <th style="text-align: center">No</th>
          <th style="text-align: center">Nama</th>
          <th style="text-align: center">Jenis</th>
          <th style="text-align: center">Harga</th>
          <th colspan="2" style="text-align: center">Aksi</th>
        </tr>
        <?php
          $no = 1;
        ?>
        @foreach ($datas as $data)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $data->name }}</td>
          <td>{{ $data->jenis->nama }}</td>
          <td>{{ $data->harga }}</td>
          <td><a class="btn btn-warning" href="{{ url('product/'.$data->id.'/edit') }}"><i class="bi bi-pen"></i> Edit</a></td>
          <td>
            <form action="{{ url('product/'.$data->id) }}" method="post" onsubmit="return confirm('Yakin Ingin Menghapus data ?')">
              @csrf
              <input type="hidden" name="_method" value="delete">
              <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i> Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
    </table>
   <div class="container">
    {{ $datas->links() }}
   </div>

@endsection