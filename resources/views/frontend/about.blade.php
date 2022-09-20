@extends('frontend.layout.main')

@section('content')

    @include('frontend.partials.pop-up')

    <main>
        <!-- page title start -->
        <section class="page-title-area pt-120 pb-80 black-thm-bg">
            <div class="container" style="margin-top: 100px;">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-title mb-30">
                            <p>Welcome To Our {{ env('APP_NAME') }}</p>
                            <h3>About Us</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title end -->

        <!-- about start -->
        <section class="about-area pt-150 pb-135">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left mb-30">
                            <div class="about-big-img">
                                <img src="{{ asset('assets/frontend/img/bg/about-big.jpg') }}" alt="">
                            </div>
                            <div class="about-sml-img">
                                <img src="{{ asset('assets/frontend/img/bg/about-sml.jpg') }}" alt="">
                            </div>
                            <div class="about-left-text text-center">
                                <h3>10<span>+</span></h3>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right mb-30">
                            <div class="section-title">
                                <span>About Us</span>
                                <h2>Get Your Book Written Through Emerging Ghostwriters</h2>
                            </div>
                            <div class="about-bq-box mb-40">
                                <p>
                                    Professionals in ghostwriting are available to provide immediate assistance with any
                                    writing, design, or marketing service. We are a group of enthusiastic, engaged, and
                                    highly creative individuals.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="about-box-text">
                                        <h4>Native Award-Winning Writers</h4>
                                        <p>Thanks to our creative team approach, every step of the book-writing and
                                            publishing process receives targeted attention from some industry specialists.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="about-box-text">
                                        <h4>Expert Writers</h4>
                                        <p>
                                            You'll discover that in a market characterized by impersonal outsourcing &
                                            unprofessional publishing services, our professionalism & individualized client
                                            attention stand out.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about end -->

        <!-- mission start -->
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
                                    <span>Our Mission</span>
                                    <h2>Our Mission...</h2>
                                </div>
                                <p>
                                    Emerging Ghostwriters strives to offer superior writing services all over the world.
                                    Regardless of the genre, our outstanding ghostwriter specialists deliver top-notch
                                    writing to everyone.
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
        <!-- mission end-->

        <!-- mission start -->
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
                                    <span>Our Goal</span>
                                    <h2>Our Achievement<h2>
                                </div>
                                <p>
                                    The top authors, editorial organizations, companies, publishing houses, journals, and
                                    debut authors are among our clients. We are a reputable company in the ghostwriting
                                    field, and we have successfully helped our clients reach their publication goals.
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
        <!-- mission end-->


        <!-- skill start -->
        <section class="skill-area white-bg pt-120 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="skill-left mb-30">
                            <div class="section-title">
                                <span>About Us</span>
                                <h2>Get Your Work Done by The Professionals</h2>
                            </div>
                            <p>
                                Become the BEST-SELLING AUTHOR by taking this one step.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="skill">
                            <div class="single-skill mb-30">
                                <span>Ghost Writing</span>
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="85"></span>
                                </div>
                            </div>
                            <div class="single-skill mb-30">
                                <span>Book Marketing</span>
                                <div id="bar2" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="75"></span>
                                </div>
                            </div>
                            <div class="single-skill mb-30">
                                <span>24/7 Support</span>
                                <div id="bar3" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="85"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- skill end -->

        <!-- team start -->
        <section class="team-area pt-120 pb-90">
            <div class="container">
                <div class="section-title-2 text-center">
                    <span>Experts</span>
                    <h2>Our Writers</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-thumb mb-30">
                                <img src="{{ asset('assets/frontend/img/team/team-01.png') }}" alt="">
                            </div>
                            <div class="team-text mb-35" style="padding-bottom: 20px;">
                                <h3><a>Miranda H. Halim</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-thumb mb-30">
                                <img src="{{ asset('assets/frontend/img/team/team-02.png') }}" alt="">
                            </div>
                            <div class="team-text mb-35" style="padding-bottom: 20px;">
                                <h3><a>Justin Carr</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-thumb mb-30">
                                <img src="{{ asset('assets/frontend/img/team/team-03.png') }}" alt="">
                            </div>
                            <div class="team-text mb-35" style="padding-bottom: 20px;">
                                <h3><a>Amanda Rees</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-thumb mb-30">
                                <img src="{{ asset('assets/frontend/img/team/team-04.png') }}" alt="">
                            </div>
                            <div class="team-text mb-35" style="padding-bottom: 20px;">
                                <h3><a>Ehsan Ahmed</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team end -->

        <!-- video start -->
        <section class="video-area video-2 gray-bg">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="video-bg">
                            <div class="video-thumb">
                                <img src="{{ asset('assets/frontend/img/bg/video-bg-02.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="video-content pt-120 pb-100">
                            <div class="section-title">
                                <span>Emerging Ghost Writers</span>
                                <h2>We Ensure to Provide Better Service!</h2>
                            </div>
                            <p>
                                The Emerging Ghostwriters was founded to provide customers with what they had been looking
                                for. Customers can establish genuine connections with this collaborative and seamless
                                content creation platform!
                            </p>
                            <div class="video-text-box pt-20">
                            <ul class="careers-right">
                                <li><a style="background-color: #fff;" href="javascript:void(Tawk_API.toggle())">Our Live Chat Support</a></li>
                                <li><a style="background-color: #fff;" href="{{ route('contact') }}">Get Free Consultation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video end -->
    </main>
@endsection
