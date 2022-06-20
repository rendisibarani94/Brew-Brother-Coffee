@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <br>
    <form action="{{ url('product/'.$model->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('name') Nama Menu Sudah ada @enderror" id="inputEmail3" name="name" value="{{ $model->name }}" placeholder="Email">
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Harga Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('harga') Input Harga Invalid @enderror" id="inputPassword3" name="harga" value="{{ $model->harga }}" placeholder="Harga Barang">
            </div>
            @error('harga')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-10">
                <select name="jenis_id" id="inputPassword3" class="form-control @error('jenis_id') Jenis menu harus diisi @enderror" required">
                    <option value="{{ $model->jenis_id }}">1</option>
                    <option value="{{ $model->jenis_id }}">2</option>
                    <option value="{{ $model->jenis_id }}">3</option>
                    <option value="{{ $model->jenis_id }}">4</option>
                    <option value="{{ $model->jenis_id }}">5</option>
                    <option value="{{ $model->jenis_id }}">6</option>
                    <option value="{{ $model->jenis_id }}">7</option>
                  </select>
            </div>
            @error('jenis_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea name="deskripsi" class="form-control @error('deskripsi') Deskripsi harus diisi @enderror" placeholder="Input Deskripsi" id="inputPassword3" style="height: 100px">{{ $model->deskripsi }}</textarea>
            </div>
            @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection