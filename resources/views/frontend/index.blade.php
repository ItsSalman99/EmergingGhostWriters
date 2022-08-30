@extends('frontend.layout.main')

@section('content')
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
                            <h2>Content creation <br> on your terms</h2>
                            <p>
                                Find the perfect fit for your project, whether you’re a business or personal brand, The
                                Emerging Ghost Writers can get it done!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa nam consequuntur non pariatur
                                a possimus? Expedita, autem vero id quasi, recusandae enim neque suscipit velit commodi
                                obcaecati, voluptate voluptas distinctio.
                            </p>
                            <div class="banner-btn">
                                <a class="thm-btn thm-btn-2" href="#">Chat With US</a>
                                <a class="thm-btn border-btn" href="#">Get Free Consultation</a>
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
                                <h2>Highest quality writers</h2>
                            </div>
                            <div class="faq-block">
                                <ul class="accordion-box clearfix">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn">
                                            How can i customized this theme?
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <div class="text">
                                                    By contrast, structure are those factors of influence such as social
                                                    class, religion, gender, ethnicity, ability, customs, etc. that
                                                    determine or limit an agent.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            How can i customized this theme?
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    By contrast, structure are those factors of influence such as social
                                                    class, religion, gender, ethnicity, ability, customs, etc. that
                                                    determine or limit an agent.
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            How can i customized this theme?
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <div class="text">
                                                    By contrast, structure are those factors of influence such as social
                                                    class, religion, gender, ethnicity, ability, customs, etc. that
                                                    determine or limit an agent.
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
                            <div class="video-play-icon">
                                <a class="popup-video video-icon" href="https://www.youtube.com/watch?v=cRXm1p-CNyk"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="video-content pt-120 pb-120">
                            <div class="section-title">
                                <span>Our Guarantee</span>
                                <h2>
                                    Why we guarantee
                                    book sales?
                                </h2>
                            </div>
                            <p>
                                APC is an Agency formed by Top Tier Cert. Publishers and Marketers who’ve worked with Top
                                Publishing Firms like Simon and Schuster, Harper Collins, Penguin/Random House, Hachette
                                Book Group & Macmillan that guarantee book sales unlike any other traditional publishing
                                platform.


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
                                        <span>Fun Fact</span>
                                        <h2>We carefull about our clients</h2>
                                    </div>
                                    <p>An agency usually provides a service, like an aid organization or a
                                        government bureau. If you're looking for a job, an employment agency might be able
                                        to help. The Latin word agere means</p>
                                    <div class="ff-count pt-20">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="ff-count-single">
                                                    <div class="ff-icon">
                                                        <i class="ti-arrow-up"></i>
                                                    </div>
                                                    <div class="ff-count-text">
                                                        <h3>8.93%</h3>
                                                        <span>ncrease In Monthly</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="ff-count-single">
                                                    <div class="ff-icon icon-2">
                                                        <i class="ti-arrow-down"></i>
                                                    </div>
                                                    <div class="ff-count-text">
                                                        <h3>50k+</h3>
                                                        <span>Revenue generated</span>
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
                                <div class="single-brand">
                                    <img style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/amazon.png') }}" alt="amazon">
                                </div>
                                <div class="single-brand">
                                    <img style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/kobo.png') }}" alt="kobo">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('assets/frontend/img/brand/scribd.png') }}"
                                        style="width: 50%!important" alt="scribd">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('assets/frontend/img/brand/barnesnoble.png') }}" alt="barnesnoble"
                                        style="width: 50%!important">
                                </div>
                                <div class="single-brand">
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
                                <div class="single-brand">
                                    <img style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/lulu.png') }}" alt="amazon">
                                </div>
                                <div class="single-brand">
                                    <img style="width: 50%!important"
                                        src="{{ asset('assets/frontend/img/brand/ingramspark.png') }}" alt="kobo">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('assets/frontend/img/brand/draft2digital.png') }}"
                                        style="width: 50%!important" alt="scribd">
                                </div>
                                <div class="single-brand">
                                    <img src="{{ asset('assets/frontend/img/brand/smashwords.png') }}" alt="barnesnoble"
                                        style="width: 50%!important">
                                </div>
                                <div class="single-brand">
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



        <!-- section bg black start -->
        <section class="section-bg-black" style="z-index: 2;">
            <!-- testimonial start -->
            <section class="testimonial-area testimonial-2">
                <div class="container">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>Our Client Feedbacks</h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-active owl-carousel">
                                <div class="testimonial-single">
                                    <p>A Private Limited is the most popular type of partnership Malta. The limited
                                        liability is, in fact, the only type of company allowed.</p>
                                    <div class="tm-author">
                                        <div class="tm-author-img">
                                            <img src="{{ asset('assets/frontend/img/testimonial/tm-author-04.png') }}"
                                                alt="">
                                        </div>
                                        <div class="tm-author-text">
                                            <h4>Milixer X. Xinban</h4>
                                            <span><span>Founder</span>, Xinban Co.</span>
                                        </div>
                                        <div class="tm-icon">
                                            <img src="{{ asset('assets/frontend/img/icon/tm-02.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-single">
                                    <p>A Private Limited is the most popular type of partnership Malta. The limited
                                        liability is, in fact, the only type of company allowed.</p>
                                    <div class="tm-author">
                                        <div class="tm-author-img">
                                            <img src="{{ asset('assets/frontend/img/testimonial/tm-author-05.png') }}"
                                                alt="">
                                        </div>
                                        <div class="tm-author-text">
                                            <h4>Milixer X. Xinban</h4>
                                            <span><span>Founder</span>, Xinban Co.</span>
                                        </div>
                                        <div class="tm-icon">
                                            <img src="{{ asset('assets/frontend/img/icon/tm-02.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-single">
                                    <p>A Private Limited is the most popular type of partnership Malta. The limited
                                        liability is, in fact, the only type of company allowed.</p>
                                    <div class="tm-author">
                                        <div class="tm-author-img">
                                            <img src="{{ asset('assets/frontend/img/testimonial/tm-author-06.png') }}"
                                                alt="">
                                        </div>
                                        <div class="tm-author-text">
                                            <h4>Milixer X. Xinban</h4>
                                            <span><span>Founder</span>, Xinban Co.</span>
                                        </div>
                                        <div class="tm-icon">
                                            <img src="{{ asset('assets/frontend/img/icon/tm-02.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-single">
                                    <p>A Private Limited is the most popular type of partnership Malta. The limited
                                        liability is, in fact, the only type of company allowed.</p>
                                    <div class="tm-author">
                                        <div class="tm-author-img">
                                            <img src="{{ asset('assets/frontend/img/testimonial/tm-author-04.png') }}"
                                                alt="">
                                        </div>
                                        <div class="tm-author-text">
                                            <h4>Milixer X. Xinban</h4>
                                            <span><span>Founder</span>, Xinban Co.</span>
                                        </div>
                                        <div class="tm-icon">
                                            <img src="{{ asset('assets/frontend/img/icon/tm-02.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial end -->
        </section>
        <!-- section bg black end -->


        <!-- contact start -->
        <section class="contact-area pb-120" style="margin-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-wrapper">
                            <div class="section-title">
                                <span>Estimate For Projects</span>
                                <h2>Share Work Details</h2>
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
                                    <h2>Join our team to create best digital solutions.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <ul class="careers-right">
                                <li><a>Our Live Chat Support</a></li>
                                <li><a>Get Free Consultation</a></li>
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
