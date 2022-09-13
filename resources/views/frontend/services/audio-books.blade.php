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
                        <h3>Audio Books</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>Audio Books</li>
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
                        <h3 class="title">Affordable Audiobook Production</h3>
                        <div class="text mb-45">
                            <p>
                                Are you prepared to convert your printed book into an audiobook? Emerging Ghostwriter is
                                one of the top audiobook production companies offering audiobooks on demand. Our group
                                of well-known voiceover professionals does an excellent job.
                            </p>
                            <p>
                                Why market a hard copy-only book? Your current book gets converted into an audiobook by
                                our team of professionals in audiobook production. For a long time, audiobooks have been
                                accessible at public libraries, schools, and to a lesser extent, music stores.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Build Brand Awareness</li>
                                        <li><i class="ti-check"></i>Expand Your Customer Base</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Grow Your Online Authority</li>
                                        <li><i class="ti-check"></i>Gain Higher Leads and Conversion Rates</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Earn Long-Term Revenue</li>
                                        <li><i class="ti-check"></i>Get Better Results</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                One of the most peaceful ways to encourage a dependable reading habit is through
                                audiobooks. Prepare to convert your written works into audiobooks. Emerging Ghostwriter
                                is here to transform your writing into something that will be appreciated. When you plug
                                in to listen to your audiobooks, you'll have a wonderful time, thanks to the voiceover
                                experts on our team.
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
                <h2>Audio Books Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Digitally Audio Formats</a></h3>
                            <hr>
                            <p>
                                Want to create a downloadable digital edition of your audiobooks? At the Emerging
                                Ghostwriter, we help you convert your audiobook into a digital file that can be
                                downloaded.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Windows Media Audio</a></h3>
                            <hr>
                            <p>
                                We provide the finest audio quality for audiobooks using the recommended audio codecs
                                for Microsoft's Windows Media Audio.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Progressive Audio Coding</a></h3>
                            <hr>
                            <p>
                                Are they worried about lossy digital audio compression? Our experts are skilled in both
                                simple and complex audio coding challenges.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Solid-State Preloaded Digital</a></h3>
                            <hr>
                            <p>
                                We recommend portable media players at the Emerging Ghostwriter for public and school
                                libraries.
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