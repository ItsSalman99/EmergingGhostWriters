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
                            <h3>Business GhostWriting Service</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="index.html">Services</a></li>
                                <li>Business GhostWriting</li>
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
                            <h3 class="title">Your Abundant Resource of Business Ghostwriter</h3>
                            <div class="text mb-45">
                                <p>
                                    You've come to the faultless place if you're a business executive looking to publish
                                    your business book. A professional business ghostwriter on our team has the skills and
                                    experience necessary to turn your rough book proposal into a best-selling business book.
                                    With the help of our business book authors, writing a book has never been simpler.
                                </p>
                                <p>
                                    Do you desire your company book to be noticed? Our skilled business copywriter selects
                                    the appropriate target market for your book and works efficiently to produce results.
                                </p>
                            </div>
                            <div class="td-list-wrapper mb-60">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Bestselling Business Ghostwriters</li>
                                            <li><i class="ti-check"></i>Low Time Commitment</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Personalized Service</li>
                                            <li><i class="ti-check"></i>Work with Publishing Execs</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>We're Your Publishing Sherpa</li>
                                            <li><i class="ti-check"></i>Guaranteed Publication</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text mb-30">
                                <p>
                                    It's difficult to survive in this cutthroat market. Still, our extensive experience in
                                    ghostwriting will offer you the credibility you need not only to endure but also to
                                    outperform other company leaders in your field. Some people might find it difficult to
                                    turn their scribbled notes into business books that people value, but our writers are
                                    skilled at gracefully handling the entire ghostwriting process.
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
                    <h2>Business Ghost Writing</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Easygoing Approach</a></h3>
                                <hr>
                                <p>
                                    The main goal of Emerging Ghostwriter, the best ghostwriter service for your company, is
                                    a flexible strategy.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Detail focused</a></h3>
                                <hr>
                                <p>
                                    The organization that emphasizes the specifics and offers the quickest return times is
                                    Emerging Ghostwriter.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Success Benchmark</a></h3>
                                <hr>
                                <p>
                                    We consider things like if a client is a business specialist or a novice or if they
                                    enjoy creating content. A lucrative venture is one of the best aspects of starting a
                                    ghostwriter business.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Competent Authors</a></h3>
                                <hr>
                                <p>
                                    All our great in-house writers have in common is their unwavering passion for the
                                    written word.
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
