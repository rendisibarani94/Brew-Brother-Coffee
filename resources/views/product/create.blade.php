@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <br>
    <form action="{{ url('product')}}" method="post">
    @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('name') Nama Menu Sudah ada @enderror" id="inputEmail3" name="name" placeholder="Nama Barang">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Harga Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('harga') Input Harga Invalid @enderror" id="inputPassword3" name="harga" placeholder="Harga Barang">
            </div>
            @error('harga')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-10">
                <select name="jenis_id" id="inputPassword3" class="form-control @error('jenis_id') Jenis menu harus diisi @enderror" required">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                  </select>
            </div>
            @error('jenis_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea name="deskripsi" class="form-control @error('deskripsi') Deskripsi harus diisi @enderror" placeholder="Input Deskripsi" id="inputPassword3" style="height: 100px"></textarea>
            </div>
            @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection