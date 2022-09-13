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
                        <h3>Social Media Marketing</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>Social Media Marketing</li>
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
                        <h3 class="title">Social Media Marketing Services</h3>
                        <div class="text mb-45">
                            <p>
                                If you've been using social media for some time, you've likely seen and reacted to a
                                post or advertisement from a business page—especially if it was for a brand you like!
                                The same is true for your target market. They love interacting with businesses they
                                respect and support. But how can you get the trust of the public in your brand?
                            </p>
                            <p>
                                Social media marketing, also known as SMM promotion, can help. Constructing a strong
                                social media presence for your brand is the key component of this particular digital
                                marketing strategy, which attempts to raise brand recognition and generate brand trust
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Better Online Exposure</li>
                                        <li><i class="ti-check"></i>High Search Rankings</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Specific Audience Targeting</li>
                                        <li><i class="ti-check"></i>Improved Customer Reach</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Complete Brand Control</li>
                                        <li><i class="ti-check"></i>Enhanced Customer Trust</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                Both new and established brands can profit greatly from social media marketing services.
                                When used in conjunction with the right social media marketing strategy and campaign
                                monitoring system, social media content marketing can increase customer engagement,
                                search traffic, SEO, and brand loyalty.
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
                <h2>Social Media Marketing</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Instagram Advertising</a></h3>
                            <hr>
                            <p>
                                Thanks to more than one billion monthly users, Instagram offers your company unmatched
                                access to your target market. Making a company stand out on the platform can be
                                challenging. Because of this, companies invest money in the knowledgeable Instagram
                                marketing services Emerging Ghostwriter provides.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Facebook Advertising</a></h3>
                            <hr>
                            <p>
                                With the largest social media network in the world, Facebook advertising services may be
                                able to increase brand recognition, expand lead creation, and boost revenue-generating
                                activities for your business.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Twitter Advertising</a></h3>
                            <hr>
                            <p>
                                Twitter is a social media powerhouse that keeps expanding by the second, with more than
                                500 million daily posts and around 336 million monthly active users. Our expert Twitter
                                advertising company will help your business cut through the noise and ensure that your
                                voice is heard despite the overwhelming volume of tweets.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>LinkedIn Advertising</a></h3>
                            <hr>
                            <p>
                                The audience of LinkedIn, which began as a tiny resume center, consists of more than
                                half a billion active members. Aside from comparable social media behemoths, LinkedIn
                                stands out for its effectiveness in locating and connecting with professionals
                                worldwide.
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