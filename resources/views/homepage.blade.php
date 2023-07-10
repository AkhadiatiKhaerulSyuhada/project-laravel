@extends('layouts.template')

@section('judul')
Home
@endsection

@section('hero')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Cari Asisten Praktikum Terbaikmu Disini</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Hanya Untuk Daerah Kota Tegal</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lanjutkan</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('tema/img/asisten.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
@endsection

@section('main')


<main id="main">
<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h2>TENTANG ASISTEN</h2>
          <p>
           Asisten Khaesyu adalah penyedia jasa mencari asisten praktikum di Tegal. Bagi Anda yang sedang mencari asisten praktikum di Tegal dengan Kriteria yang anda cari, Asisten Khaesyu siap memberikan pelayanan terbaik untuk Anda.
          </p>
          <div class="text-center text-lg-start">

            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<!-- ======= Values Section ======= -->
<section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Asisten Khaesyu</h2>
      <p>LAYANAN KAMI</p>
    </header>

    <div class="row">

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <img src="{{asset('tema/img/aman.png')}}" class="img-fluid" alt="">
          <h3>Kelebihan Asisten</h3>
          <p>
            Kelebihan Asisten Praktikum yang akan kami pilih adalah yang mempunyai Skilset di atas rata-rata dan mengalami pengalaman lebih.</p>
        </div>
      </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
      <div class="box">
        <img src="{{asset('tema/img/lokasi.png')}}" class="img-fluid" alt="">
        <h3>LOKASI</h3>
        <p>Kami menyarikan Asisten kualitas untuk lokasi yang terdekat dari konsumen.</p>
      </div>
    </div>

  </div>

</section><!-- End Values Section -->


<!-- ======= Review Konsumen ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="798" data-purecounter-duration="1" class="purecounter"></span>
            <p>Konsumen yang suka</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="841" data-purecounter-duration="1" class="purecounter"></span>
            <p>Rating</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-headset" style="color: #15be56;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="675" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pelayanan</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-people" style="color: #bb0852;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="554" data-purecounter-duration="1" class="purecounter"></span>
            <p></p>
          </div>
        </div>
      </div>

    </div>

  </div>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>HUBUNGI KAMI</p>
    </header>

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jln.Prof Buya Hamka NO 50<br>KOTA TEGAL </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Telephone</h3>
              <p>+6285998028730</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>khaesyuuu@gmail.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-clock"></i>
              <h3>Jam Buka</h3>
              <p>Senin - Jumat<br>9:00 - 19.00</p>
              <br>
              <p> Sabtu - Minggu<br>08.00 - 22.00</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">
           <img src="{{asset('tema/img/rame.png')}}" alt="">
           
@endsection