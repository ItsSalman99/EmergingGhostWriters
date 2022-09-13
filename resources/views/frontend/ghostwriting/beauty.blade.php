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
                        <h3>Beauty GhostWriting Service</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('ghostwriting-services') }}">Services</a></li>
                            <li>Beauty GhostWriting</li>
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
                        <h3 class="title">The Optimum Beauty Ghostwriter at your service</h3>
                        <div class="text mb-45">
                            <p>
                                An extensive range of subtopics falls under the umbrella of the overarching issue of
                                beauty. The beauty writers at Emerging Ghostwriter have in-depth knowledge about the
                                makeup and efficacy of cosmetics, and they offer advice based on their expertise.
                            </p>
                            <p>
                                We are aware of the difficulties and demands of rigorous study when writing about themes
                                related to beauty. Our team of expert beauty ghostwriters provides readers with in-depth
                                analysis and exciting content based on years of experience in the field. Our beauty
                                ghostwriters rely on factual information, which we only release after careful
                                examination.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Proficiency in English writing skills</li>
                                        <li><i class="ti-check"></i>Up-to-date and well-researched beauty content</li>
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
                                        <li><i class="ti-check"></i>Fashion Trends</li>
                                        <li><i class="ti-check"></i>Organic Beauty Tips</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                Will you soon introduce a new beauty product? It is a comparison of ten accessories that
                                help with beauty. It is challenging to stay knowledgeable, given the growth of this
                                business and the monthly introduction of new items. But not for our ghostwriters for
                                beauty. Emerging Ghostwriter Beauty bloggers and beauty magazine writers that have
                                extensive knowledge in hair, makeup, skincare, and fashion make up the ghostwriting
                                team. Everything from skincare products to hairstyles to clothing is different. Almost
                                everything is grouped under the phrase beauty. Obtain access to exquisite writing!
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
                <h2>Beauty GhostWriting Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Fashion Sensations</a></h3>
                            <hr>
                            <p>
                                Without including fashion trends in the list, beauty is nebulous. Our skilled beauty
                                ghostwriters at Emerging Ghostwriter thoroughly understand current fashion trends.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Organic Beauty Tips</a></h3>
                            <hr>
                            <p>
                                Hire a ghostwriter at Emerging Ghostwriter immediately to learn the best organic beauty
                                secrets. Beauty ghostwriters have extensively trained in organic remedies to preserve
                                and enhance attractiveness.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Makeup Tips</a></h3>
                            <hr>
                            <p>
                                Every female age group uses makeup frequently. It has somehow evolved into an essential
                                requirement. The affordable beauty copywriting services emerging Ghostwriter offers to
                                include knowledge of current cosmetics techniques and trends.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Genuine Topics</a></h3>
                            <hr>
                            <p>
                                We are aware of the importance of challenging subjects and occasionally complex
                                problems.
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