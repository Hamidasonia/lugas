@extends('layouts.main')

@section('content')

  <!-- Video Opening -->
  {{-- <section class="video-wrapper bg-overlay bg-overlay-gradient px-0 mt-0 min-vh-100">
    <video poster="{{ asset('img/photos/flock-chickens-fence.jpg') }}" src="{{ asset('media/chicken-video.mp4') }}" autoplay loop playsinline muted></video>
    <div class="video-content">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 col-xl-6 text-center text-white mx-auto">
            <h1 class="display-1 fs-54 text-white mb-5"><span class="rotator-zoom">Selamat Datang</span></h1>
            <p class="lead fs-24 mb-0 mx-xxl-8">LUGAS adalah konsultan pembangunan dan manajemen kandang Indonesia yang mengedepankan efisiensi dalam produksi</p>
          </div>
          <!-- /column -->
        </div>
      </div>
      <!-- /.video-content -->
    </div>
    <!-- /.content-overlay -->
  </section> --}}

  <section class="wrapper bg-dark">
    <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('img/slide-0.png') }}">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                  <h1 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Selamat Datang</h1>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">LUGAS adalah konsultan pembangunan dan manajemen kandang Indonesia yang mengedepankan efisiensi dalam produksi</p>
                  {{-- <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div> --}}
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.container -->
          </div>
          <!--/.swiper-slide -->
          <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('img/slide-1.png') }}">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                  <h1 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Selamat Datang</h1>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">LUGAS adalah konsultan pembangunan dan manajemen kandang Indonesia yang mengedepankan efisiensi dalam produksi</p>
                  {{-- <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div> --}}
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.container -->
          </div>
          <!--/.swiper-slide -->
          <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('img/slide-2.png') }}">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                  <h1 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Selamat Datang</h1>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">LUGAS adalah konsultan pembangunan dan manajemen kandang Indonesia yang mengedepankan efisiensi dalam produksi</p>
                  {{-- <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div> --}}
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.container -->
          </div>
          <!--/.swiper-slide -->
          <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('img/slide-3.png') }}">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                  <h1 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Selamat Datang</h1>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">LUGAS adalah konsultan pembangunan dan manajemen kandang Indonesia yang mengedepankan efisiensi dalam produksi</p>
                  {{-- <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div> --}}
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.container -->
          </div>
          <!--/.swiper-slide -->
          <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('img/slide-4.png') }}">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                  <h1 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Selamat Datang</h1>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">LUGAS adalah konsultan pembangunan dan manajemen kandang Indonesia yang mengedepankan efisiensi dalam produksi</p>
                  {{-- <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div> --}}
                </div>
                <!--/column -->
              </div>
              <!--/.row -->
            </div>
            <!--/.container -->
          </div>
          <!--/.swiper-slide -->
          <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('img/slide-5.png') }}">
            <div class="container h-100">
              <div class="row h-100">
                <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                  <h1 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Selamat Datang</h1>
                  <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">LUGAS adalah konsultan pembangunan dan manajemen kandang Indonesia yang mengedepankan efisiensi dalam produksi</p>
                  {{-- <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div> --}}
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

  <!-- Section 1 -->
  <section class="wrapper bg-light angled lower-end" id="home">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
        <div class="col-lg-6 position-relative">
          <div class="shape rounded bg-pale-red rellax d-block" data-rellax-speed="0"
            style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0"></div>
          <div class="row gx-md-5 gy-5 position-relative">
            <div class="col-6">
              <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="300"
                src="{{ asset('img/kandang-1.png') }}" alt="" />
              <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn" data-delay="600"
                src="{{ asset('img/kandang-2.png') }}" alt="" />
            </div>
            <!-- /column -->
            <div class="col-6">
              <img class="img-fluid rounded shadow-lg my-5" data-cue="fadeIn" data-delay="900"
                src="{{ asset('img/kandang-3.png') }}" alt="" />
              <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200"
                src="{{ asset('img/kandang-1.png') }}" alt="" />
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md text-primary mb-4" 
            alt="" />
          <h2 class="display-4 mb-3" data-cue="slideInDown" style="color: #DC5800">Solusi Pembangunan Kandang, Manajemen dan Konsultasi Ayam Petelur</h2>
          <p class="lead fs-lg" data-cue="slideInDown" style="color: #0D1E41">Kami berfokus pada bidang ayam petelur dan menjadi ahli sejak tahun 1997</p>
          <a href="#process" class="btn btn-primary rounded-pill mb-0">Selanjutnya</a>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
    </div>
  </section>

  {{-- <section class="wrapper bg-light">
    <div class="container pt-7 pt-md-10 pb-14 pb-md-17">
      <div class="row mb-5">
        <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
          <img src="{{ asset('img/icons/lineal/list.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
          <h2 class="display-4 mb-4 px-lg-14">Apa yang Kami Kerjakan?</h2>
        </div>
      </div>
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
                </div>
              </div>
            </div>
          </div>
          <div class="card ms-lg-13 mt-6">
            <div class="card-body p-6">
              <div class="d-flex flex-row">
                <div>
                  <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                      class="number">02</span></span>
                </div>
                <div>
                  <h4 class="mb-1">Pembuatan Kandang dan Penyediaan Alat</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="card mx-lg-6 mt-6">
            <div class="card-body p-6">
              <div class="d-flex flex-row">
                <div>
                  <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                      class="number">03</span></span>
                </div>
                <div>
                  <h4 class="mb-1">Manajemen Kandang Ayam Petelur</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6 col-xl-5 align-self-end">
                <div class="card bg-pale-new">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p style="color: white">Memetakan kebutuhan domestik, membuat perencanaan keuangan, ketersediaan pakan, dan
                        memastikan distribution channel</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1" style="color: white">Proyeksi peluang bisnis</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="col-md-6 align-self-end">
                <div class="card bg-pale-new">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p style="color: white">Perencanaan kandang yang disesuaikan dengan anggaran, kebutuhan, geografis dan alat yang
                        diperlukan.</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1" style="color: white">Membuat kandang</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="card bg-pale-new">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p style="color: white">Memastikan operasional kandang dapat berjalan dengan baik, Anda dapat menerapkan sistem kerja
                        kami yang telah terbukti efisien.</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1" style="color: white">Manajemen kandang yang baik</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="col-md-6 align-self-start">
                <div class="card bg-pale-new">
                  <div class="card-body">
                    <blockquote class="icon mb-0">
                      <p style="color: white">Dengan sistem manajemen yang baik, Anda dapat menghasilkan produk yang baik dan sesuai
                        linimasa.</p>
                      <div class="blockquote-details">
                        <div class="info p-0">
                          <h5 class="mb-1" style="color: white">Menghasilkan produk</h5>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Section 2 -->
  <section id="about" class="wrapper position-relative min-vh-60 d-lg-flex align-items-center" style="background-color: #0D1E41">
      <div class="col-lg-6 position-lg-absolute top-0 start-0 image-wrapper bg-image bg-cover h-100" data-cue="slideInLeft" data-image-src="{{ asset('img/pembangunan-kandang.png') }}">
        <div class="divider divider-v-end d-none d-lg-block" style="color:#0D1E41">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
            <polygon fill="currentColor" points="48 0 0 0 48 1200 54 1200 54 0 48 0" />
          </svg>
        </div>
      </div>
      <div class="container">
        <div class="row gx-0">
          <div class="col-lg-6 ms-auto">
            <div class="pt-13 pb-15 pb-md-17 py-lg-16 ps-lg-15 pe-xxl-16">
              <h2 class="fs-15 text-uppercase text-muted mb-3" data-cue="slideInLeft">Apa yang Kami Kerjakan?</h2>
              <h3 class="display-3 ls-sm mb-7" style="color: #DC5800" data-cue="slideInLeft">Konsultasikan Kebutuhan Anda Seputar Bisnis Ayam Petelur dari Hulu Hingga Hilir Kepada Kami</h3>
              
              <div class="d-flex flex-row mb-5">
                <img src="{{ asset('img/icons/lineal/light-bulb.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5 mt-1" alt="" />
                <div>
                  <h4 class="fs-20 ls-sm" style="color: #ffffff" data-cue="slideInLeft">Konsultasi Bisnis Ayam Petelur</h4>
                  <p class="mb-0" style="color: #ffffff" data-cue="slideInLeft">Dapatkan panduan ahli dalam manajemen pakan, kesehatan ternak, strategi pemasaran, dan analisis keuntungan. Optimalkan produksi dan raih keuntungan maksimal dengan efisien.</p>
                </div>
              </div>
              
              <div class="d-flex flex-row mb-5">
                <img src="{{ asset('img/icons/lineal/pie-chart-2.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5 mt-1" alt="" />
                <div>
                  <h4 class="fs-20 ls-sm" style="color: #ffffff" data-cue="slideInLeft">Pembuatan Kandang dan Penyediaan Alat</h4>
                  <p class="mb-0" style="color: #ffffff" data-cue="slideInLeft">Kami menyediakan layanan pembuatan kandang yang efisien dan sesuai standar, serta penyediaan alat-alat peternakan berkualitas. Pastikan ayam petelur Anda tumbuh optimal dengan fasilitas terbaik.</p>
                </div>
              </div>
              
              <div class="d-flex flex-row mb-5">
                <img src="{{ asset('img/icons/lineal/design.svg') }}" class="svg-inject icon-svg icon-svg-md text-orange me-5 mt-1" alt="" />
                <div>
                  <h4 class="fs-20 ls-sm" style="color: #ffffff" data-cue="slideInLeft">Manajemen Kandang</h4>
                  <p class="mb-0" style="color: #ffffff" data-cue="slideInLeft">Dengan manajemen kandang yang tepat, kami membantu dalam pengaturan ventilasi, kebersihan, pencahayaan, serta sistem pakan dan minum untuk memastikan kesehatan dan hasil produksi terbaik. Selain itu, kami juga menyediakan pelatihan SDM agar tim Anda siap dan terampil dalam mengelola kandang, meningkatkan efisiensi, dan menjaga kualitas produksi.</p>
                </div>
              </div>
              
              <div>
          <h2 class="fs-15 text-uppercase text-muted mb-3" data-cue="slideInLeft">Visi Misi</h2>
          <h1 class="ls-sm mb-5" style="color: azure;">Kami Perusahaan yang Memiliki Visi dalam Memajukan Peternak Ayam Petelur</h1>
          <p class="mb-6" style="color: azure;">Visi kami adalah memampukan para peternak ayam petelur untuk bersaing secara nasional, dengan memastikan efisiensi produksi dan keberlanjutan operasional.</p>
        </div>
    
        <div class="d-flex flex-column align-items-start mb-15 mb-md-18">
          <div class="d-flex flex-row mb-3">
            <i class="uil uil-check me-3" style="color: azure;"></i>
            <p class="mb-0" style="color: azure;"><strong>01.</strong> Mengembangkan prasarana peternakan untuk mendukung peningkatan produksi yang optimal.</p>
          </div>
          <div class="d-flex flex-row mb-3">
            <i class="uil uil-check me-3" style="color: azure;"></i>
            <p class="mb-0" style="color: azure;"><strong>02.</strong> Menyediakan layanan konsultasi dengan memberikan panduan dalam produksi yang efisien dan terstandar.</p>
          </div>
          <div class="d-flex flex-row">
            <i class="uil uil-check me-3" style="color: azure;"></i>
            <p class="mb-0" style="color: azure;"><strong>03.</strong> Menyediakan layanan manajemen yang memastikan keberlanjutan operasional dengan efisiensi tinggi.</p>
          </div>
        </div>
    
        <div>
          <h3 style="color: azure;">Kami menerapkan standar tinggi dalam seluruh aspek pembangunan, mempekerjakan tenaga ahli yang profesional, dan menggunakan peralatan modern untuk memastikan hasil yang baik.</h3>
        </div>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Visi Misi Section -->
      <!--<div class="container py-12">-->
        
      <!--</div>-->
    </section>


  <!-- Section 3 -->
  <section id="process" class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <h2 class="display-4 mb-3">Bagaimana Mewujudkannya?</h2>
      <p class="lead fs-lg mb-8">Berikut Tahapan Dalam <span class="underline">Mewujudkan Mimpi</span> Menjadi Peternak Ayam Petelur</p>
      <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">01</span></span>
          <h4 class="mb-1" data-cue="bounceIn">Proyeksi peluang bisnis</h4>
          <p class="mb-0" data-cue="bounceIn">Memetakan kebutuhan domestik, membuat perencanaan keuangan, ketersediaan pakan, dan memastikan distribution channel</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">02</span></span>
          <h4 class="mb-1" data-cue="bounceIn">Membuat kandang</h4>
          <p class="mb-0" data-cue="bounceIn">Perencanaan kandang yang disesuaikan dengan anggaran, kebutuhan, geografis dan alat yang diperlukan</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">03</span></span>
          <h4 class="mb-1" data-cue="bounceIn">Manajemen kandang yang baik</h4>
          <p class="mb-0" data-cue="bounceIn">Memastikan operasional kandang dapat berjalan dengan baik, Anda dapat menerapkan sistem kerja kami yang telah terbukti efisien</p>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">04</span></span>
          <h4 class="mb-1" data-cue="bounceIn">Menghasilkan produk</h4>
          <p class="mb-0" data-cue="bounceIn">Dengan sistem manajemen yang baik, Anda dapat menghasilkan produk yang baik dan sesuai linimasa</p>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <!-- Section 4 -->
  <section id="portfolio" class="wrapper bg-light wrapper-border">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="row text-center">
            <div class="col-lg-10 col-xl-7 col-xxl-6 mx-auto">
                <h2 class="fs-15 text-uppercase text-muted mb-3" data-cue="fadeIn">Portfolio</h2>
                <h3 class="display-3 ls-sm mb-10" data-cue="fadeIn">Project Sukses Kami Dalam Membangun Kandang</h3>
            </div>
        </div>

        <div class="swiper-container blog grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-nav="true" data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="{{ asset('img/portfolio-1.png') }}" data-fancybox="gallery" data-caption="Portfolio Pembangunan">
                                    <img src="{{ asset('img/portfolio-1.png') }}" alt="Portfolio Pembangunan" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Lebih Lanjut</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="{{ asset('img/portfolio-2.png') }}" data-fancybox="gallery" data-caption="Portfolio Pembangunan">
                                    <img src="{{ asset('img/portfolio-2.png') }}" alt="Portfolio Pembangunan" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Lebih Lanjut</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="{{ asset('img/portfolio-3.png') }}" data-fancybox="gallery" data-caption="Portfolio Pembangunan">
                                    <img src="{{ asset('img/portfolio-3.png') }}" alt="Portfolio Pembangunan" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Lebih Lanjut</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>

                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="{{ asset('img/portfolio-4.png') }}" data-fancybox="gallery" data-caption="Portfolio Pembangunan">
                                    <img src="{{ asset('img/portfolio-4.png') }}" alt="Portfolio Pembangunan" />
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Lebih Lanjut</h5>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Section 5 -->
  {{-- <section id="proyeksi" class="wrapper bg-gradient-primary">
    <div class="container pt-10 pt-md-14 pb-8 text-center">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-7">
          <figure><img class="w-auto" src="{{ asset('img/illustrations/i2.png') }}"
              srcset="{{ asset('img/illustrations/i2.png') }}" alt="" /></figure>
        </div>
        <!-- /column -->
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
          <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Proyeksi Kami</h1>
          <h3 class="lead fs-lg mb-7">Industri Ayam Petelur Adalah Masa Depan</h3>
          <span>Dengan semakin tingginya daya konsumsi telur secara nasional dan meningkatnya kebutuhan akan protein
            terjangkau, maka dibutuhkan peternak-peternak lokal baru yang dapat memenuhi kebutuhan tersebut, maka kami
            mengajak Anda untuk dapat ikut andil di dalamnya.</></span>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section> --}}

  <!-- Section 6 -->
  {{-- <section id="visi" class="wrapper bg-white">
    <div class="container py-15 py-md-17">
      <div class="text-center">
        <h2 class="text-uppercase text-muted mb-3">Siapa kami?</h2>
        <h1 class="ls-sm mb-5">Perusahaan yang Memiliki Visi dalam Memajukan Peternak Ayam Petelur</h1>
        <p class="mb-6">Visi kami adalah memampukan para peternak ayam petelur untuk bersaing secara nasional, dengan memastikan efisiensi produksi dan keberlanjutan operasional</p>
        
        <!--/.row -->
      </div>
      <!--/.row -->
      <div class="row gx-lg-8 gx-xl-12 gy-6 mb-15 mb-md-18">
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <i class="uil uil-check"></i>
            </div>
            <div>
              <h4 class="fs-20 ls-sm">01</h4>
              <p class="mb-2">Mengembangkan prasarana peternakan untuk mendukung peningkatan produksi yang optimal.</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <i class="uil uil-check"></i>
            </div>
            <div>
              <h4 class="fs-20 ls-sm">02</h4>
              <p class="mb-2">Menyediakan layanan konsultasi dengan memberikan panduan dalam produksi yang efisien dan terstandar</p>
            </div>
          </div>
        </div>
        <!--/column -->
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <i class="uil uil-check"></i>
            </div>
            <div>
              <h4 class="fs-20 ls-sm">03</h4>
              <p class="mb-2">Menyediakan layanan manajemen yang memastikan keberlanjutan operasional dengan efisiensi tinggi</p>
            </div>
          </div>
        </div>
        <!--/column -->
      </div>
      <div class="text-center">
        <h3>Kami menerapkan standar tinggi dalam seluruh aspek pembangunan, mempekerjakan tenaga ahli yang profesional, dan menggunakan peralatan modern untuk memastikan hasil yang baik.</h3>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section> --}}

  <!-- Section 7 -->
  {{-- <section id="partner" class="wrapper bg-light wrapper-border">
    <div class="container py-14 py-md-16">
      <p class="text-center mb-8">Partner Kami</p>
      <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-loop="true"
        data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="5000" data-items-xxl="7"
        data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
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
  </section> --}}

  <!-- Section 8 -->
  <section id="faq" class="wrapper bg-gray">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10">
        <div class="col-lg-6 mb-0">
          <h2 class="fs-15 text-uppercase text-primary mb-3">FAQ</h2>
          <h3 class="display-5 mb-4">Rekomendasi FAQ</h3>
          <p class="lead mb-6">Temukan jawaban atas pertanyaan umum yang sering diajukan. Kami menyediakan informasi lengkap untuk membantu Anda memahami layanan kami dengan lebih baik.</p>
          <a href="#" class="btn btn-primary rounded-pill">Lihat Semua FAQ</a>
        </div>        
        <!--/column -->
        <div class="col-lg-6">
          <div id="accordion-3" class="accordion-wrapper">
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-3-1">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1"
                  aria-expanded="false" aria-controls="accordion-collapse-3-1">Apakah LUGAS merupakan perusahaan
                  konsultan peternak ayam petelur?</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1"
                data-bs-target="#accordion-3">
                <div class="card-body">
                  <p>Ya, kami juga siap mendampingi dan mengedukasi peternak pemula ataupun peternak yang ingin berkembang untuk membentuk manajemen pemeliharaan yang optimal serta efisien.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-3-2">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2"
                  aria-expanded="false" aria-controls="accordion-collapse-3-2">Apa perbedaan LUGAS dengan penyedia
                  alat peternakan lain?</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2"
                data-bs-target="#accordion-3">
                <div class="card-body">
                  <p>Lugas memiliki tim mekanik elektrikal internal serta tim pembangunan yang terlatih serta siap merespon secara cepat bila terjadi kendala serta suku cadang yang mudah didapatkan sebagai komitmen “after sale” kami kepada pelanggan. Kami pun memiliki support tim expert dalam manajemen peternakan, sehingga ketika kami menjual, kami pun berkomitmen pembeli akan mendapat hasil yang optimal dengan produk yang dibeli dan dengan biaya yang terjangkau.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-3-3">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3"
                  aria-expanded="false" aria-controls="accordion-collapse-3-3">Apakah LUGAS menjual alat-alat
                  peternakan secara terpisah?</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3"
                data-bs-target="#accordion-3">
                <div class="card-body">
                  <p>Kami dapat menjual perlatan kandang secara terpisah sesuai dengan kebutuhan dari konsumen</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-3-4">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4"
                  aria-expanded="false" aria-controls="accordion-collapse-3-4">Apakah LUGAS dapat membantu membangun
                  bisnis ayam petelur dari nol?</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4"
                data-bs-target="#accordion-3">
                <div class="card-body">
                  <p>Ya, kami bisa membantu membangun bisnis peternakan ayam mulai dari 0. Berdasarkan pengalaman yang kami punya, kami siap untuk mendampingi dan mengedukasi setiap orang yang mau memulai bisnis peternakan dapat memulai dan terus berjalan menjadi ekosistem bisnis yang baik dan terus bertumbuh.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-3-5">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-5"
                  aria-expanded="false" aria-controls="accordion-collapse-3-5">Apakah LUGAS dapat membantu mengembangkan bisnis yang sudah berjalan?</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-3-5" class="collapse" aria-labelledby="accordion-heading-3-5"
                data-bs-target="#accordion-3">
                <div class="card-body">
                  <p>Ya, kami dapat mendampingi dan mengedukasi peternakan yang sudah berjalan untuk memiliki managemen yang terstandar sehingga peternakan akan terus berkembang dan bertahan dalam setiap fluktuasi iklim bisnis peternakan.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-3-6">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-6"
                  aria-expanded="false" aria-controls="accordion-collapse-3-6">Jaminan apa yang LUGAS berikan selama pengerjaan dan pasca proyek?</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-3-6" class="collapse" aria-labelledby="accordion-heading-3-6"
                data-bs-target="#accordion-3">
                <div class="card-body">
                  <p>Lugas akan memberikan edukasi kepada pembeli dalam optimalisasi penggunaan alat yang dibeli sehingga dapat memberikan hasil yang optimal, serta pelayanan “after sale” kami secara mekanik elektrikal akan siap sedia untuk melakukan pemeliharaan alat sehingga dapat selalu berfungsi optimal.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-3-7">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-7"
                  aria-expanded="false" aria-controls="accordion-collapse-3-7">Apakah LUGAS merupakan kontraktor pembangunan kandang ayam petelur?</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-3-7" class="collapse" aria-labelledby="accordion-heading-3-7"
                data-bs-target="#accordion-3">
                <div class="card-body">
                  <p>Ya, Lugas juga dapat merancang dan membangunkan kandang sesuai dengan kebutuhan dari konsumen</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <div class="card accordion-item">
              <div class="card-header" id="accordion-heading-3-8">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-8"
                  aria-expanded="false" aria-controls="accordion-collapse-3-8">Apakah LUGAS dapat mengerjakan pembuatan kandang hewan ternak lain selain kandang ayam petelur?</button>
              </div>
              <!-- /.card-header -->
              <div id="accordion-collapse-3-8" class="collapse" aria-labelledby="accordion-heading-3-8"
                data-bs-target="#accordion-3">
                <div class="card-body">
                  <p>Ya, Lugas melayani juga untuk pembuatan kandang ternak lain seperti ayam pedaging, babi, dll.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
          </div>
          <!-- /.accordion-wrapper -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  {{-- <section class="wrapper bg-gray">
    <div class="container pt-19 pb-14 pt-md-20 pb-md-16">
      <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
          <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;">
          </div>
          <figure class="rounded"><img src="{{ asset('img/photos/about4.jpg') }}" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <img src="{{ asset('img/icons/lineal/telemarketer.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4"
            alt="" />
          <h2 class="display-4 mb-8">Jangan ragu untuk menghubungi kami perihal kandang dan peternakan ayam petelur</h2>
          <a href="#" class="btn btn-success rounded-pill mb-0">Hubungi Kami</a>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section> --}}

  <!-- Section 9 -->
  <section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center py-14 py-md-16 bg-map" data-image-src="{{ asset('img/map.png') }}" id="hubungi">
    <div class="container py-0 py-md-17">
      <div class="row">
        <div class="col-lg-6 col-xl-5 mx-auto">
          <h2 class="display-4 mb-3 text-center">Tertarik?</h2>
          <p class="lead mb-5 px-md-16 px-lg-3">Jangan ragu untuk menghubungi kami perihal kandang dan peternakan ayam petelur</p>
          <a href="https://wa.me/6285124572415?text=Halo%20LUGAS%20Farm,%20mohon%20bantuannya,%20saya%20ingin%20bertanya%20terkait…" class="btn btn-primary rounded-pill">Konsultasi Sekarang</a>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>

@endsection

@section('script')
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        Fancybox.bind("[data-fancybox='gallery']", {
            infinite: true,
            keyboard: true,
            toolbar: true,
            arrows: true,
            animationEffect: "zoom-in-out",
        });
    });
  </script>
@endsection