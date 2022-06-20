@extends('layouts.main5')

@section('content')
@include('sweetalert::alert')
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('pemesanan') }}" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i>Kembali</a>
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-user"></i> My Profile</h4>
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td width="10">:</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td>:</td>
                            <td>{{ $user->nohp }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $user->alamat }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-pencil-alt"></i> Edit Profile</h4>
                    <form action="{{ url('profile') }}" method="post">
                        @csrf
                        <p class="profil">Nama</p>
                        <input id="pengisian" type="text" name="name" placeholder="Masukkan Nama" class="form-control rounded-top @error('name') is-invalid @enderror" required value="{{ $user->name }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <p class="profil">Email</p>
                        <input id="pengisian" type="email" name="email" placeholder="Masukkan Email" class="form-control rounded-top @error('email') is-invalid @enderror" required value="{{ $user->email }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <p class="profil">No HP</p>
                        <input id="pengisian" type="text" name="nohp" placeholder="Masukkan No HP" class="form-control rounded-top @error('nohp') is-invalid @enderror" required value="{{ $user->nohp }}">
                        @error('nohp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <p class="profil">Alamat</p>
                        <textarea id="pengisian" type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control rounded-top @error('alamat') is-invalid @enderror" required value="{{ $user->alamat }}"></textarea>
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <p class="profil">Password</p>
                        <input id="pengisian" type="password" name="password" placeholder="Masukkan Password" class="form-control rounded-top @error('password') is-invalid @enderror">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <p class="profil">Confirm Password</p>
                        <input id="pengisian" type="password" name="confirm_password" placeholder="Masukkan Ulang Password" class="form-control rounded-top @error('confirm_password') is-invalid @enderror">
                        @error('confirm_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <button id="button" type="submit" class="btn btn-success mt-5">save</button>
                        </p>
                    </form>
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