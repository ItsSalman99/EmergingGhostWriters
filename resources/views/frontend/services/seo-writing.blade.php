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
                        <h3>SEO Writing</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>SEO Writing</li>
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
                        <h3 class="title">SEO Content Writing Services</h3>
                        <div class="text mb-45">
                            <p>
                                Utilize the SEO content writing services of Emerging Ghostwriter to produce high-quality
                                content that converts and draws more organic search traffic. To help you reach untapped
                                demographics and establish your name in your niche market, our content marketing agency
                                handles keyword research, content strategy building, content production, and content
                                marketing on the backend.
                            </p>
                            <p>
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
                                        <li><i class="ti-check"></i>Get Better SEO Results</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                Consider content marketing and SEO as overlapping digital marketing strategies: A
                                content production strategy focuses on producing high-quality web material useful to
                                both online users and search engines. On the other hand, SEO focuses on content
                                optimization and your website's more technical features, like page speed, keyword
                                incorporation, and research.
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
                <h2>SEO Writing</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>SEO Writing</a></h3>
                            <hr>
                            <p>
                                The SEO web content development services at Emerging Ghostwriter increase traffic to
                                your website and make it easier for clients to find your products and services by
                                incorporating pertinent keywords.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Guest Blogs And Articles</a></h3>
                            <hr>
                            <p>
                                It is crucial to provide relevant content on venues outside of the website. We ensure
                                that your website benefits from better search results at Emerging Ghostwriter.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>SEO Blogs</a></h3>
                            <hr>
                            <p>
                                Blogs are crucial for consistent updates that keep your website relevant to search
                                engines. Our SEO blog writing services make finding the right audience easier for
                                clients.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Social Media Content</a></h3>
                            <hr>
                            <p>
                                Search engine optimization is considered insufficient without social media content and
                                strategy. Our social media content services help firms rank higher online.
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