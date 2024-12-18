@extends('layouts.main')

@section('content')

  <!-- Video Opening -->
  <section class="video-wrapper bg-overlay bg-overlay-gradient px-0 mt-0 min-vh-100">
    <video poster="{{ asset('img/photos/flock-chickens-fence.jpg') }}" src="{{ asset('media/chicken-video.mp4') }}" autoplay loop playsinline muted></video>
    <div class="video-content">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 col-xl-6 text-center text-white mx-auto">
            <h1 class="display-1 fs-54 text-white mb-5"><span class="rotator-zoom">Selamat Datang,di LUGAS,CV. SOLUSI UNGGASINDO</span></h1>
            <p class="lead fs-24 mb-0 mx-xxl-8">LUGAS adalah konsultan pembangunan dan manajemen kandang ayam petelur Indonesia yang mengedepankan efisiensi dalam produksi</p>
          </div>
          <!-- /column -->
        </div>
      </div>
      <!-- /.video-content -->
    </div>
    <!-- /.content-overlay -->
  </section>

  <!-- Section 1 -->
  <section class="wrapper bg-light angled lower-end">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-14 mb-md-18">
        <div class="col-lg-6 position-relative">
          <div class="shape rounded bg-pale-red rellax d-block" data-rellax-speed="0"
            style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0"></div>
          <div class="row gx-md-5 gy-5 position-relative">
            <div class="col-6">
              <img class="img-fluid rounded shadow-lg mb-5" data-cue="fadeIn" data-delay="300"
                src="{{ asset('img/photos/flock-chickens-fence.jpg') }}" alt="" />
              <img class="img-fluid rounded shadow-lg d-flex col-10 ms-auto" data-cue="fadeIn" data-delay="600"
                src="{{ asset('img/photos/flock-chickens-fence.jpg') }}" alt="" />
            </div>
            <!-- /column -->
            <div class="col-6">
              <img class="img-fluid rounded shadow-lg my-5" data-cue="fadeIn" data-delay="900"
                src="{{ asset('img/photos/hens-factory-chicken-cages.jpg') }}" alt="" />
              <img class="img-fluid rounded shadow-lg d-flex col-10" data-cue="fadeIn" data-delay="1200"
                src="{{ asset('img/photos/hens-factory-chicken-cages.jpg') }}" alt="" />
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
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
    </div>
  </section>

  <!-- Section 2 -->
  <section class="wrapper bg-light">
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
  </section>

  <section id="snippet-1" class="wrapper bg-light wrapper-border">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
      <h2 class="display-4 mb-3 text-center">Portfolio</h2>
      <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0">Project Sukses Kami Dalam Membangun Kandang
      </p>
      <div class="swiper-container blog grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3"
        data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <article>
                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                      src="{{ asset('img/photos/kandang.jpg') }}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">Read More</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <div class="post-category text-line">
                    <a href="#" class="hover" rel="category">Kandang</a>
                  </div>
                </div>
                <!-- /.post-footer -->
              </article>
              <!-- /article -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <article>
                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                      src="{{ asset('img/photos/kandang.jpg') }}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">Lebih lanjut</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <div class="post-category text-line">
                    <a href="#" class="hover" rel="category">Kandang</a>
                  </div>
                </div>
                <!-- /.post-footer -->
              </article>
              <!-- /article -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <article>
                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                      src="{{ asset('img/photos/kandang.jpg') }}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">Lebih lanjut</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <div class="post-category text-line">
                    <a href="#" class="hover" rel="category">Kandang</a>
                  </div>
                </div>
                <!-- /.post-footer -->
              </article>
              <!-- /article -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide">
              <article>
                <figure class="overlay overlay-1 hover-scale rounded mb-5"><a href="#"> <img
                      src="{{ asset('img/photos/kandang.jpg') }}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">Lebih lanjut</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  <div class="post-category text-line">
                    <a href="#" class="hover" rel="category">Kandang</a>
                  </div>
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
  </section>
  <!-- section -->
  <section class="wrapper bg-gradient-primary">
    <div class="container pt-10 pt-md-14 pb-8 text-center">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-7">
          <figure><img class="w-auto" src="{{ asset('img/illustrations/i2.png') }}"
              srcset="{{ asset('img/illustrations/i2.png') }}" alt="" /></figure>
        </div>
        <!-- /column -->
        <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
          <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Proyeksi Kami</h1>
          <h3 class="lead fs-lg mb-7">Indistri Ayam Petelur Adalah Masa Depan</h3>
          <span>Dengan semakin tingginya daya konsumsi telur secara nasional dan meningkatnya kebutuhan akan protein
            terjangkau, maka dibutuhkan peternak-peternak lokal baru yang dapat memenuhi kebutuhan tersebut, maka kami
            mengajak Anda untuk dapat ikut andil di dalamnya.</></span>
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
  </section>
  <!-- /section -->
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10">
        <div class="col-lg-6 mb-0">
          <h2 class="fs-15 text-uppercase text-secondary mb-3">FAQ</h2>
          <h3 class="display-5 mb-4">Rekomendasi</h3>
          <p class="lead mb-6">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem
            nec elit. Nullam quis risus eget urna mollis ornare.</p>
          <a href="#" class="btn btn-secondary rounded-pill">All FAQ</a>
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
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                    vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
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
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                    vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
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
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                    vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
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
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                    vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.collapse -->
            </div>
            <!-- /.card -->
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

  <section class="wrapper bg-gray">
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
  </section>

@endsection