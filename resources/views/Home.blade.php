@extends('layouts.main')


@section('content')
    <section class="home" id="home">
        <div class="content">
            <h4>Coffee Shope</h4>
            <h3>Brew Brothers Coffee</h3>
            <p>Nikmati waktu luang anda dengan menyeduh kopi untuk menemani dan menghiasi hari anda. 
            </p>
            <p><a href="/pemesanan" class="btn">Order Now</a></p>
        </div>
        <div class="image">
            <img src="images/blob.png" alt="">
        </div>
    </section>
    <section class="story" id="story">
        <h1 class="heading">Story of  The <span>Coffe Used</span></h1><br><br>
        <img class="gambar1" src="images/coffe_branch_1.jpg" alt="coffe"><br><br>
        <p>
            Brew Brothers Coffee adalah salah satu cafe yang didirikan atas dasar persaudaraan. Brew Brother Coffee 
            berasal dari kata ‘brew coffee’ yang artinya menyeduh kopi dan ‘brother’ yang artinya persaudaraan‘. 
            Cafe ini memiliki tempat yang indah dikarenakan tempat ini didesain dengan warna yang menyesuaikan dengan 
            karakternya yaitu coffee sehingga ruangan disana terasa lebih klasik dan ditambah penataan ruangan dengan 
            kursi dan meja yang menggunakan kayu yang diukir dengan indah.
        </p><br>
        <p>
            Pemilik Brew Brothers Coffee ini adalah Rio Lumban Tobing dan adiknya, Rendra Lumban Tobing. Untuk mengelola cafe, 
            beliau dibantu beberapa pekerjanya dengan berbagai posisi pekerjaan. Posisi tersebut ada sebagai pelayan, 
            pengelola kasir, ada sebagai Barista, dan ada juga sebagai cheff. Custumer yang dating dari berbagai kalangan 
            baik itu kalangan remaja, orang dewasa hingga anak anak, pengunjung yang dating ke caffe ini tidak hanya 
            warga local setempat tetapi bahkan dari luar daerah, bahkan turis juga sering dating berkunjung ke cafe tersebut.
        </p><br>
        <p>
            Di zaman modern ini, banyak orang lebih memilih untuk menghidangkan kopi secara instan sehingga menyebabkan 
            minimnya usaha kopi. Berbeda dengan Brew Brother Coffee, pemilik Brew Brother Coffee lebih memilih membangun 
            sebuah tempat yang nyaman untuk sekedar menikmati kopi bersama keluarga, kerabat, atau pun saudara. Terlebih 
            pemilik Brew Brother Coffee yang memiliki passion dibidang ini.
        </p><br>
        <p>
            Brew Brother Coffee adalah usaha yang berbeda dengan usaha kopi lainnya. Hal yang membuat usaha Brew Brother 
            Coffee ini berbeda dari yang lain adalah menggunakan biji kopi pilihan dan diolah dengan baik sehingga menghasilkan 
            kualitas kopi yang tidak bisa dinego. Hal ini dikarenakan dapat merusak cita rasa dari kopi. Biji kopi yang 
            digunakan oleh Brew Brother Coffee adalah biji kopi Arabika, yang dimana biji kopi ini memiliki aroma dan 
            rasa yang khas. Untuk pembuatan minuman kopi pun, biji kopi yang digunakan oleh Brew Brother Coffee adalah 
            pure dari biji kopi Arabika yang tidak bisa dicampur dari biji kopi lainnya agar rasa dari kopi ini benar-benar memuaskan lidah. 

        </p><br>
        <p>
            Kopi Arabika adalah biji kopi yang paling banyak diminati oleh masyarakat. Biji kopi Arabika merupakan biji 
            kopi yang paling besar produksinya di dunia dengan harga yang  berdasarkan kualitas dan memiliki bentuk rasa 
            serta aroma yang sangat kompleks. Salah satu ciri khas biji kopi Arabika yaitu bijinya berbentuk pipih, panjang 
            dan teksturnya lebih haluss. Sekitar 60-70% biji kopi arabika di produksi di dunia dan dipercayai sebagai 
            tanaman kopi yang pertama kali dibudidayakan dalam sejarah industri kopi. 
        </p><br>
        <p>
            Kopi arabika memiliki harga yang lebih mahal dan kadar kafeinnya lebih sedikit dibandingkan dengan kopi lainnya. 
            Kopi Arabika tidak selalu hitam dan pahit. Kopi ini diseduh dengan suhu V60 dan menghasilkan rasa yang lembut, 
            seperti warna teh biasa. Kopi Arabika sangat familiar dengan rasa yang begitu kompleks, mulai dari after taste 
            yang seperti buah-buahan, rempah-rempah, karamel dan lain sebagainya.
        </p><br>
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
        <a href="#home" class="fas fa-arrow-up"></a>
    </div>
    
    
</body>
@endsection