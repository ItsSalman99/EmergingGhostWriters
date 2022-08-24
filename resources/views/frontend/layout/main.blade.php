<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from xpressrow.com/html/duxin/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 12:37:35 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ env('APP_NAME') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.png in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/barfiller.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/metisMenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    </head>
    <body>

        <!-- preloader start -->
        <div class="preloader">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- preloader end -->
        
        @include('frontend.partials.header')

        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="close-mobile-menu">
                <a href="javascript:void(0);"><i class="ti-close"></i></a>
            </div>
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu">
                <div class="header-mobile-search">
                    <form role="search" method="get" action="#"> 
                        <input type="text" placeholder="Search Keywords"> 
                        <button type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
                <ul id="mobile-menu-active">
                    <li class="dropdown"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a class="active" href="index.html">Home App Landing</a></li>
                            <li><a href="index-2.html">Home Agency</a></li>
                            <li><a href="index-3.html">Home Sass Business</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="dropdown"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="news-details.html">News Details</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li class="dropdown"><a href="news.html">News</a>
                        <ul class="sub-menu">
                            <li><a href="news.html">News</a></li>
                            <li><a href="news-details.html">News Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- side-mobile-menu end -->
        </aside>
        <div class="body-overlay"></div>
        <!-- slide-bar end -->

        @yield('content')

        @include('frontend.partials.footer')

        <!-- JS here -->
        <script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/modernizr-3.8.0.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.barfiller.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
        @include('sweetalert::alert')

    </body>
</html>