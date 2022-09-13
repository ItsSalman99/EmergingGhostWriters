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
                        <h3>Book Marketing</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>Book Marketing</li>
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
                        <h3 class="title">Executing Efficient Marketing Plan for Self-published Book</h3>
                        <div class="text mb-45">
                            <p>
                                Your book has already been released, but sales aren't what you expected. You can still
                                reach your objectives with our viable marketing strategies! Advertising your book with
                                these helpful book promotion suggestions is never too late. To draw in more readers, we
                                employ excellent marketing strategies. Our marketing strategies are tailored to each
                                customer's needs because we know that every book differs from the others in various ways
                                and needs a unique marketing strategy to achieve maximum sales. Do not concern if you
                                have already published your text but are concerned that you are not experiencing the
                                rewards you had hoped for.
                            </p>
                            <p>
                                Reserve your book promotion services immediately to see your
                                book become a bestseller.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Email marketing</li>
                                        <li><i class="ti-check"></i>Marketing strategy</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Advertising</li>
                                        <li><i class="ti-check"></i>Search engine-optimized content</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Experienced Marketers</li>
                                        <li><i class="ti-check"></i>Personalized Services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                Do you find it difficult to rate yourself on the search engine? Is your brand not
                                receiving the attention it merits? Or do you lack the time necessary to devote to your
                                digital marketing campaign? Your entire digital marketing puzzle can be solved using
                                Emerging Ghostwriter's book marketing services for amenities similar to Social Media
                                Marketing (SMM), Search Engine Optimization (SEO), or anything else. We have your back.
                                Our goal is to generate the most client interest possible for your published book in
                                whatever format.
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
                <h2>Book Marketing</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Research & Determining Target Audience</a></h3>
                            <hr>
                            <p>
                                The top dealers will be chosen to develop the promotion strategies for your book. Your
                                book's target audience will be identified after conducting an in-depth study on the
                                subject, and that group will be particularly targeted in the book's promotion.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>First Marketing Strategy Support</a></h3>
                            <hr>
                            <p>
                                Once the first selling phase is complete, it is bent and brought to you for assistance.
                                Following approval, the marketing strategy is also put into practice.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Pre-launch Promotion</a></h3>
                            <hr>
                            <p>
                                Our marketers will create anticipation and buzz before your book is even launched. To do
                                this, attractive posts, advanced reservations, and self-promotion in esteemed
                                periodicals and magazines are used.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Book launch</a></h3>
                            <hr>
                            <p>
                                Our marketers are adept at putting together the ideal book launch and choosing the
                                attendees who will be crucial to promoting your book through media relations and public
                                relations activities.
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