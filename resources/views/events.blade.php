@extends('layouts.main')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-carousel/triumph1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Events</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Events</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 posts-list">

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/triumph300.jpg" class="img-fluid" alt="">
              <span class="post-date">December 12</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Brutal Beauty</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                </div>
              </div>

              <p>
                Brutal beauty menjadi ajang bagi customizer menunjukan hasilnya, maka dari itu triumph riders menunjukan hal tersebut
              </p>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/triumph909.jpg" class="img-fluid" alt="">
              <span class="post-date">March 19</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Get Voucher on Our Event</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                </div>
              </div>

              <p>
                kami membagikan voucher bagi siapapun yang memiliki segala jenis triumph
              </p>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post list item -->



      </div><!-- End blog posts list -->

      <div class="blog-pagination">
        <ul class="justify-content-center">
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div><!-- End blog pagination -->

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection