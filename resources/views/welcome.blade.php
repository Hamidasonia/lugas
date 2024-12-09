<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords"
    content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>LUGAS - CV. SOLUSI UNGGASINDO</title>
  <link rel="shortcut icon" href="{{ asset('img/favicon-lugas.png') }}">
  <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100" style="display: flex; align-items: center; justify-content: center; color: white;">
            <a href="#" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
              <div class="row" style="display: flex ; flex-direction: column; align-items: center; gap: 10px;">
                <img src="{{ asset('img/photos/logo-lugas.png') }}" alt="" style="width: 90px; height: 50px; object-fit: contain;">
                <span style="line-height: 1;">CV. SOLUSI UNGGASINDO</span>
              </div>
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Portfolio</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Partner Kami</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">FAQ</a>
                  <!--/.dropdown-menu -->
                </li>
                
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br /> 00 (123) 456 78 90 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i
                    class="uil uil-info-circle"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i
                    class="uil uil-search"></i></a></li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="text-white fs-30 mb-0">LUGAS</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <div class="widget mb-8">
            <p>LUGAS adalah konsultan pembangunan dan manajemen kandang ayam petelur Indonesia yang mengedepankan efisiensi dalam produksi </p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Info Kontak</h4>
            <address> Jalan Baru <br /> Jawa Tengah, Indonesia </address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> +62 8888888
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
          </form>
          <!-- /.search-form -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    <section class="wrapper bg-dark">
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000"
        data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
              data-image-src="{{ asset('img/photos/chick-egg.jpg') }}">
              <div class="container h-100">
                <div class="row h-100">
                  <div
                    class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2
                      class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                      Halo, kami adalah LUGAS.</h2>
                    <p
                      class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                      Konsultan pembangunan dan manajemen kandang ayam petelur Indonesia</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#"
                        class="btn btn-lg btn-outline-white rounded-pill">Lebih lanjut</a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
              data-image-src="{{ asset('img/photos/hens-factory-chicken-cages.jpg') }}">
              <div class="container h-100">
                <div class="row h-100">
                  <div
                    class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                    <h2
                      class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                      Kami mengedepankan efisiensi dalam produksi</h2>
                    <p
                      class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                      Testimoni pelanggan kami.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a
                        href="{{ asset('media/movie.mp4') }}"
                        class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i
                          class="icn-caret-right"></i></a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
              data-image-src="{{ asset('img/photos/flock-chickens-fence.jpg') }}">
              <div class="container h-100">
                <div class="row h-100">
                  <div
                    class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2
                      class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                      Solusi Anda</h2>
                    <p
                      class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                      Menjadi solusi pembangunan kandang, manajemen dan konsultasi ayam petelur.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#"
                        class="btn btn-lg btn-outline-white rounded-pill">Hubungi kami</a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </section>
    <section class="wrapper bg-light angled lower-end">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
          <div class="col-lg-6 position-relative order-lg-2">
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem">
            </div>
            <div class="overlap-grid overlap-grid-2">
              <div class="item">
                <figure class="rounded shadow"><img src="{{ asset('img/photos/flock-chickens-fence.jpg') }}"
                     alt=""></figure>
              </div>
              <div class="item">
                <figure class="rounded shadow"><img src="{{ asset('img/photos/hens-factory-chicken-cages.jpg') }}"
                     alt=""></figure>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4"
              alt="" />
            <h2 class="display-4 mb-3">Solusi Pembangunan Kandang, Manajemen dan Konsultasi Ayam Petelur</h2>
            <p class="lead fs-lg">Kami berfokus pada bidang ayam petelur dan menjadi ahli sejak tahun 1997</p>
            <a href="#" class="btn btn-primary rounded-pill mb-0">Selanjutnya</a>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row mb-5">
          <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
            <img src="{{ asset('img/icons/lineal/list.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-4 px-lg-14">Apa yang Kami Kerjakan?</h2>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="card me-lg-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                        class="number">01</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Konsultasi Bisnis Ayam Petelur</h4>
                    <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card ms-lg-13 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                        class="number">02</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Pembuatan Kandang dan Penyediaan Alat</h4>
                    <p class="mb-0">Vivamus sagittis lacus vel augue laoreet.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
            <div class="card mx-lg-6 mt-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div>
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                        class="number">03</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Manajemen Kandang Ayam Petelur</h4>
                    <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                  </div>
                </div>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="display-6 mb-3">Bagaimana Mewujudkannya?</h2>
            <p class="lead fs-lg pe-lg-5">Berikut Tahapan Dalam Mewujudkan Mimpi Menjadi Peternak Ayam Petelur</p>
            <h4 class="mb-1">01. Proyeksi peluang bisnis</h4>
            <p class="mb-0">Memetakan kebutuhan domestik, membuat perencanaan keuangan, ketersediaan pakan, dan memastikan distribution channel</p>
            <h4 class="mb-1">02. Membuat kandang</h4>
            <p class="mb-0">Perencanaan kandang yang disesuaikan dengan anggaran, kebutuhan, geografis dan alat yang diperlukan</p>
            <h4 class="mb-1">03. Manajemen kandang yang baik</h4>
            <p class="mb-0"> Memastikan operasional kandang dapat berjalan dengan baik, Anda dapat menerapkan sistem kerja kami yang telah terbukti efisien</p>
            <h4 class="mb-1">04. Menghasilkan produk</h4>
            <p class="mb-0">Dengan sistem manajemen yang baik, Anda dapat menghasilkan produk yang baik dan sesuai linimasa</p>
            
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section id="snippet-1" class="wrapper bg-light wrapper-border">
      <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <h2 class="display-4 mb-3 text-center">Portfolio</h2>
        <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">Project Sukses Kami Dalam Membangun Kandang</p>
        <div class="swiper-container blog grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <article>
                  <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="{{ asset('img/photos/b4.jpg') }}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Read More</h5>
                    </figcaption>
                  </figure>
                  <div class="post-header">
                    <div class="post-category text-line">
                      <a href="#" class="hover" rel="category">Kandang</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="../../blog-post.html">Ligula tristique quis risus</a></h2>
                  </div>
                  <!-- /.post-header -->
                  <div class="post-footer">
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.post-footer -->
                </article>
                <!-- /article -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <article>
                  <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="{{ asset('img/photos/b5.jpg') }}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Lebih lanjut</h5>
                    </figcaption>
                  </figure>
                  <div class="post-header">
                    <div class="post-category text-line">
                      <a href="#" class="hover" rel="category">Kandang</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="../../blog-post.html">Nullam id dolor elit id nibh</a></h2>
                  </div>
                  <!-- /.post-header -->
                  <div class="post-footer">
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.post-footer -->
                </article>
                <!-- /article -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <article>
                  <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="{{ asset('img/photos/b6.jpg') }}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Lebih lanjut</h5>
                    </figcaption>
                  </figure>
                  <div class="post-header">
                    <div class="post-category text-line">
                      <a href="#" class="hover" rel="category">Kandang</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="../../blog-post.html">Ultricies fusce porta elit</a></h2>
                  </div>
                  <!-- /.post-header -->
                  <div class="post-footer">
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.post-footer -->
                </article>
                <!-- /article -->
              </div>
              <!--/.swiper-slide -->
              <div class="swiper-slide">
                <article>
                  <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img src="{{ asset('img/photos/b7.jpg') }}" alt="" /></a>
                    <figcaption>
                      <h5 class="from-top mb-0">Lebih lanjut</h5>
                    </figcaption>
                  </figure>
                  <div class="post-header">
                    <div class="post-category text-line">
                      <a href="#" class="hover" rel="category">Kandang</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="../../blog-post.html">Morbi leo risus porta eget</a></h2>
                  </div>
                  <div class="post-footer">
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2022</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.post-footer -->
                </article>
                <!-- /article -->
              </div>
              <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
      </div>
      <!-- /.container -->
      <!-- /.container -->
    </section>
    <!-- /section -->

  <!-- section -->
  <section class="wrapper bg-gradient-primary">
    <div class="container pt-10 pt-md-14 pb-8 text-center">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-7">
          <figure><img class="w-auto" src="{{ asset('img/illustrations/i2.png') }}" srcset="{{ asset('img/illustrations/i2.png') }}" alt="" /></figure>
        </div>
        <!-- /column -->
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
          <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Proyeksi Kami</h1>
          <h3 class="lead fs-lg mb-7">Indistri Ayam Petelur Adalah Masa Depan</h3>
          <span>Dengan semakin tingginya daya konsumsi telur secara nasional dan meningkatnya kebutuhan akan protein terjangkau, maka dibutuhkan peternak-peternak lokal baru yang dapat memenuhi kebutuhan tersebut, maka kami mengajak Anda untuk dapat ikut andil di dalamnya.</></span>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper bg-light wrapper-border">
    <div class="container py-14 py-md-16">
      <p class="text-center mb-8">Partner Kami</p>
      <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-loop="true" data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="5000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
        <div class="swiper">
          <div class="swiper-wrapper ticker">
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c1.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c2.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c3.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c4.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c5.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c6.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c7.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c8.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c9.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c10.png') }}" alt="" /></div>
            <div class="swiper-slide px-5"><img src="{{ asset('img/brands/c11.png') }}" alt="" /></div>
          </div>
          <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
    <!-- /section -->
    
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-19 pb-14 pt-md-20 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
            <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;">
            </div>
            <figure class="rounded"><img src="{{ asset('img/photos/about4.jpg') }}"
                 alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <img src="{{ asset('img/icons/lineal/telemarketer.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-8">Tertarik? Hubungi Kami</h2>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Alamat</h5>
                <address>Jalan Kinibaru <br class="d-none d-md-block" />Jawa Tengah, Indonesia
                </address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Phone</h5>
                <p>+62 8888000</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">E-mail</h5>
                <p class="mb-0"><a href="mailto:example@email.com" class="link-body">example@email.com</a></p>
              </div>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-4">
          <div class="widget">
            <img class="mb-4" src="{{ asset('img/favicon-lugas.png') }}"
              alt="" />
            <p class="mb-4">© <script>
                document.write(new Date().getUTCFullYear());
              </script> Lugas. All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2 offset-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Butuh Bantuan?</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">Support</a></li>
              <li><a href="#">Mulai</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        
        <!-- /column -->
        
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>