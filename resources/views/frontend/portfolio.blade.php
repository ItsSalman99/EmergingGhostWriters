@extends('frontend.layout.main')

@section('content')
    <main>
        <!-- page title start -->
        <section class="page-title-area pt-120 pb-80 black-thm-bg">
            <div class="container" style="margin-top: 100px;">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-title mb-30">
                            <p>Welcome To Our Company</p>
                            <h3>Our Portfolio</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Portfolio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title end -->

        <!-- portfolio start -->
        <section class="portfolio-area pt-120 pb-120">
            <div class="container">
                <div style="margin-bottom: 100px">
                    <h1>
                        Our Magnificent
                        Successful Creation
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias accusamus adipisci officia! Non
                        dolorum
                        error fugiat, rem possimus recusandae voluptatum blanditiis dolore. Dolor consequatur accusantium in
                        ad
                        neque culpa ab.
                    </p>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-menu mb-10">
                            <button class="active" data-filter="*">All Works</button>
                            <button data-filter=".cat1">Comic</button>
                            <button data-filter=".cat2">Children</button>
                            <button data-filter=".cat3">Action & Adventures</button>
                            <button data-filter=".cat4">Auto Biography</button>
                            <button data-filter=".cat4">Classics</button>
                            <button data-filter=".cat4">Fiction</button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat1 cat4">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-03.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat3 cat2">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-04.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat4 cat1 cat3">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-05.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat3 cat1">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-06.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat1 cat2">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-07.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat3 cat4 cat2">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-08.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat3 cat2">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-09.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat4 cat1 cat3">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-10.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat3 cat1">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-11.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat1 cat2">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-12.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat3 cat4 cat2">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-13.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 cat3 cat4 cat2">
                        <div class="port-single">
                            <div class="port-thumb">
                                <img src="img/portfolio/port-14.jpg" alt="">
                            </div>
                            <div class="port-content">
                                <div class="port-icon">
                                    <a href="portfolio-details.html">
                                        <i class="ti-arrow-right "></i>
                                    </a>
                                </div>
                                <div class="port-text">
                                    <span>Design UX, Interface</span>
                                    <h4><a href="portfolio-details.html">Beauty of structure</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio end -->
    </main>
@endsection
