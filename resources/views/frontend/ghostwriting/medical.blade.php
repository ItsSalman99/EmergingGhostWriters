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
                        <h3>Medical GhostWriting Service</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('ghostwriting-services') }}">Services</a></li>
                            <li>Medical GhostWriting</li>
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
                        <h3 class="title">About Medical Ghostwriting Services</h3>
                        <div class="text mb-45">
                            <p>
                                We have an exceedingly skilled team of physicians and scientists with Ph.D.s who have a
                                wealth of knowledge in writing scientifically. We offer writing for research papers,
                                books, review articles, and other publications as part of our medical ghostwriting
                                service.
                            </p>
                            <p>
                                Many doctors, surgeons, and other medical professionals must keep themselves and the
                                public informed about the newest scientific advancements and data on medications and
                                illnesses. Although their responsibilities and titles differ, they confront difficulties
                                managing the patient load, in general, practice while simultaneously taking part in
                                medical research.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Create study designs for medical research</li>
                                        <li><i class="ti-check"></i>Conduct statistical analysis</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Create lecture notes</li>
                                        <li><i class="ti-check"></i>Literature reviews and abstracts; </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Assemble them following the requirements of
                                            international publications</li>
                                        <li><i class="ti-check"></i>Timely client interaction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                In order to fill the gap and produce a wide range of current scientific articles with
                                the most recent medical research and cover various topics and areas linked to the field,
                                we offer expert medical ghostwriting services. Our medical ghostwriting service adheres
                                to moral principles and provides original scripts.
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
                <h2>Medical GhostWriting Service</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Topic Awareness</a></h3>
                            <hr>
                            <p>
                                Our team of medical ghostwriters is an expert in medical terminology. As a medical
                                writing service, we have decades of experience.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Speedy Delivery</a></h3>
                            <hr>
                            <p>
                                The Emerging Ghostwriter is renowned for its prompt delivery and deadline notifications.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Premium Quality Papers</a></h3>
                            <hr>
                            <p>
                                Emerging Ghostwriter strives to give the best medical-related papers to meet our
                                client's expectations.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Infinite Modifications</a></h3>
                            <hr>
                            <p>Do you need to change your script's course to account for the chapter or character development? Not to worry.</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection