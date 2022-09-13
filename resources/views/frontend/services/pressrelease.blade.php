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
                        <h3>Press Release Writing</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>Press Release Writing</li>
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
                        <h3 class="title">Press Release Writing</h3>
                        <div class="text mb-45">
                            <p>
                                A press release is a one-page piece of advertising that describes and publicizes a fresh
                                good, service, or occasion. It's a terrific way to promote your business, increase
                                awareness of your goods and services, and increase website traffic.
                            </p>
                            <p>
                                Press releases have long been utilized as a powerful marketing strategy that has the
                                potential to expand your audience and business.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Newsworthy and attention-grabbing</li>
                                        <li><i class="ti-check"></i>Created for the target audience in mind</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Attracts journalists, businesses, and customers</li>
                                        <li><i class="ti-check"></i>Promotes your product, service, or event effectively
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Drive search engine traffic</li>
                                        <li><i class="ti-check"></i>Reach a wider audience</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                Online press releases may be a fantastic tool to raise awareness of a person or a
                                company. A press release can grow endlessly and stay in the search area for an infinite
                                time if properly crafted and distributed. Press releases have been a key component of
                                successful website search engine optimization for many years. You can get assistance
                                from Emerging Ghostwriter in creating a press release for just about any announcement.
                                Our press release service is fantastic because we'll do keyword research and craft your
                                PR with SEO. The appropriate keywords in your press release could mean the difference
                                between a small and large audience.
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
                <h2>Press Release Writing</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Broad Distribution Networks</a></h3>
                            <hr>
                            <p>
                                Your business can get rapid exposure with us by connecting with top-tier search engines,
                                media networks, tv, blogs, or magazines. Our PR services are ideal for promoting
                                significant announcements, building brands, and promoting novel products and services.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Tempting Content</a></h3>
                            <hr>
                            <p>
                                The press release writers at Emerging Ghostwriter are skilled at creating 100 percent
                                unique, fascinating, and attention-grabbing content for your press release that keeps
                                readers interested. We also offer search engine-distributed content that has been
                                PR-optimized.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Expert Writers</a></h3>
                            <hr>
                            <p>
                                Our talented team of PR writers at Emerging Ghostwriter is famous for offering expert
                                press release writing services in various sectors at affordable rates. Our writers
                                generate effective press releases for companies.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Timely Delivery</a></h3>
                            <hr>
                            <p>
                                Our press release writers ensure the work is precise and completed on time. Even if we
                                respond quickly, our writers provide the job's caliber is maintained. We are creating an
                                effective PR and spreading it to different places.
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