@extends('layouts.main')
@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-carousel/triumph1.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Articles</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Articles</li>
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
              <img src="assets/img/artikel1.jpg" class="img-fluid" alt="">
              <span class="post-date">December 12</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">TIGER 1200 EPIC ADVENTURE | WESTERN CAPE SOUTH AFRICA</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                </div>
              </div>

              <p>
                South Africa is home to a plethora of remote, diverse, and epic motorcycle riding locations that are truly hard to beat. With a network of over 700,000 kilometres of dirt roads, the country
              </p>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/artikel4.webp" class="img-fluid" alt="">
              <span class="post-date">March 19</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">THE ULTIMATE ADVENTURE</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                </div>
              </div>

              <p>
                Triumph brought together 4 Tiger owners who are amongst the most seasoned off-road adventure riders in India, and gave them a simple brief - have fun with the all new Tiger 1200, push it to its
              </p>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post list item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/artikel3.webp" class="img-fluid" alt="">
              <span class="post-date">June 24</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">TIGER 1200 RALLY PRO</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
                </div>
              </div>

              <p>
                Pure adventure, absolute advantage. The most all-road capable large capacity adventure motorcycle you can buy, the Rally Pro will take your adventure to the next level.
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