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
                        <h3>Interactive E-Books</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>Interactive E-Books</li>
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
                        <h3 class="title">Interactive Ebooks</h3>
                        <div class="text mb-45">
                            <p>
                                You can get assistance from a wide range of services from Emerging Ghostwriter, a top
                                supplier of interactive eBook solutions. We are dependable regarding enhancing user
                                interaction and offering services for better content display and layout. Our interactive
                                eBook team consistently uses the best techniques and technology to provide excellent
                                results. You don't need to look anymore if you want to make fantastic interactive
                                eBooks.
                            </p>
                            <p>
                                We rank audio clips, interactive checklists, maps, animations, and infographics as our
                                top interactive eBook services. Emerging Ghostwriter interactive eBook services let you
                                incorporate many sorts of material into a single publication. Allow us to handle the
                                interactive eBook services so we can transform them into a masterpiece.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Cost Reduction</li>
                                        <li><i class="ti-check"></i>Faster Turnaround</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Satisfied Clients</li>
                                        <li><i class="ti-check"></i>Skilled Data Management Experts</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Accuracy</li>
                                        <li><i class="ti-check"></i>Years’s Experience</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                Leading interactive eBook services are offered by Emerging Ghostwriter to customers all
                                over the world. Our staff members receive monthly training to inform them of eBook
                                production's latest advancements and industry best practices. We also make sure that all
                                defined quality standards are rigorously followed. To consistently deliver cutting-edge
                                services, we employ the best methods and equipment.
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
                <h2>Interactive E-Books</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Audio Clips</a></h3>
                            <hr>
                            <p>
                                You can utilize audio samples when using interactive eBooks to promote your work. We
                                help you transfer any audio data from one user to another as a consequence.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Interactive Checklists</a></h3>
                            <hr>
                            <p>
                                To simplify the reading and editing process, the Emerging Ghostwriter specialists offer
                                interactive checklists within the document.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Maps</a></h3>
                            <hr>
                            <p>
                                Options are available with the interactive eBooks that Emerging Ghostwriter offers. Some
                                of these within the paper include zooming in and out, panning, and searching.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Animations And Infographics</a></h3>
                            <hr>
                            <p>
                                We at Emerging Ghostwriter believe animation will better engage the audience than
                                written material.
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