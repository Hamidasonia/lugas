<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
  <link rel="shortcut icon" href="{{ asset('img/favicon-lugas.png') }}">
  <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              <img class="logo-dark" src="{{ asset('img/logo.png') }}" srcset="{{ asset('img/logo@2x.png 2x') }}" alt="" />
              <img class="logo-light" src="{{ asset('img/logo-light.png') }}" srcset="{{ asset('img/logo-light@2x.png 2x') }}" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Demos</a>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Projects</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blocks</a>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Documentation</a>
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
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
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
          <h3 class="text-white fs-30 mb-0">Sandbox</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <div class="widget mb-8">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Moonshine St. 14/05 <br /> Light City, London </address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
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
      <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('img/photos/bg7.jpg') }}">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We bring solutions to make life easier.</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We are a creative company that focuses on long term relationships with customers.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('img/photos/bg8.jpg') }}">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by over a million customers.</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="{{ asset('media/movie.mp4') }}" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image" data-image-src="{{ asset('img/photos/bg9.jpg') }}">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Just sit and relax.</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We make sure your spending is stress free so that you can have the perfect control.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>
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
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
            <div class="overlap-grid overlap-grid-2">
              <div class="item">
                <figure class="rounded shadow"><img src="{{ asset('img/photos/about2.jpg') }}" srcset="{{ asset('img/photos/about2@2x.jpg 2x') }}" alt=""></figure>
              </div>
              <div class="item">
                <figure class="rounded shadow"><img src="{{ asset('img/photos/about3.jpg') }}" srcset="{{ asset('img/photos/about3@2x.jpg 2x') }}" alt=""></figure>
              </div>
            </div>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <img src="{{ asset('img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-3">Who Are We?</h2>
            <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
            <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            <div class="row gy-3 gx-xl-8">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
                </ul>
              </div>
              <!--/column -->
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
                </ul>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row mb-5">
          <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
            <img src="./assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-4 px-lg-14">Here are 3 working steps to organize our business projects.</h2>
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
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">01</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Collect Ideas</h4>
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
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">02</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Data Analysis</h4>
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
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">03</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Finalize Product</h4>
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
            <h2 class="display-6 mb-3">How It Works?</h2>
            <p class="lead fs-lg pe-lg-5">Find out everything you need to know and more about how we create our business process models.</p>
            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare.</p>
            <p class="mb-6">Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.</p>
            <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
      <div class="container pt-16 pb-14 pb-md-0">
        <div class="row gx-lg-8 gx-xl-0 align-items-center">
          <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
            <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block" data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
            <figure><img src="./assets/img/photos/co1.png" srcset="./assets/img/photos/co1@2x.png 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
            <div class="swiper-container dots-start dots-closer mt-md-10 mb-md-15" data-margin="30" data-dots="true">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <blockquote class="icon fs-lg">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur nulla dapibus curabitur blandit faucibus.”</p>
                      <div class="blockquote-details">
                        <div class="info ps-0">
                          <h5 class="mb-1">Coriss Ambady</h5>
                          <p class="mb-0">Financial Analyst</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.swiper-slide -->
                  <div class="swiper-slide">
                    <blockquote class="icon fs-lg">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.”</p>
                      <div class="blockquote-details">
                        <div class="info ps-0">
                          <h5 class="mb-1">Cory Zamora</h5>
                          <p class="mb-0">Marketing Specialist</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.swiper-slide -->
                  <div class="swiper-slide">
                    <blockquote class="icon fs-lg">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.”</p>
                      <div class="blockquote-details">
                        <div class="info ps-0">
                          <h5 class="mb-1">Nikolas Brooten</h5>
                          <p class="mb-0">Sales Manager</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
              </div>
              <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row mb-3">
          <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
            <img src="./assets/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-3 px-lg-14">Save your time and money by choosing our professional team.</h2>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="position-relative">
          <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
          <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem;"></div>
          <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="item-inner">
                    <div class="card">
                      <div class="card-body">
                        <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te1.jpg" srcset="./assets/img/avatars/te1@2x.jpg 2x" alt="" />
                        <h4 class="mb-1">Coriss Ambady</h4>
                        <div class="meta mb-2">Financial Analyst</div>
                        <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                        <nav class="nav social mb-0">
                          <a href="#"><i class="uil uil-twitter"></i></a>
                          <a href="#"><i class="uil uil-facebook-f"></i></a>
                          <a href="#"><i class="uil uil-dribbble"></i></a>
                        </nav>
                        <!-- /.social -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.item-inner -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <div class="item-inner">
                    <div class="card">
                      <div class="card-body">
                        <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te2.jpg" srcset="./assets/img/avatars/te2@2x.jpg 2x" alt="" />
                        <h4 class="mb-1">Cory Zamora</h4>
                        <div class="meta mb-2">Marketing Specialist</div>
                        <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                        <nav class="nav social mb-0">
                          <a href="#"><i class="uil uil-twitter"></i></a>
                          <a href="#"><i class="uil uil-facebook-f"></i></a>
                          <a href="#"><i class="uil uil-dribbble"></i></a>
                        </nav>
                        <!-- /.social -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.item-inner -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <div class="item-inner">
                    <div class="card">
                      <div class="card-body">
                        <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te3.jpg" srcset="./assets/img/avatars/te3@2x.jpg 2x" alt="" />
                        <h4 class="mb-1">Nikolas Brooten</h4>
                        <div class="meta mb-2">Sales Manager</div>
                        <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                        <nav class="nav social mb-0">
                          <a href="#"><i class="uil uil-twitter"></i></a>
                          <a href="#"><i class="uil uil-facebook-f"></i></a>
                          <a href="#"><i class="uil uil-dribbble"></i></a>
                        </nav>
                        <!-- /.social -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.item-inner -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <div class="item-inner">
                    <div class="card">
                      <div class="card-body">
                        <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te4.jpg" srcset="./assets/img/avatars/te4@2x.jpg 2x" alt="" />
                        <h4 class="mb-1">Jackie Sanders</h4>
                        <div class="meta mb-2">Investment Planner</div>
                        <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                        <nav class="nav social mb-0">
                          <a href="#"><i class="uil uil-twitter"></i></a>
                          <a href="#"><i class="uil uil-facebook-f"></i></a>
                          <a href="#"><i class="uil uil-dribbble"></i></a>
                        </nav>
                        <!-- /.social -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.item-inner -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <div class="item-inner">
                    <div class="card">
                      <div class="card-body">
                        <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te5.jpg" srcset="./assets/img/avatars/te5@2x.jpg 2x" alt="" />
                        <h4 class="mb-1">Laura Widerski</h4>
                        <div class="meta mb-2">Sales Specialist</div>
                        <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                        <nav class="nav social mb-0">
                          <a href="#"><i class="uil uil-twitter"></i></a>
                          <a href="#"><i class="uil uil-facebook-f"></i></a>
                          <a href="#"><i class="uil uil-dribbble"></i></a>
                        </nav>
                        <!-- /.social -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.item-inner -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide">
                  <div class="item-inner">
                    <div class="card">
                      <div class="card-body">
                        <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te6.jpg" srcset="./assets/img/avatars/te6@2x.jpg 2x" alt="" />
                        <h4 class="mb-1">Tina Geller</h4>
                        <div class="meta mb-2">Financial Analyst</div>
                        <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                        <nav class="nav social mb-0">
                          <a href="#"><i class="uil uil-twitter"></i></a>
                          <a href="#"><i class="uil uil-facebook-f"></i></a>
                          <a href="#"><i class="uil uil-dribbble"></i></a>
                        </nav>
                        <!-- /.social -->
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.item-inner -->
                </div>
                <!--/.swiper-slide -->
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /.position-relative -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary angled lower-start">
      <div class="container py-14 py-md-16">
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
              <div class="col-md-3">
                <img src="./assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">7518</h3>
                <p>Completed Projects</p>
              </div>
              <!--/column -->
              <div class="col-md-3">
                <img src="./assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">3472</h3>
                <p>Satisfied Customers</p>
              </div>
              <!--/column -->
              <div class="col-md-3">
                <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">2184</h3>
                <p>Expert Employees</p>
              </div>
              <!--/column -->
              <div class="col-md-3">
                <img src="./assets/img/icons/lineal/award-2.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                <h3 class="counter">4523</h3>
                <p>Awards Won</p>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-19 pb-14 pt-md-20 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative">
            <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>
            <figure class="rounded"><img src="./assets/img/photos/about4.jpg" srcset="./assets/img/photos/about4@2x.jpg 2x" alt=""></figure>
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <img src="./assets/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-8">Convinced yet? Let's make something great together.</h2>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Address</h5>
                <address>Moonshine St. 14/05 Light City, <br class="d-none d-md-block" />London, United Kingdom</address>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">Phone</h5>
                <p>00 (123) 456 78 90</p>
              </div>
            </div>
            <div class="d-flex flex-row">
              <div>
                <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
              </div>
              <div>
                <h5 class="mb-1">E-mail</h5>
                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a></p>
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
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16 text-center">
        <div class="row">
          <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
            <img src="./assets/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-3">Join Our Community</h2>
            <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">We are trusted by over 5000+ clients. Join them by using our services and grow your business.</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">Email Address</label>
                      <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-4">
          <div class="widget">
            <img class="mb-4" src="{{ asset('img/logo-light.png') }}" srcset="{{ asset('img/logo-light@2x.png 2x') }}" alt="" />
            <p class="mb-4">© <script>
                document.write(new Date().getUTCFullYear());
              </script> Sandbox. All rights reserved.</p>
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
            <h4 class="widget-title mb-3 text-white">Need Help?</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">Support</a></li>
              <li><a href="#">Get Started</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Learn More</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Features</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Get in Touch</h4>
            <address>Moonshine St. 14/05 Light City, London, United Kingdom</address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
        </div>
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