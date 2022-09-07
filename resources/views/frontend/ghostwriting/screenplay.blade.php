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
                            <h3>ScreenPlay GhostWriting Service</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="index.html">Services</a></li>
                                <li>ScreenPlay GhostWriting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title end -->

        <section class="team-details-area pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="td-bottom-content">
                            <h3 class="title">About ScreenPlay GhostWriting Service</h3>
                            <div class="text mb-45">
                                <p>
                                    Our original thinking and unique approaches help our ghostwriting services stand out
                                    from the competition, whether it be Hulu, Netflix, TV video platforms, or Hollywood.
                                </p>
                                <p>
                                    You can get expert screenplay ghostwriting from Emerging Ghostwriter together with
                                    real-time information about the screenplay. We provide services based on excellence and
                                    reasonable price because we know the competitive market.
                                </p>
                            </div>
                            <div class="td-list-wrapper mb-60">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Proficiency in English writing skills</li>
                                            <li><i class="ti-check"></i>Up-to-date and well-researched content</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Aware of referencing and ghostwriting</li>
                                            <li><i class="ti-check"></i>Deadline specific</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Competitive Advantage</li>
                                            <li><i class="ti-check"></i>Award-Winning Screenwriters</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text mb-30">
                                <p>
                                    Emerging Ghostwriter plays with both emerging talent and established competence in
                                    various fields to deliver top-notch items to the client. Only professionals in the area
                                    are aware; that screenplay writing requires particular sections. We offer heavenly
                                    screenplay espionage services. Our specialists can smell every component in a script and
                                    provide flawless final copies of screenplays that our clients adore. We are experts in
                                    everything, including conversation, scene headers, transitions, characters, story, and
                                    theme.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-area pt-120 pb-90">
            <div class="container">
                <div class="section-title-2 text-center">
                    <span>Emerging Ghost Writers</span>
                    <h2>Screen Play Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Competitive Advantage</a></h3>
                                <hr>
                                <p>
                                    Emerging Ghostwriter gives you a competitive edge with our reasonably priced screenplay
                                    ghostwriting services.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Award-Winning Screenwriters</a></h3>
                                <hr>
                                <p>
                                    We are a group of acclaimed ghostwriters, giving Emerging Ghostwriter a competitive
                                    edge.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Unique And Exceptional Screenplays</a></h3>
                                <hr>
                                <p>
                                    Our goal at Emerging Ghostwriter is to satisfy our clients' needs by offering immaculate
                                    screenplay-related text.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">24/7 Support</a></h3>
                                <hr>
                                <p>
                                    Except on Sunday, our support staff is accessible and available around-the-clock every
                                    day.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
