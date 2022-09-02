@extends('backend.layout.main')

@section('content')
    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center border_bottom_1px">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a class="bell_notification_clicker nav-link-notify" href="#"> <img
                                            src="img/icon/bell.svg" alt="">
                                    </a>

                                    <div class="Menu_NOtification_Wrap">
                                        <div class="notification_Header">
                                            <h4>Notifications</h4>
                                        </div>
                                        <div class="Notification_body">

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/2.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing </h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/4.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/3.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/2.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing </h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/4.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/3.png" alt=""></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nofity_footer">
                                            <div class="submit_button text-center pt_20">
                                                <a href="#" class="btn_1">See More</a>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <a class="CHATBOX_open nav-link-notify" href="#"> <img src="img/icon/msg.svg"
                                            alt=""> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>Neurologist </p>
                                        <h5>Dr. Robar Smith</h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="#">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner default_main_contaner_iner">
            <div class="container-fluid p-0 ">

                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_30 f_w_700 text_color_6">Dashboard</h3>
                                <ol class="breadcrumb page_bradcam default_bradcam mb-0">
                                    <li class="breadcrumb-item "><a href="javascript:void(0);">{{ config('app.name') }}</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                </ol>
                            </div>
                            <a href="#" class="btn_1 ">Create Report</a>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="white_card card_height_100 default_border_1px mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h1>Hello &#128075; Dear {{ Auth::user()->name }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="white_card card_height_100 default_border_1px mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Total Clients</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body d-flex align-items-center" style="height:140px">
                                <h4 class="f_w_900 f_s_60 mb-0 me-2">356</h4>
                                <div class="w-100" style="height:100px">
                                    <canvas width="100%" id="page_views"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 card_height_100 ">
                        <div class="white_card mb_20 default_border_1px">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Revenue</h3>
                                    </div>
                                    <div class="float-lg-right float-none sales_renew_btns justify-content-end">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">This Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Last Week</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="#">Last Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body" style="height: 286px;">
                                <canvas id="bar"></canvas>
                            </div>
                        </div>
                        <div class="white_card mb_20 default_border_1px">
                            <div
                                class="white_card_body renew_report_card d-flex align-items-center justify-content-between flex-wrap">
                                <div class="renew_report_left">
                                    <h4 class="f_s_19 f_w_600 color_theme2 mb-0">Download your earnings report</h4>
                                    <p class="color_gray2 f_s_12 f_w_600">There are many variations of passages.</p>
                                </div>
                                <div class="create_report_btn">
                                    <a href="#" class="btn_1 mt-1 mb-1">Create Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_card card_height_100 default_border_1px mb_20 ">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Market valus</h3>
                                    </div>
                                    <div class="single_wrap_input">
                                        <select class="nice_Select2 wide" name="" id="">
                                            <option value="1">year</option>
                                            <option value="1">month</option>
                                            <option value="1">day</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body QA_section">
                                <div class="radar-chart">
                                    <div id="marketchart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_card card_height_100 default_border_1px  mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Transaction</h3>
                                    </div>
                                    <div class="header_more_tool">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown">
                                                <i class="ti-more-alt"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                    Action</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                    Delete</a>
                                                <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                    Print</a>
                                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                    Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="table-responsive">
                                    <table class="table bayer_table m-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img class="byder_thumb wh_56" src="img/Payment/1.png"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <div class="payment_gatway">
                                                        <h5 class="byer_name  f_s_16 f_w_700 color_theme">Electricity
                                                            Bill</h5>
                                                        <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="payment_gatway text-end">
                                                        <h5 class="byer_name  f_s_16 f_w_700 text_color_4">- $ 1254.00
                                                        </h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="byder_thumb wh_56" src="img/Payment/1.png"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <div class="payment_gatway">
                                                        <h5 class="byer_name  f_s_16 f_w_700 color_theme">Showroom Rent
                                                        </h5>
                                                        <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="payment_gatway text-end">
                                                        <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00
                                                        </h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="byder_thumb wh_56" src="img/Payment/1.png"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <div class="payment_gatway">
                                                        <h5 class="byer_name  f_s_16 f_w_700 color_theme">Iron Costing
                                                        </h5>
                                                        <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="payment_gatway text-end">
                                                        <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00
                                                        </h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="byder_thumb wh_56" src="img/Payment/1.png"
                                                        alt="">
                                                </td>
                                                <td>
                                                    <div class="payment_gatway">
                                                        <h5 class="byer_name  f_s_16 f_w_700 color_theme">Packeging Cost
                                                        </h5>
                                                        <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="payment_gatway text-end">
                                                        <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00
                                                        </h5>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_card card_height_100 default_border_1px  mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">News & Update</h3>
                                    </div>
                                    <div class="single_wrap_input">
                                        <select class="nice_Select2 wide" name="" id="">
                                            <option value="1">Today</option>
                                            <option value="1">Tomorrow</option>
                                            <option value="1">Yesterday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="single_update_news">
                                    <h5 class="byer_name  f_s_16 f_w_600 color_theme2">36% off For pixel lights
                                        Couslations Types.</h5>
                                    <p class="color_gray f_s_12 f_w_700 ">Sorem Kpsum is simply of the printing..</p>
                                </div>
                                <div class="single_update_news">
                                    <h5 class="byer_name  f_s_16 f_w_600 color_theme2">We are produce new product this
                                    </h5>
                                    <p class="color_gray f_s_12 f_w_700 ">Gorem Rpsum is simply text of the printing...
                                    </p>
                                </div>
                                <div class="single_update_news">
                                    <h5 class="byer_name  f_s_16 f_w_600 color_theme2">50% off For COVID Couslations
                                        Types.</h5>
                                    <p class="color_gray f_s_12 f_w_700 ">EoremHpsum is simply dummy...</p>
                                </div>
                                <div class="load_more_button text-center mt_30">
                                    <a class="theme_text_btn d-flex align-items-center justify-content-center"
                                        href="#">Load more <i class="ti-angle-down f_s_12 ms-2"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_card card_height_100 default_border_1px  mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Account Info</h3>
                                    </div>
                                    <div class="header_more_tool">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown">
                                                <i class="ti-more-alt"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                                    Action</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                                    Delete</a>
                                                <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                                    Print</a>
                                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                    Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="monthly_plan_wraper">
                                    <div class="single_plan d-flex align-items-center justify-content-between">
                                        <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Monthly Plan</h5>
                                        <span class="color_gray2 f_s_16 f_w_700">$25</span>
                                    </div>
                                    <div class="single_plan d-flex align-items-center justify-content-between">
                                        <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Taxes</h5>
                                        <span class="color_gray2 f_s_16 f_w_700">$14</span>
                                    </div>
                                    <div class="single_plan d-flex align-items-start justify-content-between">
                                        <div>
                                            <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Extera</h5>
                                            <p class="f_s_13 f_w_700">Netflix and other bills in this
                                                month.</p>
                                        </div>
                                        <span class="color_gray2 f_s_16 f_w_700">$25</span>
                                    </div>
                                    <div class="total_blance mt_20 mb_10">
                                        <span class="f_s_13 f_w_700 color_gray ">Total balance</span>
                                        <div
                                            class="total_blance_inner d-flex align-items-center flex-wrap justify-content-between">
                                            <div>
                                                <span class="f_s_40 f_w_700 color_text_3 d-block">$3650</span>
                                                <a class="badge_btn_5" href="#">+1235</a>
                                            </div>
                                            <div>
                                                <div><a class="badge_btn_6 mb_15" href="#">Today</a></div>
                                                <div><a class="badge_btn_7" href="#">This week</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_card card_height_100 mb_20 default_border_1px">
                            <div class="date_picker_wrapper shadow_none">
                                <div class="default-datepicker">
                                    <div class="datepicker-here" data-language='en'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="white_card card_height_100 default_border_1px  mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Top Global Sales</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body pb-0">
                                <div id="world-map-markers" class="dashboard_w_map"></div>
                                <div class="row justify-content-center mt_30">
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6 class="f_s_14 f_w_400">USA</h6>
                                                    <div id="bar4" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="81"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Australia</h6>
                                                    <div id="bar5" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="58"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Brazil</h6>
                                                    <div id="bar6" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="42"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Latvia</h6>
                                                    <div id="bar7" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="55"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a
                                    href="#">
                                    Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
