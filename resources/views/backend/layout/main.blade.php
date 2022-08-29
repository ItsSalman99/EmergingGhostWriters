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

    @yield('content')

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
