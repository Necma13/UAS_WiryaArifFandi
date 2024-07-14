<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Hananan Academy | Homepage</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    .service-block_one-icon i {
        font-size: 2em; /* Adjust the size as needed */
        color: white;  /* Change color to white */
    }
</style>
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

<div class="page-wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt="" title=""></a></div>
                        </div>
                        <div class="nav-outer d-flex flex-wrap">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="about.html">About</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4 6l16 0" />
                                <path d="M4 12l16 0" />
                                <path d="M4 18l16 0" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->
        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa-solid fa-xmark fa-fw"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/mobile-logo.png" alt="" title=""></a></div>
                <div class="menu-outer"></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->

    <!-- Banner One -->
    <section class="banner-one" style="background-image:url(assets/images/background/1.jpg)">
        <div class="robot">
            <script type="module" src="https://unpkg.com/@splinetool/viewer@1.3.5/build/spline-viewer.js"></script>
            <spline-viewer url="https://prod.spline.design/AqtlWJlNbO-ZMkvz/scene.splinecode"></spline-viewer>
        </div>
        <div class="auto-container">
            <!-- Content Column -->
            <div class="banner-one_content">
                <div class="banner-one_content-inner">
                    <h1 class="banner-one_heading">Hananan <br> Academy</h1>
                    <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                        <div class="banner-one_text" style="font-size: 18px;">Memakmurkan tenaga pengajar</div>
                        <div class="banner-one_text-two" style="font-size: 16px;">
                            Menjadi media dalam melakukan pengembangan potensi dan mencerdaskan <br>
                            generasi sekarang agar siap menghadapi kehidupan di masa yang akan datang.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner One -->

    <!-- Services One -->
    <section class="services-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <h2 class="sec-title_heading">Data Siswa</h2>
                <div class="sec-title_icon"><img src="assets/images/icons/icon-1.png" alt="" /></div>
            </div>
            <div class="row clearfix">
                <!-- Service Block One -->
                <div class="service-block_one col-lg-6 col-md-6 col-sm-12">
                    <div class="service-block_one-inner d-flex justify-content-between align-items-center flex-wrap">
                        <h3 class="service-block_one-heading">Profil</h3>
                        <div class="service-block_one-icon">
                            <i class="bi bi-person-fill"></i>
                        </div>
                    </div>
                </div>
                <!-- Service Block One -->
                <div class="service-block_one col-lg-6 col-md-6 col-sm-12">
                    <div class="service-block_one-inner d-flex justify-content-between align-items-center flex-wrap">
                        <h3 class="service-block_one-heading">Jadwal Pelajaran</h3>
                        <div class="service-block_one-icon">
                            <i class="bi bi-calendar-fill"></i>
                        </div>
                    </div>
                </div>
                <!-- Service Block One -->
                <div class="service-block_one col-lg-6 col-md-6 col-sm-12">
                    <div class="service-block_one-inner d-flex justify-content-between align-items-center flex-wrap">
                        <h3 class="service-block_one-heading">Nilai</h3>
                        <div class="service-block_one-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                    </div>
                </div>
                <!-- Service Block One -->
                <div class="service-block_one col-lg-6 col-md-6 col-sm-12">
                    <div class="service-block_one-inner d-flex justify-content-between align-items-center flex-wrap">
                        <h3 class="service-block_one-heading">Pembayaran</h3>
                        <div class="service-block_one-icon">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services One -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="footer_copyright">Copyright &copy; Hananan Academy</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
</div>
<!-- End PageWrapper -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>
<script src="assets/js/script.js"></script>
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</body>
</html>
