@extends('layouts.main')

@section('content')
    <section class="Review" id="review">
        <h1 class="heading">Our Customer <span>Reviews</span></h1><br><br>
        <div class="box-container">
            <div class="box">
                <img src="images/josep.jpeg" widht alt="">
                <h3>Josep Phyto Napitupulu</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Cafe cozy di kota Tarutung . 
                    Tempatnya nyaman, menarik, dan bersih!</p>
            </div>
            <div class="box">
                <img src="images/rendi.jpeg" alt="">
                <h3>Rendi Sibarani</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Harganya cukup terjangkau dan
                    pilihan menu makanan cukup beragam</p>
            </div>
            <div class="box">
                <img src="images/viranty.jpeg" alt="">
                <h3>Viranty Napitupulu</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Menyajikan olahan kopi dengan
                    berbagai teknik seduh, V60, Vietnam, Drip, Syphon, delterpress. Minuman non kopijuga tersedia. Lokasinya bagus cozy.</p>
            </div>
            <div class="box">
                <img src="images/vior.jpeg" alt="">
                <h3>Nita Vior</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Mantap! Tempatnya asyik buat nongkrong.</p>
            </div>
            <div class="box">
                <img src="images/intanbetric.jpeg" alt="">
                <h3>Intan betric Siahaan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Rekomendasi tempat nongkrong dengan 
                    pilihan makanan western dan berbagai
                    jenis kopi atau non kopi.</p>
            </div>
            <div class="box">
                <img src="images/rey nainggolan.jpeg" alt="">
                <h3>Rey Nainggolan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Cari tempat nongkrong  serasa di kota
                    besar, lumayan artistik, interiornya bagu</p>
            </div>
        </div>
    </section>
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
        <a href="#review" class="fas fa-arrow-up"></a>
    </div>
</body>

@endsection