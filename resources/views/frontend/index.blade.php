@extends('frontend.layout.main')

@section('content')

    @include('frontend.partials.pop-up')

    <main>
        <!-- banner start -->
        <section class="banner-area banner-2">
            <div>
                <video src="{{ asset('assets/frontend/videos/bg.mp4') }}" loop muted autoplay>
                </video>
                <div class="overlay">
                    <div class="container video-div">
                        <div class="banner-content pt-100">
                            <span style="background-color: #fff; color: #000; padding: 10px; border-radius: 10px;">Emerging
                                Ghost Writers</span>
                            <h2>Best Professional Ghostwriting <br> Services! <br></h2>
                            <p>
                                The unparalleled brilliance of singlehood shapes readers' perspectives at Emerging
                                Ghostwriters. Our writers craft knowledgeable content that displays genuine professionalism
                                while showcasing inventiveness. Our team of motivational ghostwriters is committed enough to
                                increasing productivity with our content.
                            </p>
                            <div class="banner-btn">
                                <a class="thm-btn thm-btn-2" href="javascript:void(Tawk_API.toggle())">Chat With US</a>
                                <a class="thm-btn border-btn" href="{{ route('contact') }}">Get Free Consultation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="hero-bg-img banner-height d-flex align-items-center bg-video-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10">
                            <div class="banner-content pt-100">
                                <span>Welcome to our company</span>
                                <h2>Get Solid Solution For Business</h2>
                                <p>In social science, agency is defined as the capacity of individuals to act independently
                                </p>
                                <div class="banner-btn">
                                    <a class="thm-btn thm-btn-2" href="services.html">Our Services</a>
                                    <a class="thm-btn border-btn" href="about.html">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-right">
                        <img src="{{ asset('assets/frontend/img/banner/banner-img-03.png') }}" alt="">
                    </div>
                </div>
                <div class="banner-shape">
                    <img class="shape-1" src="{{ asset('assets/frontend/img/shape/banner-shape-01.png') }}" alt="">
                    <img class="shape-2" src="{{ asset('assets/frontend/img/shape/banner-shape-02.png') }}" alt="">
                </div>
            </div> --}}
        </section>
        <!-- banner end -->

        <!-- faq start -->
        <section class="faq-area faq-2 gray-bg">
            <div class="container-fluid">
                <div class="row no-gutters flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="faq-bg">
                            <img src="{{ asset('assets/frontend/img/bg/faq-bg-01.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content pt-120 pb-120">
                            <div class="section-title">
                                <span>Your project is in good hands.</span>
                                <h2>Exceptional Ghostwriting Services</h2>
                            </div>
                            <div class="faq-block">
                                <ul class="accordion-box clearfix">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn">
                                            What is ghostwriting?
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">
                                                    Ghostwriting is a collaborative writing process where clients and
                                                    ghostwriters work together without the latter receiving credit for the
                                                    results.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            Are your services 100% confidential?
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    No. The practice of ghostwriting is accepted everywhere. It is a
                                                    well-known writing service that empowers authors and writers to get
                                                    their books written, edited, and formatted, especially if they don't
                                                    have the necessary creative abilities or the time to devote to creating
                                                    a whole book.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            How much does your ghostwriting service cost?
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    Depending on the service you select, our expert ghostwriting services
                                                    have a range of prices.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq end -->

        <!-- video start -->
        <section class="video-area gray-bg" style="z-index: 2;">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="video-bg">
                            <div class="video-thumb">
                                <img src="{{ asset('assets/frontend/img/bg/video-bg.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="video-content pt-120 pb-120">
                            <div class="section-title">
                                <span>Our Guarantee</span>
                                <h2>
                                    Why Should You Hire Our Services?
                                </h2>
                            </div>
                            <p>
                                We prioritize providing excellent customer service. There are many ghostwriting services on
                                the market. Unfortunately, not everyone offers these services in a professional and
                                high-quality manner. Customers need good customer service. It serves as the link between the
                                client and the creative team.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video end -->


        <!-- section bg white start -->
        <section class="section-bg-white" style="z-index: 2;">
            <!-- fun fact start -->
            <section class="fun-fact-area pt-120 pb-90">
                <div class="container">
                    <div class="ff-wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="fun-fact-img mb-30">
                                    <img src="{{ asset('assets/frontend/img/bg/fun-fact-img.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fun-fact-content mb-30">
                                    <div class="section-title">
                                        <span>Emerging Ghost Writers</span>
                                        <h2>The Most Professional Ghostwriting Services in the Business</h2>
                                    </div>
                                    <p>
                                        Hire a ghostwriter for your assignment through our site to avoid the concern that
                                        drains your thoughts. Our ghostwriters' excellent book writing abilities bring all
                                        the storylines to life. Our authors can handle any topic, whether it's a narrative
                                        of rags to riches, a historical account, or the tale of a mythical realm.
                                    </p>
                                    <div class="ff-count pt-20">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ff-count-single">
                                                    <div class="ff-icon">
                                                        <i class="ti-arrow-up"></i>
                                                    </div>
                                                    <div class="ff-count-text">
                                                        <h3>10+</h3>
                                                        <span>Years Of Experience</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ff-count-single">
                                                    <div class="ff-icon">
                                                        <i class="ti-arrow-up"></i>
                                                    </div>
                                                    <div class="ff-count-text">
                                                        <h3>700+</h3>
                                                        <span>Books Written</span>
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
            </section>
            <!-- fun fact end -->

        </section>
        <!-- section bg white end -->

        <!-- brand start -->
        <section class="brand-area brand-2 mt-110 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-bg">
                            <div class="brand-active-2 owl-carousel">
                                <div class="single-brand text-center">
                                    <img style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/amazon.png') }}" alt="amazon">
                                </div>
                                <div class="single-brand text-center">
                                    <img style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/kobo.png') }}" alt="kobo">
                                </div>
                                <div class="single-brand text-center">
                                    <img src="{{ asset('assets/frontend/img/brand/scribd.png') }}"
                                        style="width: 50%!important" alt="scribd">
                                </div>
                                <div class="single-brand text-center">
                                    <img src="{{ asset('assets/frontend/img/brand/barnesnoble.png') }}" alt="barnesnoble"
                                        style="width: 50%!important">
                                </div>
                                <div class="single-brand text-center">
                                    <img class="" style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/createspace.png') }}" alt="createspace">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand end -->

        <!-- brand start -->
        <section class="brand-area brand-2 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-bg">
                            <div class="brand-active-2 owl-carousel">
                                <div class="single-brand text-center">
                                    <img style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/lulu.png') }}" alt="amazon">
                                </div>
                                <div class="single-brand text-center">
                                    <img style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/ingramspark.png') }}" alt="kobo">
                                </div>
                                <div class="single-brand text-center">
                                    <img src="{{ asset('assets/frontend/img/brand/draft2digital.png') }}"
                                        style="width: 50%!important" alt="scribd">
                                </div>
                                <div class="single-brand text-center">
                                    <img src="{{ asset('assets/frontend/img/brand/smashwords.png') }}" alt="barnesnoble"
                                        style="width: 50%!important">
                                </div>
                                <div class="single-brand text-center">
                                    <img class="" style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/createspace.png') }}" alt="createspace">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand end -->

        @include('frontend.partials.testimonials')

        <!-- contact start -->
        <section class="contact-area pb-120" style="margin-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-wrapper">
                            <div class="section-title">
                                <span>Estimate For Projects</span>
                                <h3>Waiting For Your Book Writing Dream to Come True?</h3>
                            </div>
                            @include('frontend.partials.contact-form')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact end -->

        <!-- careers start -->
        <section class="careers-area my-4" style="z-index: 2;">
            <div class="container">
                <div class="careers-box">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="careers-left">
                                <div class="section-title">
                                    <span>Careers</span>
                                    <h2>Get A Chance To Meet Our Team!</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <ul class="careers-right">
                                <li><a href="javascript:void(Tawk_API.toggle())">Our Live Chat Support</a></li>
                                <li><a href="{{ route('contact') }}">Get Free Consultation</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="careers-icon">
                        <img src="{{ asset('assets/frontend/img/icon/careers.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- careers end -->



    </main>
@endsection
