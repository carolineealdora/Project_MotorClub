@extends('layouts.main')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-carousel/triumph1.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Gallery</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Galery</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-motor">Motorcycle</li>
            <li data-filter=".filter-service">Events</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-motor">
              <div class="portfolio-content h-100">
                <img src="assets/img/artikel1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>T1200</h4>
                  <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  <a href="assets/img/artikel1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-motor">
              <div class="portfolio-content h-100">
                <img src="assets/img/hero-carousel/triumph1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>triumph bobber</h4>
                  <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                  <a href="assets/img/hero-carousel/triumph1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-service">
              <div class="portfolio-content h-100">
                <img src="assets/img/hero-carousel/triumph2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Fine Riding</h4>
                  <p>triumph bonnevelle</p>
                  <a href="assets/img/hero-carousel/triumph2.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-service">
              <div class="portfolio-content h-100">
                <img src="assets/img/triumph909.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Voucher</h4>
                  <p>voucher triumph</p>
                  <a href="assets/img/hero-carousel/triumph2.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-service">
              <div class="portfolio-content h-100">
                <img src="assets/img/triumph300.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Triumph 300</h4>
                  <p>voucher</p>
                  <a href="assets/img/hero-carousel/triumph2.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->

@endsection
