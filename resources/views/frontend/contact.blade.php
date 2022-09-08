@extends('frontend.layout.main')

@section('content')
    <main>
        <!-- page title start -->
        <section class="page-title-area pt-120 pb-80 black-thm-bg">
            <div class="container" style="margin-top: 100px;">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-title mb-30">
                            <p>Welcome To Emerging Ghost Writer</p>
                            <h3>Get In Touch</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title end -->

        <!-- map start -->
        <section class="gmaps-area">
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2925.1074320663256!2d-106.33132238458957!3d42.849464679157094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8760bca480ca44a5%3A0xf5d42b5e551b1978!2s312%20W%202nd%20St%2C%20Casper%2C%20WY%2082601%2C%20USA!5e0!3m2!1sen!2s!4v1662646864908!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- map end -->

        <!-- contact form start -->
        <section class="contact-area contact-2 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-main">
                            <div class="contact-form-wrapper">
                                <div class="section-title">
                                    <span>Estimate For Projects</span>
                                    <h2>Share Work Details</h2>
                                </div>
                                @include('frontend.partials.contact-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact form end -->

        <!-- contact start -->
        <section class="contact pb-90">
            <div class="container">
                <div class="section-title-2 text-center">
                    <span>Contact Us</span>
                    <h2>Catch Us Here</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact text-center mb-30">
                            <div class="c-content">
                                <div class="c-icon mb-30">
                                    <img src="{{ asset('assets/frontend/img/icon/email.png') }}" alt="">
                                </div>
                                <div class="c-text">
                                    <h4>Email Address</h4>
                                    <p>info@emergingghostwriters.com</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact s-contact-2 text-center mb-30">
                            <div class="c-content">
                                <div class="c-icon mb-30">
                                    <img src="{{ asset('assets/frontend/img/icon/phone.png') }}" alt="">
                                </div>
                                <div class="c-text">
                                    <h4>Phone Number</h4>
                                    <p>+1 361 273 1595</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact s-contact-3 text-center mb-30">
                            <div class="c-content">
                                <div class="c-icon mb-30">
                                    <img src="{{ asset('assets/frontend/img/icon/map.png') }}" alt="">
                                </div>
                                <div class="c-text">
                                    <h4>Office Address</h4>
                                    <p>312 W 2nd St, Casper, WY 82601, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact end -->
    </main>
@endsection
