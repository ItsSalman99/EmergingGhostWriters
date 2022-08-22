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

        <!-- footer start -->
        <footer>
            <div class="footer-area footer-2 black-thm-bg pt-200">
                <div class="container">
                    <div class="footer-main">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="footer-widget mb-30">
                                    <h3 class="title">About Us</h3>
                                    <div class="about-text mb-25">
                                        <p>Finding the mental wherewithal to get into workout mode can take some serious effort, especially when all your activities happen at Contact. It can be done, but you have</p>
                                    </div> 
                                    <div class="f-about-social">
                                        <h4 class="fa-title">Social Contact</h4>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="footer-widget main-link mb-30">
                                    <h3 class="title">Main Links</h3>
                                    <div class="footer-link">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Insights</a></li>
                                            <li><a href="#">Hiring</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="footer-widget services mb-30">
                                    <h3 class="title">Services</h3>
                                    <div class="footer-link">
                                        <ul>
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="#">Game Design</a></li>
                                            <li><a href="#">UI & UX Design</a></li>
                                            <li><a href="#">CMS Support</a></li>
                                            <li><a href="#">CRM Software</a></li>
                                            <li><a href="#">Online Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="footer-widget mb-30">
                                    <h3 class="title">Weekly Insights</h3>
                                    <ul class="footer-post">
                                        <li>
                                            <div class="thumb">
                                                <a href="news-details.html"><img src="img/footer/news-01.jpg" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <a href="news-details.html">Built with light & dark mode</a>
                                                <ul class="news-meta">
                                                    <li>By <a href="#">Admin</a></li>
                                                    <li class="cmt"><a href="#">24 Comments</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="news-details.html"><img src="img/footer/news-02.jpg" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <a href="news-details.html">Built with light & dark mode</a>
                                                <ul class="news-meta">
                                                    <li>By <a href="#">Admin</a></li>
                                                    <li class="cmt"><a href="#">24 Comments</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="news-details.html"><img src="img/footer/news-03.jpg" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <a href="news-details.html">Built with light & dark mode</a>
                                                <ul class="news-meta">
                                                    <li>By <a href="#">Admin</a></li>
                                                    <li class="cmt"><a href="#">24 Comments</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright By &copy; <a href="index.html" target="_blank">Duxin</a> - 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->


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
    </body>

<!-- Mirrored from xpressrow.com/html/duxin/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 12:37:58 GMT -->
</html>