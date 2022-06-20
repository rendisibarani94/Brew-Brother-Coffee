@extends('layouts.main6')


@section('content')
<center>
    <br><br><br><br><br><br>
    <h1 style="font-size: 4rem" class="mt-5" id="gallery">Our <span>Galeri</span></h1>
</center>
<div class="container">
    <div class="row mb-5">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <img src="images/cafe1.jpeg" class="img-fluid" alt="Gambar" width="400px" height="600px">
        </div>
        <div class="col-md-4"><p>         
            Letaknya yang strategis membuat cafe ini banyak dikunjungi masyarakat, dari anak muda, orang tua, hingga keluarga yang ingin bersantay atau menikmati weekend mereka. Suasana luar cafe yang membuat kita dapat merasakan angin malam yang sejuk sambil menyeduh kopi. Tempat parkir di cafe ini juga dekat dengan cafe sehingga memudahkan kita untuk parkir dan masuk ke dalam cafe.
       </p>
       <div class="col-md-2">
    </div>
    </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <img src="images/cafe2.jpg" class="img-fluid" alt="Gambar" width="400px" height="600px">
        </div>
        <div class="col-md-4">
            <p>
            Brew Brother Coffee merupakan salah satu cafe yang menyediakan menu special seperti kopi dan menu makanan lain. Cafe ini dapat dijadikan sebagai tempat singgah sementara dan bersantai. 
            Cafe ini banyak di kunjungi oleh anak-anak muda bahkan keluarga untuk menikmati waktu santai mereka. Keluarga yang memiliki perjalanan jauh dan ingin istirahat dapat singgah ke cafe ini serta anak-anak muda uang ingin menghabiskan waktu weekendnya pun dapat berkumpul di cafe ini untuk menikmati nuansa cafe yang indah dan nyaman.
            </p>
        </div>
        <div class="col-md-2">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <img src="images/cafe3.jpg" class="img-fluid" alt="Gambar" width="400px" height="600px"></div>
        <div class="col-md-4 mt-5">
            <p>        
            Dibalik tempat yang indah dan suasananya yang nyaman, cafe ini memiliki desain warna yang sesuai dengan karakternya yaitu kopi. Ruangannya klasik dengan penataan ruangan kursi dan meja yang digunakan berupa kayu yang diukir dengan indah. Pada malam hari, nuansa cafe ini sangat terasa. Hal ini dikarenakan dekorasi tempatnya sangat menarik. Suasana cafe ini sangat etnic karena adanya sentuhan kayu dan kaca yang menyatu.
        </p>
    </div>
    <div class="col-md-2">
    </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <img src="images/cafe4.jpg" class="img-fluid" alt="Gambar" width="400px" height="600px">
        </div>
        <div class="col-md-4">
            <p>
                Saat memasuki cafe, kita disambut oleh tempatnya yang rapi, bersih dan aman. Bukan hanya itu saja, waktu santay kita pun ditemani dengan alunan musik yang semakin menambah suasana cafe menjadi semakin seru. Proses pelayanan di cafe ini juga sangat ramah sehingga memudahkan kita dapat memesan makanan atau kopi yang kita inginkan.
            </p>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <img src="images/cafe5.jpg" class="img-fluid" alt="Gambar" width="400px" height="600px">
        </div>
        <div class="col-md-4">
            <p>   
            Cafe Brew Brother Coffee ini menyedu kopi dengan menggunakan biji kopi pilihan.Biji kopi yang digunakan adalah biji kopi Arabika. Yang dimana, biji kopi ini memiliki aroma dan rasa yang khas. Saat penyeduhan kopi, kita di sambut oleh gambar yang ada di kopi tersebut. Bukan hanya itu saja, kita dapat mengatakan kepada baristanya gambar apa yang kita sukai.
            </p>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    @foreach($galeris as $key => $galeri)
    <div class="row mb-5">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('assets/'.$galeri['gambar'])}}" class="img-fluid" alt="Gambar" width="400px" height="600px">
        </div>
        <div class="col-md-4">
            <p>   
           {{ $galeri['deskripsi'] }}
            </p>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
@endforeach

    <section class="aboutUs" id="aboutUs" style="margin-top: 260rem"><br><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.3350545785597!2d98.96054581429458!3d2.0215998596131666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6ef35113edc5%3A0x56e4b23e2b984d90!2sBREW%20BROTHER%20COFFEE!5e0!3m2!1sid!2sid!4v1650291102799!5m2!1sid!2sid" 
            width="1180" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <div class="button">
        <a href="#gallery" class="fas fa-arrow-up"></a>
    </div>
    
    
</body>
@endsection