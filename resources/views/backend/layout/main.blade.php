<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Aug 2022 14:04:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - {{ env('APP_NAME') }}</title>


    <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/datepicker/date-picker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/vectormap-home/vectormap-2.0.2.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/scroll/scrollable.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/backend/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/backend/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/colors/default.css') }}" id="colorSkinCSS">
</head>

<body class="crm_body_bg">

    @include('backend.partials.nav')

    <section class="main_content dashboard_part large_header_bg">

        @include('backend.partials.header')

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
                            <li><a class="" href="{{ route('services') }}">All Services</a></li>
                            <li><a class="" href="{{ route('BookWriting') }}">Book Writing</a></li>
                            <li><a href="{{ route('BookPublishing') }}">Book Publishing</a></li>
                            <li><a href="{{ route('BookMarketing') }}">Book Marketing</a></li>
                            <li><a href="{{ route('BookFormating') }}">Book Formating</a></li>
                            <li><a href="{{ route('VideoBookTrailers') }}">Video Book Trailers</a></li>
                            <li><a href="{{ route('SocialMediaMarketing') }}">Social Media Marketing</a></li>
                            <li><a href="{{ route('InteractiveE-Books') }}">Interactive E-Books</a></li>
                            <li><a href="{{ route('CreativeWriting') }}">Creative Writing</a></li>
                            <li><a href="{{ route('PressReleaseWriting') }}">Press Release Writing</a></li>
                            <li><a href="{{ route('Editing&ProofReading') }}">Editing & Proof Reading</a></li>
                            <li><a href="{{ route('BookCoverDesign') }}">Book Cover Design</a></li>
                            <li><a href="{{ route('AmazonMarketing') }}">Amazon Marketing</a></li>
                            <li><a href="{{ route('SEOWriting') }}">SEO Writing</a></li>
                            <li><a href="{{ route('AudioBooks') }}">Audio Books</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a>Ghost Writing</a>
                        <ul class="sub-menu">
                            <li><a class="" href="{{ route('ghostwriting-services') }}">All GhostWriting
                                    Services</a></li>
                            <li><a class="" href="{{ route('Fiction') }}">Fiction</a></li>
                            <li><a href="{{ route('BeautyGhostWriting') }}">Beauty Ghost Writing</a></li>
                            <li><a href="{{ route('BusinessGhostWriting') }}">Business Ghost Writing</a></li>
                            <li><a href="{{ route('FantasyGhostWriting') }}">Fantasy Ghost Writing</a></li>
                            <li><a href="{{ route('MedicalGhostWriting') }}">Medical Ghost Writing</a></li>
                            <li><a href="{{ route('ScreenPlayGhostWriting') }}">Screen Play Ghost Writing</a></li>
                            <li><a href="{{ route('NonFictionGhostWriting') }}">Non-Fiction Ghost Writing</a></li>
                            <li><a href="{{ route('BlogGhostWriting') }}">Blog Ghost Writing</a></li>
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

    </section>


    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    <script src="{{ asset('assets/backend/js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/popper1.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/bootstrap.min.html') }}"></script>

    <script src="{{ asset('assets/backend/js/metisMenu.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/datatable/js/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/scroll/scrollable-custom.js') }}"></script>

    <script src="{{ asset('assets/backend/vendors/chart_am/animated.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/chart_am/kelly.js') }}"></script>

    <script src="{{ asset('assets/backend/js/dashboard_init.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom.js') }}"></script>
</body>

</html>
