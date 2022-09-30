<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} : Reasonable Ghostwriting Agency</title>
    <meta name="description" content="A writing service provider is called Emerging Ghostwriters. Do you need a ghostwriter? We offer written content: articles, eBooks, and SEO material.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='cache-control' content='no-cache'>

    <meta http-equiv='expires' content='0'>

    <meta http-equiv='pragma' content='no-cache'>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/favicon.png')}}">
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

    @include('frontend.partials.header')

    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="ti-close"></i></a>
        </div>
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('about-us') }}">About</a></li>
                <li class="dropdown"><a>Services</a>
                    <ul class="sub-menu">
                        <li><a class="" href="{{route('services') }}">All Services</a></li>
                        <li><a class="" href="{{route('BookWriting') }}">Book Writing</a></li>
                        <li><a href="{{route('BookPublishing') }}">Book Publishing</a></li>
                        <li><a href="{{route('BookMarketing') }}">Book Marketing</a></li>
                        <li><a href="{{route('BookFormating') }}">Book Formating</a></li>
                        <li><a href="{{route('VideoBookTrailers') }}">Video Book Trailers</a></li>
                        <li><a href="{{route('SocialMediaMarketing') }}">Social Media Marketing</a></li>
                        <li><a href="{{route('InteractiveE-Books') }}">Interactive E-Books</a></li>
                        <li><a href="{{route('CreativeWriting') }}">Creative Writing</a></li>
                        <li><a href="{{route('PressReleaseWriting') }}">Press Release Writing</a></li>
                        <li><a href="{{route('Editing&ProofReading') }}">Editing & Proof Reading</a></li>
                        <li><a href="{{route('BookCoverDesign') }}">Book Cover Design</a></li>
                        <li><a href="{{route('AmazonMarketing') }}">Amazon Marketing</a></li>
                        <li><a href="{{route('SEOWriting') }}">SEO Writing</a></li>
                        <li><a href="{{route('AudioBooks') }}">Audio Books</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a>Ghost Writing</a>
                    <ul class="sub-menu">
                        <li><a class="" href="{{route('ghostwriting-services') }}">All GhostWriting Services</a></li>
                        <li><a class="" href="{{route('Fiction') }}">Fiction</a></li>
                        <li><a href="{{route('BeautyGhostWriting') }}">Beauty Ghost Writing</a></li>
                        <li><a href="{{route('BusinessGhostWriting') }}">Business Ghost Writing</a></li>
                        <li><a href="{{route('FantasyGhostWriting') }}">Fantasy Ghost Writing</a></li>
                        <li><a href="{{route('MedicalGhostWriting') }}">Medical Ghost Writing</a></li>
                        <li><a href="{{route('ScreenPlayGhostWriting') }}">Screen Play Ghost Writing</a></li>
                        <li><a href="{{route('NonFictionGhostWriting') }}">Non-Fiction Ghost Writing</a></li>
                        <li><a href="{{route('BlogGhostWriting') }}">Blog Ghost Writing</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a class="thm-btn thm-btn-3" href="{{ route('contact') }}">Get A Quote</a></li>
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
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    @include('sweetalert::alert')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6318e2b854f06e12d893590d/1gccjb9uv';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>
