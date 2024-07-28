
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v4.8.0" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <!-- Css -->
        <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        @yield('css')
    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
                <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                    <div class="sidebar-brand">
                        <a href="/home">
                            <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                            <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                            <span class="sidebar-colored">
                                <img src="assets/images/logo-light.png" height="24" alt="">
                            </span>
                        </a>
                    </div>

                    <ul class="sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/siswa">
                                <i class="fas fa-fw fa-user"></i>
                                <span>Profile</span></a>
                        </li>

                       <li class="nav-item">
                                <a class="nav-link" href="/pembayaran">
                                    <i class="fas fa-fw fa-money-bill"></i>
                                    <span>Pembayaran</span></a>
                        </li>

                        <li class="nav-item">
                                <a class="nav-link" href="/pelajaran">
                                    <i class="fas fa-fw fa-book"></i>
                                    <span>Pelajaran</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/nilai">
                                <i class="fas fa-fw fa-graduation-cap"></i>
                                <span>Nilai</span></a>
                        </li>
                    </ul>
                    <!-- sidebar-menu  -->
                </div>
            </nav>
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="header-bar d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <a href="#" class="logo-icon me-3">
                                <img src="assets/images/logo-icon.png" height="30" class="small" alt="">
                                <span class="big">
                                    <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                                    <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                                </span>
                            </a>
                            <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                            <div class="search-bar p-0 d-none d-md-block ms-2">
                                <div id="search" class="menu-search mb-0">
                                    <form role="search" method="get" id="searchform" class="searchform">
                                        <div>
                                            <input type="text" class="form-control border rounded" name="s" id="s" placeholder="Search Keywords...">
                                            <input type="submit" id="searchsubmit" value="Search">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item mb-0">
                                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <div class="btn btn-icon btn-soft-light"><i class="ti ti-settings"></i></div>
                                </a>
                            </li>

                            <li class="list-inline-item mb-0 ms-1">
                                <div class="dropdown dropdown-primary">
                                    <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('storage/foto/' . Auth::guard('siswa')->user()->foto) }}" class="avatar avatar-ex-small rounded" alt=""></button>
                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                        <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="{{ asset('storage/foto/' . Auth::guard('siswa')->user()->foto) }}">
                                            <img src="{{ asset('storage/foto/' . Auth::guard('siswa')->user()->foto) }}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="flex-1 ms-2">
                                                <span class="d-block">{{ Auth::guard('siswa')->user()->nama }}</span>
                                                <small class="text-muted">{{ Auth::guard('siswa')->user()->jjg }}</small>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-dark" href="index.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                                        <a class="dropdown-item text-dark" href="profile.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                                        <a class="dropdown-item text-dark" href="email.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span> Email</a>
                                        <div class="dropdown-divider border-top"></div>
                                        <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-lock"></i></span> Lockscreen</a>
                                        <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span>logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Top Header -->

                <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="d-md-flex justify-content-between align-items-center">
                            <h5 class="mb-0">@yield('nama')</h5>

                            <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
                                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                                    <li class="breadcrumb-item text-capitalize">@yield('merk')</li>
                                    <li class="breadcrumb-item text-capitalize active" aria-current="page">@yield('judul')</li>
                                </ul>
                            </nav>
                        </div>

                        <div class="row">
                            @yield('content')
                        </div><!--end row-->
                    </div>
                </div><!--end container-->

                <!-- Footer Start -->
                <footer class="shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center mx-md-2">
                                    <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> Hananan Academy. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Wirya Arif Fandi</a>.</p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasLeftLabel" class="mb-0">
                    <img src="assets/images/logo-dark.png" height="24" class="light-version" alt="">
                    <img src="assets/images/logo-light.png" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h6 class="fw-bold">Theme Options</h6>

                            <ul class="text-center style-switcher list-unstyled mt-4">
                                <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="assets/images/demos/rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="assets/images/demos/dark-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                                <li class="d-grid"><a href="../../landing/dist/index.html" target="_blank" class="mt-4"><img src="assets/images/demos/landing.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Landing</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon social mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank" class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <!-- Main Js -->
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        @yield('js')
    </body>

</html>
