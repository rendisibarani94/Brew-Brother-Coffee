@extends('layouts.admin')
@section('content')
<div class="content-wrapper"><br>
    @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <form action="{{ url('event')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea name="deskripsi" class="form-control @error('deskripsi') Deskripsi harus diisi @enderror" placeholder="Input Deskripsi" id="inputPassword3" style="height: 100px">{{ old('deskripsi') }}</textarea>
            </div>
            @error('deskripsi')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="file" class="@error('gambar') Gambar harus diisi Ext(jpeg,jpg,png) @enderror" name="gambar" id="inputPassword3" value="{{ old('gambar') }}">
            </div>
            @error('gambar')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection