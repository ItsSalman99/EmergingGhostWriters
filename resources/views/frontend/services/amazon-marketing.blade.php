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
                            <h3>Amazon Marketing</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="/">Services</a></li>
                                <li>Amazon Marketing</li>
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
                            <h3 class="title">Amazon Marketing Services</h3>
                            <div class="text mb-45">
                                <p>
                                    Numerous folks make purchases on Amazon. You require a competitive edge. You don't want
                                    to squander money on Amazon while no one buys and your products remain buried. If you're
                                    here, you already know that Amazon dominates the U.S. retail eCommerce sector. You are
                                    unaware of how to participate in it.
                                </p>
                                <p>
                                    What is the first step? How do you set your goods
                                    or services apart? How can you navigate a congested Amazon marketplace without getting
                                    lost?
                                </p>
                            </div>
                            <div class="td-list-wrapper mb-60">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Sponsored Products</li>
                                            <li><i class="ti-check"></i>Sponsored Brands</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Sponsored Display</li>
                                            <li><i class="ti-check"></i>Buy One Get One (BOGO) promotions</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Percentage-off coupon promotions</li>
                                            <li><i class="ti-check"></i>Lightning Deals </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text mb-30">
                                <p>
                                    You don't want to alter the prices of your goods frequently. That can harm your Amazon
                                    optimization. Utilize Amazon's selection of sales, coupons, and discounts to appeal to
                                    customers' need to save money. Rarely is the lowest price the best price, nor is the
                                    highest price always the greatest. As a seasoned marketing firm, we collaborate with you
                                    to identify that sweet spot, a happy medium that boosts sales and profit margins.
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
                    <h2>Amazon Marketing</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Amazon Keyword Optimization</a></h3>
                                <hr>
                                <p>
                                    Adding each description after the provided keywords for any good or service is easy with
                                    Amazon keyword optimization.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Pricing Strategy</a></h3>
                                <hr>
                                <p>
                                    Because of Amazon's price philosophy, customers can purchase goods and services for less
                                    money. We use an optimum pricing strategy at Emerging Ghostwriter that helps to address
                                    price-related issues.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Amazon Product Title Optimization</a></h3>
                                <hr>
                                <p>
                                    Customers can find the services and items they're looking for fast by optimizing the
                                    names of Amazon products.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Product Image Optimization</a></h3>
                                <hr>
                                <p>
                                    Customers may choose the exact thing they need thanks to our employees' skill in
                                    enhancing product photographs.
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
