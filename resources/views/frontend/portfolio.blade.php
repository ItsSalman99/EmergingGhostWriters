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
                                <li><a href="/">Home</a></li>
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
                            <button data-filter=".comic">Comic</button>
                            <button data-filter=".children">Children</button>
                            <button data-filter=".actionadventure">Action & Adventures</button>
                            <button data-filter=".autobiography">Auto Biography</button>
                            <button data-filter=".classics">Classics</button>
                            <button data-filter=".fiction">Fiction</button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 grid-item mb-30 comic">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/comic/Book-1.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 comic">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/comic/Book-2.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 children">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/children/Book-1.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 children">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/children/Book-2.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 grid-item mb-30 actionadventure">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/actionadventure/Book-1.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 actionadventure">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/actionadventure/Book-2.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 autobiography">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/autobiography/Book-1.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 autobiography">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/autobiography/Book-2.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 classics">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/classics/Book-1.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 classics">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/classics/Book-2.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 fiction">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/fiction/Book-1.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item mb-30 fiction">
                        <div class="port-single">
                            <div class="port-thumb text-center p-4">
                                <img src="{{ asset('assets/frontend/img/books/fiction/Book-2.jpg') }}" style="width: 70%!important;" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- portfolio end -->
    </main>
@endsection
