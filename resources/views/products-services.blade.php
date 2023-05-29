@extends('layouts.main')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-carousel/triumph1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Product & Services</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-gear"></i>
              </div>
              <h3>Motorcycle Spare Parts</h3>
              <p>kami menjual berbagai jenis spare part motor khususnya triumph, namun tidak terbatas disana kami juga menyediakan suku cadang lain</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-motorcycle"></i>
              </div>
              <h3>Custom Bike</h3>
              <p>custom bike sudah menjadi culture bagi anak motor, sehingga kami pun menyediakan custom motor yang sesuai dengan selera anda</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-screwdriver-wrench"></i>
              </div>
              <h3>Motorcycle Maintainance</h3>
              <p>selain menjual spare part kami pun menyediakan jas reparasi motor khusnya trumph bonneville, rocker, and bobber</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->
  @endsection
