@extends('frontend.layout.main')

@section('content')
    <main>
        <!-- page title start -->
        <section class="page-title-area pt-120 pb-80 black-thm-bg">
            <div class="container" style="margin-top: 100px;">>
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
                                <li><a href="index.html">Home</a></li>
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
                                <h3>25<span>+</span></h3>
                                <p>Years Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right mb-30">
                            <div class="section-title">
                                <span>About Us</span>
                                <h2>Work With A Dedicated SEO Company</h2>
                            </div>
                            <div class="about-bq-box mb-40">
                                <p>Help support language! Our dedicated team professional dictionary editors work to provide
                                    you with accurate</p>
                                <span><span>Rosalina D.</span> - Founder</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="about-box-text">
                                        <h4>Our Goals</h4>
                                        <p>App allows users to earn points based on their daily engagement & activities
                                            using interesting</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12">
                                    <div class="about-box-text">
                                        <h4>Our Missions</h4>
                                        <p>App allows users to earn points based on their daily engagement & activities
                                            using interesting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about end -->

        <!-- skill start -->
        <section class="skill-area white-bg pt-120 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="skill-left mb-30">
                            <div class="section-title">
                                <span>About Us</span>
                                <h2>Choose What Matters To Your Business</h2>
                            </div>
                            <p>Help support language! Our dedicated team professional dictionary editors work to provide you
                                with accurate</p>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="skill">
                            <div class="single-skill mb-30">
                                <span>User Research</span>
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="82"></span>
                                </div>
                            </div>
                            <div class="single-skill mb-30">
                                <span>UX Focus</span>
                                <div id="bar2" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="56"></span>
                                </div>
                            </div>
                            <div class="single-skill mb-30">
                                <span>Clients Support</span>
                                <div id="bar3" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- skill end -->

        <!-- gallery start -->
        <section class="gallery-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <img src="img/gallery/gallery-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <img src="img/gallery/gallery-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <img src="img/gallery/gallery-03.jpg" alt="">
                                </div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <img src="img/gallery/gallery-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <img src="img/gallery/gallery-01.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery end -->

        <!-- team start -->
        <section class="team-area pt-120 pb-90">
            <div class="container">
                <div class="section-title-2 text-center">
                    <span>Experts</span>
                    <h2>Our Team Members</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-thumb mb-30">
                                <img src="{{ asset('assets/frontend/img/team/team-01.png') }}" alt="">
                            </div>
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Miranda H. Halim</a></h3>
                                <span>Founder</span>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-thumb mb-30">
                                <img src="{{ asset('assets/frontend/img/team/team-02.png') }}" alt="">
                            </div>
                            <div class="team-text mb-35">
                                <h3><a href="#">Justin Carr</a></h3>
                                <span>Founder</span>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-thumb mb-30">
                                <img src="{{ asset('assets/frontend/img/team/team-03.png') }}" alt="">
                            </div>
                            <div class="team-text mb-35">
                                <h3><a href="#">Amanda Rees</a></h3>
                                <span>Founder</span>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-thumb mb-30">
                                <img src="{{ asset('assets/frontend/img/team/team-04.png') }}" alt="">
                            </div>
                            <div class="team-text mb-35">
                                <h3><a href="#">Ehsan Ahmed</a></h3>
                                <span>Founder</span>
                            </div>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
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
                            <div class="video-play-icon">
                                <a class="popup-video video-icon" href="https://www.youtube.com/watch?v=cRXm1p-CNyk"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="video-content pt-120 pb-100">
                            <div class="section-title">
                                <span>Get Newsletter</span>
                                <h2>Get every weekly update feeds</h2>
                            </div>
                            <p>Allows users to earn points based on their daily engagement & activities using interesting
                            </p>
                            <div class="video-text-box pt-20">
                                <div class="vt-icon">
                                    <img src="{{ asset('assets/frontend/img/icon/vt-01.png') }}" alt="">
                                    <i class="ti-check"></i>
                                </div>
                                <div class="vt-text">
                                    <h5>Built with light & dark mode</h5>
                                    <p>App allows users to earn points based on their daily engagement activities</p>
                                </div>
                            </div>
                            <div class="video-text-box pt-20">
                                <div class="vt-icon">
                                    <img src="{{ asset('assets/frontend/img/icon/vt-02.png') }}" alt="">
                                    <i class="ti-check"></i>
                                </div>
                                <div class="vt-text">
                                    <h5>24/7 online & offline supoort</h5>
                                    <p>App allows users to earn points based on their daily engagement activities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video end -->
    </main>
@endsection
