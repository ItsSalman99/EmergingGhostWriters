@extends('frontend.layout.main')

@section('content')
    <main>
        <!-- page title start -->
        <section class="page-title-area pt-120 pb-80 black-thm-bg">
            <div class="container" style="margin-top: 100px">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-title mb-30">
                            <p>Welcome To Our {{ env('APP_NAME') }}</p>
                            <h3>GhostWriting Services</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>GhostWriting Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title end -->

        <section class="services-area services-2 pt-120 pb-120">
            <div class="container">
                <div class="page-title mb-30">
                    <h3 class="text-dark">GhostWriting Services</h3>
                </div>
                <div class="row">
                    @foreach ($ghostwritingservices as $service)
                        <div class="col-lg-4 p-2">
                            <div class="port-single">
                                <div class="port-thumb"
                                    style="background-color: tomato; border-bottom: 5px solid #000; text-align: center; padding: 20px;">
                                    <img style="width: 50%!important; margin: 0 auto!important;"
                                        src="{{ asset('assets/frontend/img/icon/service-' . $service->id . '.png') }}"
                                        alt="">
                                </div>
                                <div class="port-content">
                                    <div class="port-icon">
                                        <a href="{{ route('ghostwriting-service', ['id' => $service->id]) }}" class="bg-dark">
                                            <i class="ti-arrow-right text-white"></i>
                                        </a>
                                    </div>
                                    <div class="port-text">
                                        <h4><a href="#">{{ $service->name }}</a></h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto aliquid
                                            perspiciatis
                                            magnam explicabo ea, nulla officia reiciendis facere dolorum ad porro quasi est
                                            neque voluptatum? Eligendi ratione fugit optio illo.</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr>
                <div class="w-50 m-auto">
                    {{ $ghostwritingservices->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </section>

        <!-- video start -->
        <section class="video-area video-3">
            <div class="video-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="video-wrapper">
                                <div class="video-image">
                                    <img src="{{ asset('assets/frontend/img/bg/video-bg-03.jpg') }}" alt="">
                                </div>
                                <a class="popup-video video-icon" href="https://www.youtube.com/watch?v=cRXm1p-CNyk"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video end -->

        <!-- counter start -->
        <section class="counter-area counter-2 gray-bg pt-100 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-counter mb-30">
                            <div class="counter-icon">
                                <i class="ti-arrow-up"></i>
                            </div>
                            <div class="counter-text">
                                <h3>8.93%</h3>
                                <p>Increase In Monthly</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-counter mb-30">
                            <div class="counter-icon">
                                <i class="ti-arrow-down"></i>
                            </div>
                            <div class="counter-text">
                                <h3>50k+</h3>
                                <p>Revenue generated</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-counter mb-30">
                            <div class="counter-icon">
                                <i class="ti-arrow-up"></i>
                            </div>
                            <div class="counter-text">
                                <h3>8.93%</h3>
                                <p>Increase In Monthly</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter end -->

    </main>
@endsection
