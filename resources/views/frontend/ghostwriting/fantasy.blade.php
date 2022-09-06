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
                            <h3>Fantasy GhostWriting Service</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="index.html">Services</a></li>
                                <li>Fantasy GhostWriting Service</li>
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
                            <h3 class="title">About Fantasy GhostWriting Service</h3>
                            <div class="text mb-45">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa, beatae illum eligendi
                                    doloremque molestiae rem voluptatibus blanditiis odit voluptatum temporibus ipsum
                                    molestias minima nobis omnis in facilis eius ut unde!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A ea quia nihil voluptatem iste
                                    nostrum similique aperiam sapiente enim itaque sint magni eveniet animi, officiis rerum
                                    praesentium maxime ipsa harum.
                                </p>
                                <p>He is a services industry veteran with a diversified wealth of expertise that includes
                                    worldwide operations, delivery, process improvements, mergers and acquisitions, and
                                    integration, as well as sales and business development.</p>
                            </div>
                            <div class="td-list-wrapper mb-60">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i> Dedicated team member</li>
                                            <li><i class="ti-check"></i> Active with other team mates</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i> Dedicated team member</li>
                                            <li><i class="ti-check"></i> Active with other team mates</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i> Dedicated team member</li>
                                            <li><i class="ti-check"></i> Active with other team mates</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text mb-30">
                                <p>Prior to joining Ozix, he spent 20+ years at Inmosys, where he held a wide range of
                                    global leadership roles, from services to products, and across operations and sales.
                                    Most recently, he was SVP & Global Head of the Manufacturing business, as well as a
                                    board member of their software subsidiary. He is also an avid cook and history buff. You
                                    can find him dining late at night with the chefs of the hotels where he stays during his
                                    travels, or reading in his home library. He is a frequent speaker on the topics of
                                    global innovation and digital disruption. He is also an avid cook and history buff. You
                                    can find him dining late at night with the chefs of the hotels where he stays during his
                                    travels, or reading in his home library. Since joining Ozix in 2009, he has helped turn
                                    the company from a group of bright technology minds working with startups into a global
                                    Digital Product Engineering Services leader helping Fortune 500 companies on their
                                    innovation agenda. In Chriss’s time as President and CEO of company, the company has
                                    experienced explosive.</p>
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
                    <h2>{{ $service->name }}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Various <br> Specialized Genres</a></h3>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Client <br> Communication</a></h3>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Personalized <br> Service</a></h3>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Book <br> Marketing</a></h3>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
