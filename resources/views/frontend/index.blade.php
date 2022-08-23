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
                            <span style="background-color: #fff; color: #000; padding: 10px; border-radius: 10px;">Emerging Ghost Writers</span>
                            <h2>Content creation on your terms</h2>
                            <p>
                                Find the perfect fit for your project, whether you’re a business or personal brand, The
                                Emerging Ghost Writers can get it done!
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

        <!-- services start -->
        <section class="services-area pt-120 pb-120">
            <div class="container">
                <div class="section-title-2 text-center">
                    <span>Services</span>
                    <h2>Our Top 5 Services</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-tab">
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-tab-01" data-toggle="tab" href="#nav-1" role="tab"
                                        aria-controls="nav-1" aria-selected="false">Book Writing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="nav-tab-02" data-toggle="tab" href="#nav-2"
                                        role="tab" aria-controls="nav-2" aria-selected="true">Book Publishing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-tab-03" data-toggle="tab" href="#nav-3" role="tab"
                                        aria-controls="nav-3" aria-selected="false">Marketing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-tab-04" data-toggle="tab" href="#nav-4" role="tab"
                                        aria-controls="nav-4" aria-selected="false">Book Cover Design</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-tab-05" data-toggle="tab" href="#nav-5" role="tab"
                                        aria-controls="nav-5" aria-selected="false">Book Video Trailers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content tab-border" id="myTabContent">
                            <div class="tab-pane fade" id="nav-1" role="tabpanel" aria-labelledby="nav-tab-01">
                                <div class="services-content-wrapper">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <div class="services-thumb">
                                                <img src="{{ asset('assets/frontend/img/bg/service-bg-01.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="service-content">
                                                <div class="section-title">
                                                    <span>HTML, CSS, JS, Wordpress</span>
                                                    <h2>We carefull about our clients</h2>
                                                </div>
                                                <p>Allows users to earn points based on their daily engagement & activities
                                                    using interesting</p>
                                                <ul class="s-list pt-15">
                                                    <li><i class="ti-check"></i> Mobile App Design & Development</li>
                                                    <li><i class="ti-check"></i> Web Development & CMS</li>
                                                    <li><i class="ti-check"></i> Sass & Pos Software Design</li>
                                                </ul>
                                                <div class="s-btn pt-40">
                                                    <a class="thm-btn thm-btn-3" href="services.html">Free Consultation</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="nav-2" role="tabpanel"
                                aria-labelledby="nav-tab-02">
                                <div class="services-content-wrapper">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <div class="services-thumb">
                                                <img src="img/bg/service-bg-01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="service-content">
                                                <div class="section-title">
                                                    <span>HTML, CSS, JS, Wordpress</span>
                                                    <h2>We carefull about our clients</h2>
                                                </div>
                                                <p>Allows users to earn points based on their daily engagement & activities
                                                    using interesting</p>
                                                <ul class="s-list pt-15">
                                                    <li><i class="ti-check"></i> Mobile App Design & Development</li>
                                                    <li><i class="ti-check"></i> Web Development & CMS</li>
                                                    <li><i class="ti-check"></i> Sass & Pos Software Design</li>
                                                </ul>
                                                <div class="s-btn pt-40">
                                                    <a class="thm-btn thm-btn-3" href="services.html">Free
                                                        Consultation</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-tab-03">
                                <div class="services-content-wrapper">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <div class="services-thumb">
                                                <img src="img/bg/service-bg-01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="service-content">
                                                <div class="section-title">
                                                    <span>HTML, CSS, JS, Wordpress</span>
                                                    <h2>We carefull about our clients</h2>
                                                </div>
                                                <p>Allows users to earn points based on their daily engagement & activities
                                                    using interesting</p>
                                                <ul class="s-list pt-15">
                                                    <li><i class="ti-check"></i> Mobile App Design & Development</li>
                                                    <li><i class="ti-check"></i> Web Development & CMS</li>
                                                    <li><i class="ti-check"></i> Sass & Pos Software Design</li>
                                                </ul>
                                                <div class="s-btn pt-40">
                                                    <a class="thm-btn thm-btn-3" href="services.html">Free
                                                        Consultation</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-tab-04">
                                <div class="services-content-wrapper">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <div class="services-thumb">
                                                <img src="img/bg/service-bg-01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="service-content">
                                                <div class="section-title">
                                                    <span>HTML, CSS, JS, Wordpress</span>
                                                    <h2>We carefull about our clients</h2>
                                                </div>
                                                <p>Allows users to earn points based on their daily engagement & activities
                                                    using interesting</p>
                                                <ul class="s-list pt-15">
                                                    <li><i class="ti-check"></i> Mobile App Design & Development</li>
                                                    <li><i class="ti-check"></i> Web Development & CMS</li>
                                                    <li><i class="ti-check"></i> Sass & Pos Software Design</li>
                                                </ul>
                                                <div class="s-btn pt-40">
                                                    <a class="thm-btn thm-btn-3" href="services.html">Free
                                                        Consultation</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-tab-05">
                                <div class="services-content-wrapper">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <div class="services-thumb">
                                                <img src="img/bg/service-bg-01.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="service-content">
                                                <div class="section-title">
                                                    <span>HTML, CSS, JS, Wordpress</span>
                                                    <h2>We carefull about our clients</h2>
                                                </div>
                                                <p>Allows users to earn points based on their daily engagement & activities
                                                    using interesting</p>
                                                <ul class="s-list pt-15">
                                                    <li><i class="ti-check"></i> Mobile App Design & Development</li>
                                                    <li><i class="ti-check"></i> Web Development & CMS</li>
                                                    <li><i class="ti-check"></i> Sass & Pos Software Design</li>
                                                </ul>
                                                <div class="s-btn pt-40">
                                                    <a class="thm-btn thm-btn-3" href="services.html">Free
                                                        Consultation</a>
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
        <!-- services end -->

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
                                <span>Get Newsletter</span>
                                <h2>Get every weekly update feeds</h2>
                            </div>
                            <form class="video-right-form">
                                <div class="newltr-input">
                                    <input type="text" placeholder="Enter full name">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="newltr-input">
                                    <input type="email" placeholder="Enter email address">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="vr-ttn text-md-right pt-10">
                                    <button class="thm-btn" type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video end -->

        <!-- portfolio start -->
        <section class="portfilo-area pt-120 pb-120" style="background-color: #fff; z-index: 3;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="portfolio-left">
                            <div class="section-title">
                                <span>Portfolio</span>
                                <h2>Awesomely done some staff</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="portfolio-active owl-carousel">
                            <div class="port-single">
                                <div class="port-thumb">
                                    <img src="{{ asset('assets/frontend/img/portfolio/port-01.jpg') }}" alt="">
                                </div>
                                <div class="port-content">
                                    <div class="port-icon">
                                        <a href="portfolio-details.html">
                                            <i class="ti-arrow-right "></i>
                                        </a>
                                    </div>
                                    <div class="port-text">
                                        <span>UX Design</span>
                                        <h4><a href="portfolio-details.html">Hilixer D. Mobile App</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="port-single">
                                <div class="port-thumb">
                                    <img src="{{ asset('assets/frontend/img/portfolio/port-02.jpg') }}" alt="">
                                </div>
                                <div class="port-content">
                                    <div class="port-icon">
                                        <a href="portfolio-details.html">
                                            <i class="ti-arrow-right "></i>
                                        </a>
                                    </div>
                                    <div class="port-text">
                                        <span>UX Design</span>
                                        <h4><a href="portfolio-details.html">Hilixer D. Mobile App</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="port-single">
                                <div class="port-thumb">
                                    <img src="{{ asset('assets/frontend/img/portfolio/port-01.jpg') }}" alt="">
                                </div>
                                <div class="port-content">
                                    <div class="port-icon">
                                        <a href="portfolio-details.html">
                                            <i class="ti-arrow-right "></i>
                                        </a>
                                    </div>
                                    <div class="port-text">
                                        <span>UX Design</span>
                                        <h4><a href="portfolio-details.html">Hilixer D. Mobile App</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio end -->

        <!-- section bg black start -->
        <section class="section-bg-black" style="z-index: 2;">
            <!-- brand start -->
            <section class="brand-area brand-2 mt-110 pb-140">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-bg">
                                <div class="brand-active-2 owl-carousel">
                                    <div class="single-brand">
                                        <a class="partner-logo" href="#">
                                            <img class="before-image" src="{{ asset('assets/frontend/img/brand/brand-01.png') }}" alt="image_not_found">
                                            <img class="after-image" src="{{ asset('assets/frontend/img/brand/brand-01.png') }}" alt="image_not_found">
                                        </a>
                                    </div>
                                    <div class="single-brand">
                                        <a class="partner-logo" href="#">
                                            <img class="before-image" src="{{ asset('assets/frontend/img/brand/brand-02.png') }}" alt="image_not_found">
                                            <img class="after-image" src="{{ asset('assets/frontend/img/brand/brand-02.png') }}" alt="image_not_found">
                                        </a>
                                    </div>
                                    <div class="single-brand">
                                        <a class="partner-logo" href="#">
                                            <img class="before-image" src="{{ asset('assets/frontend/img/brand/brand-03.png') }}" alt="image_not_found">
                                            <img class="after-image" src="{{ asset('assets/frontend/img/brand/brand-03.png') }}" alt="image_not_found">
                                        </a>
                                    </div>
                                    <div class="single-brand">
                                        <a class="partner-logo" href="#">
                                            <img class="before-image" src="{{ asset('assets/frontend/img/brand/brand-04.png') }}" alt="image_not_found">
                                            <img class="after-image" src="{{ asset('assets/frontend/img/brand/brand-04.png') }}" alt="image_not_found">
                                        </a>
                                    </div>
                                    <div class="single-brand">
                                        <a class="partner-logo" href="#">
                                            <img class="before-image" src="{{ asset('assets/frontend/img/brand/brand-05.png') }}" alt="image_not_found">
                                            <img class="after-image" src="{{ asset('assets/frontend/img/brand/brand-05.png') }}" alt="image_not_found">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- brand end -->

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
                                            <img src="{{ asset('assets/frontend/img/testimonial/tm-author-04.png') }}" alt="">
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
                                            <img src="{{ asset('assets/frontend/img/testimonial/tm-author-05.png') }}" alt="">
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
                                            <img src="{{ asset('assets/frontend/img/testimonial/tm-author-06.png') }}" alt="">
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
                                            <img src="{{ asset('assets/frontend/img/testimonial/tm-author-04.png') }}" alt="">
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

            <!-- contact start -->
            <section class="contact-area pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-form-wrapper">
                                <div class="section-title">
                                    <span>Estimate For Projects</span>
                                    <h2>Share Work Details</h2>
                                </div>
                                <form class="contact-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="contact-input">
                                                <input type="text" placeholder="Full name">
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="contact-input">
                                                <input type="email" placeholder="Email address">
                                                <i class="ti-email"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="subject-filter">
                                                <select name="select" id="select">
                                                    <option value="1">Subject</option>
                                                    <option value="2">Software Development</option>
                                                    <option value="3">Web Design</option>
                                                    <option value="4">UX Design</option>
                                                    <option value="4">Game Design</option>
                                                    <option value="4">Consultancy</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-input">
                                                <textarea name="message" cols="30" rows="10" placeholder="Work details"></textarea>
                                                <i class="ti-pencil"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-btn text-md-right">
                                                <button class="thm-btn" type="submit">Get A Quote</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact end -->

            <!-- news start -->
            <section class="news-area pb-90">
                <div class="container">
                    <div class="section-title-2 text-center">
                        <span>Insights</span>
                        <h2>News Feeds</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-news mb-30">
                                <div class="news-thumb">
                                    <a href="#"><img src="{{ asset('assets/frontend/img/news/news-01.jpg') }}" alt=""></a>
                                </div>
                                <div class="news-content">
                                    <div class="blog-tage">
                                        <a href="#">Business</a>
                                    </div>
                                    <h3><a href="#">Built with light & dark mode</a></h3>
                                    <p>App allows users to earn points based on their daily engagement</p>
                                    <ul class="news-meta pt-10">
                                        <li>By <a href="#">Admin</a></li>
                                        <li class="cmt"><a href="#">24 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-news mb-30">
                                <div class="news-thumb">
                                    <a href="#"><img src="{{ asset('assets/frontend/img/news/news-02.jpg') }}" alt=""></a>
                                </div>
                                <div class="news-content">
                                    <div class="blog-tage">
                                        <a href="#">Business</a>
                                    </div>
                                    <h3><a href="news-details.html">Built with light & dark mode</a></h3>
                                    <p>App allows users to earn points based on their daily engagement</p>
                                    <ul class="news-meta pt-10">
                                        <li>By <a href="#">Admin</a></li>
                                        <li class="cmt"><a href="#">24 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-news mb-30">
                                <div class="news-thumb">
                                    <a href="#"><img src="{{ asset('assets/frontend/img/news/news-03.jpg') }}" alt=""></a>
                                </div>
                                <div class="news-content">
                                    <div class="blog-tage">
                                        <a href="#">Business</a>
                                    </div>
                                    <h3><a href="news-details.html">Built with light & dark mode</a></h3>
                                    <p>App allows users to earn points based on their daily engagement</p>
                                    <ul class="news-meta pt-10">
                                        <li>By <a href="#">Admin</a></li>
                                        <li class="cmt"><a href="#">24 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- news end -->
        </section>
        <!-- section bg white end -->

        <!-- careers start -->
        <section class="careers-area" style="z-index: 2;">
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
                                <li><a href="#">Consulting Executive</a></li>
                                <li><a href="#">UI & UX Designer</a></li>
                                <li><a href="#">Web Developer</a></li>
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
