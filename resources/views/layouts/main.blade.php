<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>CV. SOLUSI UNGGASINDO</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="LUGAS - konsultan pembangunan dan manajemen kandang ayam petelur Indonesia yang mengedepankan efisiensi dalam produksi">
    <meta keywords="konsultan bisnis ayam, kandang ayam, ayam petelur, pembangunan kandang, manajemen kandang">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main Style -->
    <link rel="shortcut icon" href="{{ asset('img/favicon-lugas.png') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Added Style Rule -->
    <style>
        h1 {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 700;
        }
        h2 {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
        }
        h3 {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
        }
        p {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
        }
    </style>
</head>

<body>
    <main class="content-wrapper">
        <!-- Navbar -->
        <header class="header navbar navbar-expand-lg bg-light navbar-sticky">
            <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100"
                    style="display: flex; align-items: center; justify-content: center; color: white;">
                    <a href="#" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                        <div class="row"
                            style="display: flex ; flex-direction: column; align-items: center; gap: 10px;">
                            <img src="{{ asset('img/logo-lugas.png') }}" alt=""
                                style="width: 200px; height: 25px; object-fit: contain;">
                        </div>
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">LUGAS</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">Portfolio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">Partner Kami</a>
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">FAQ</a>
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
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Icon Search -->
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

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-lg-4">
                    <div class="widget">
                        <img class="mb-4" src="{{ asset('img/logo-lugas-white.png') }}" alt="" />
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
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>

    <!-- Progress Scorll -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Main Script -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>