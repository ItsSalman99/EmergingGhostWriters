@extends('backend.layout.main')

@section('content')
    <div class="main_content_iner default_main_contaner_iner">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_30 f_w_700 text_color_6">Dashboard</h3>
                            <ol class="breadcrumb page_bradcam default_bradcam mb-0">
                                <li class="breadcrumb-item "><a href="javascript:void(0);">{{ config('app.name') }}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            </ol>
                        </div>
                        {{-- <a href="#" class="btn_1 ">Create Report</a> --}}
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 default_border_1px mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3>Greetings</h3>
                                    <h1>Hello &#128075; Dear {{ Auth::user()->name }}!</h1>
                                    <p>Hope you are doing well!</p>
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
                            <h4 class="f_w_900 f_s_60 mb-0 me-2">{{ $TClients }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="white_card card_height_100 default_border_1px mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Total Regions</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body d-flex align-items-center" style="height:140px">
                            <h4 class="f_w_900 f_s_60 mb-0 me-2">{{ $TCountry }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.partials.footer')
@endsection
