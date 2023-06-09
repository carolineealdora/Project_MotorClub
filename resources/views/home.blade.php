@extends('layouts.main')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Triumph <span>Riders</span></h2>
            <p data-aos="fade-up">Triumph Riders adalah organisasi yang dibentuk atas kecintaan penghobi atas motor triumphnya</p>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/triumph1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/triumph2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/triumph4.jpeg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->
@endsection
