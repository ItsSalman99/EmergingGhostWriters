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
                        <h3>Editing & Proof Reading</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>Editing & Proof Reading</li>
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
                        <h3 class="title">Professional Book Editor for Hire</h3>
                        <div class="text mb-45">
                            <p>
                                Here is an opportunity for you to collaborate with the most well-known book editors of
                                all-time best sellers! You will only practice the highest level of professionalism from
                                us from the minute you contact us until the very conclusion of your book submission, and
                                that is also what you should anticipate. Although it's common knowledge that having low
                                expectations will lead to disappointment, as Emerging Ghostwriter, we would be unhappy
                                if you did! Thanks to our excellent book editing services, your book will be flawlessly
                                ready for publication within a few business days.
                            </p>
                            <p>
                                Hire our highly skilled book editors
                                to help you realize your ambition of being a published author instead of wasting your
                                valuable time trying to self-edit your book, which is nearly always impossible.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Historical fiction</li>
                                        <li><i class="ti-check"></i>Romance</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Flash fiction</li>
                                        <li><i class="ti-check"></i>Fan fiction for anime</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Young Adult</li>
                                        <li><i class="ti-check"></i>Mystery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                We begin the editing process by carefully examining your book and creating a draught of
                                the necessary changes. Since we handle all of the challenges involved with book editing,
                                you don't need to worry about them.
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
                <h2>Editing & Proof Reading</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Business Editing And Proofreading</a></h3>
                            <hr>
                            <p>
                                Our experienced editors meet corporate executives' needs while considering a memo or
                                long-term company plan.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Resume Editing And Proofreading</a></h3>
                            <hr>
                            <p>
                                Want to highlight your skills in the best way possible? A CV must initially grab the
                                employer's attention. We keep an eye on adherence to company policies here at the
                                Emerging Ghostwriter.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Academic Editing And Proofreading</a></h3>
                            <hr>
                            <p>
                                We guarantee that your work is error-free in terms of grammar, spelling, structure, and
                                punctuation. The best choice is, therefore, an author from the Emerging Ghostwriter.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Author Editing And Proofreading</a></h3>
                            <hr>
                            <p>
                                Reviewing a book and maintaining good, error-free writing could be difficult. As a
                                result, our editors finish their tasks promptly.
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