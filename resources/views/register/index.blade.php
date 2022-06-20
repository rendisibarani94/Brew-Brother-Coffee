@extends('layouts.main3')

@section('content')

<section class="content" id="content">
    <div class="loginBox">
        <h2>Registrasi Akun</h2>
        <form action="/register" method="post">
            @csrf
            <p>Nama</p>
            <input type="text" name="name" placeholder="Masukkan Nama" class="form-control rounded-top @error('name') is-invalid @enderror" required value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <p>Email</p>
            <input type="email" name="email" placeholder="Masukkan Email" class="form-control rounded-top @error('email') is-invalid @enderror" required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <p>Password</p>
            <input type="password" name="password" placeholder="Masukkan Password" class="form-control rounded-top @error('password') is-invalid @enderror" required>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <p>Confirm Password</p>
            <input type="password" name="confirm_password" placeholder="Masukkan Ulang Password" class="form-control rounded-top @error('confirm_password') is-invalid @enderror" required>
            @error('confirm_password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <button>Daftar</button>
            </p>
            <h4 class="d-block text-center mt-3" style="color: white">Already registered? <a href="/login">Login</a></h4>
        </form>
    </div>
</section>
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
            width="1180" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <div class="button">
        <a href="#content" class="fas fa-arrow-up"></a>
    </div>

@endsection