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
                        <h3>Video Book Trailers</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>Video Book Trailers</li>
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
                        <h3 class="title">Video Book Trailer Services</h3>
                        <div class="text mb-45">
                            <p>
                                Who has the best understanding of an author's mind? The other writer, of course. The
                                portal Emerging Ghostwriter is geared toward writers. What advantage does that provide?
                                Our trailer production team never errs in their goal-setting. A specialist in the field
                                is chosen to extensively study and analyze the book, pulling out all the components that
                                will work together to create the ideal trailer for you.
                            </p>
                            <p>
                                A notable accomplishment is writing a fantastic book, but being the author of a
                                wonderful book and being a best-selling author is not always the same. A well-marketed
                                book outsells a well-written text in the real world. Why not mix the two? Use our
                                professional book trailer video services to prepare your book for an explosive global
                                release.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Order Details</li>
                                        <li><i class="ti-check"></i>Conceptualizing</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Video Script</li>
                                        <li><i class="ti-check"></i>Animation</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Music & Extra Effects</li>
                                        <li><i class="ti-check"></i>Final Approval</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                How can we accomplish that? Use expert marketing, like all the other major publishers
                                and authors. Commercials are an excellent way to sell some genres, including self-help
                                or nonfiction. Contrarily, epic music and trailers work well with thriller, mystery,
                                romance, and other literature subgenres. Both are our areas of expertise.
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
                <h2>Video Book Trailers</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Cinematic Book Trailers</a></h3>
                            <hr>
                            <p>
                                These trailers present the most creative challenges due to their complexity. These
                                expensive but worthwhile book commercials usually mirror movie trailers.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Blurb Trailers</a></h3>
                            <hr>
                            <p>
                                These trailers frequently include testimonials or reviews. Because most writers have
                                them created before their books are published, blurb trailers can be helpful for book
                                advertising.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Author Profiles</a></h3>
                            <hr>
                            <p>
                                In most of these book trailers, the author is seen discussing it in an interview-style
                                environment. The authors promote the book and the man who came up with the idea.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Docu-Trailers</a></h3>
                            <hr>
                            <p>
                                These are more detailed versions of author profiles that look similar to them.
                                Docu-Trailers frequently employ a documentary shooting method wherein the author
                                describes the sources of their inspiration and the motivation for their writing.
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