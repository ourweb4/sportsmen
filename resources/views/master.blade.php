<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sportsmentournament.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="  {{asset('assets/images/favicon.png ')}}">
    <link rel="shortcut icon" href="  {{asset('assets/images/favicon.ico ')}}">

    <!-- CSS FILES HERE -->
    <!-- inject:css -->
    <link rel="stylesheet" href="  {{asset('assets/css/vendors/bootstrap.min.css ')}}">
    <link rel="stylesheet" href="  {{asset('assets/css/vendors/meanmenu.min.css ')}}">
    <link rel="stylesheet" href="  {{asset('assets/css/vendors/slick.css ')}}">
    <link rel="stylesheet" href="  {{asset('assets/css/vendors/slick-theme.css ')}}">
    <link rel="stylesheet" href="  {{asset('assets/css/vendors/ionicons.min.css ')}}">
    <link rel="stylesheet" href="  {{asset('assets/css/vendors/nice-select.css ')}}">
    <link rel="stylesheet" href="  {{asset('assets/css/vendors/jquery.fancybox.min.css ')}}">
    <link rel="stylesheet" href="  {{asset('assets/css/vendors/jquery.nstSlider.min.css ')}}">
    <link rel="stylesheet" href="  {{asset('assets/css/style.css ')}}">
    <!-- endinject -->
</head>

<body>

<!-- Preloader -->
<div id="wrapper" class="wrapper">

    <!-- Header -->
    <div class="tm-header ">

        <div class="tm-header-toparea">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <ul class="tm-header-info">
                           <li><a href="tel:18883456789"><i class="ion-ios-telephone"></i>1-888-345-6789</a></li>
                            <li><a href="mailto:contact@sportsmentournament.com"><i
                                        class="ion-android-mail"></i>contact@sportsmentournament.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-12">
                        <ul class="tm-header-icons">
                             @if (Route::has('login'))
                                    @auth
                                    <li>        <a href="{{ url('/dashboard') }}" class="btn btn-info">Dashboard</a></li>
                                    <li>        <a href="{{ url('/logout') }}" class="btn btn-info">Logout</a></li>

                                @else
                                    <li>    <a href="{{ route('login') }}" class="btn btn-info">Log in</a></li>

                                        @if (Route::has('register'))
                                        <li>           <a href="{{ route('register') }} " class="btn btn-info" >Register</a></li>
                                        @endif
                                    @endauth
                                                     @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="tm-header-bottomarea">
            <div class="container">
                <div class="tm-header-inner">
                    <h3>Sportsmentournament.com</h3>
                    <nav class="tm-header-nav">
                        <ul>

                            <li><a href="{{url('/')}}">Home</a></li>
                        </ul>
                    </nav>
                    <div class="tm-mobilenav"></div>
                </div>
            </div>
        </div>

    </div>
    <!--// Header -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">



        <!-- Page Content -->
        <div class="page-content">
            <div class="m-auto">
                @yield('main')
            </div>

        </div>
        <!--// Page Content -->

        <!-- Footer -->
        <div class="tm-footer">

        </div>
        <!--// Footer -->

    </div>
    <!--// Wrapper -->
</div>
    <!-- JS FILES HERE -->
    <!-- inject:js -->
    <script src="   {{asset('assets/js/vendors/modernizr-3.7.1.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/jquery-3.3.1.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/bootstrap.bundle.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/jquery.meanmenu.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/slick.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/jquery.nice-select.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/jquery.countdown.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/jquery.ajaxchimp.min.js')}}"></script>
    <script src="   {{asset('assets/js/vendors/jquery.fancybox.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/imagesloaded.pkgd.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/isotope.pkgd.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/instafeed.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/jquery.nstslider.min.js ')}}"></script>
    <script src="   {{asset('assets/js/vendors/ScrollMagic.min.js ')}}"></script>
    <script src="   {{asset('assets/js/main.js ')}}"></script>
    <!-- endinject -->
    </body>


 </html>
