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
                        <h3>Blog GhostWriting Service</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('ghostwriting-services') }}">Services</a></li>
                            <li>Blog GhostWriting</li>
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
                        <h3 class="title">About Blog GhostWriting Service</h3>
                        <div class="text mb-45">
                            <p>
                                Emerging Ghostwriter provides expert blog post writing services with a staff
                                understanding of how to raise brand awareness, generate leads, boost sales, and engage
                                customers. We take pride in providing the most extraordinary ability and expertise while
                                performing ghost blogging services.
                            </p>
                            <p>
                                Since many websites and businesses cannot manage blogs independently, our ghostwriters
                                help them with their writing assignments.
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
                                        <li><i class="ti-check"></i>Award-Winning blog writers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                Here, we're dedicated to giving clients unmatched blog writing services while putting
                                them in the top searches on Google. Our staff of ghost bloggers provides thoroughly
                                researched, engaging, and full SEO content to assist clients in working as productively
                                as possible.
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
                <h2>Blog GhostWriting</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Command and Excellence</a></h3>
                            <hr>
                            <p>
                                Globally renowned for its expert blog post writing services is Emerging Ghostwriter. Our
                                revenue, brand awareness, customer interaction, and lead generation have all
                                demonstrated that our expertise and execution excellence command are the best.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Blog Management</a></h3>
                            <hr>
                            <p>
                                At Emerging Ghostwriter, hire a blogger. Our blog writing services are intended to
                                assist businesses and websites that cannot manage a blog independently.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Professional Approach</a></h3>
                            <hr>
                            <p>
                                We distinguish ourselves from other blog writing services with our professionalism.
                                Before producing material, our ghostwriters analyze the niche to increase the audience
                                rather than rushing through or doing it half-heartedly.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">3P approach</a></h3>
                            <hr>
                            <p>
                                The 3P method is what Emerging Ghostwriter uses when creating material for blog
                                websites.
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