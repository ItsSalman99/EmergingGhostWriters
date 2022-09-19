<!-- footer start -->
<footer>
    <div class="footer-area footer-2 black-thm-bg pt-200">
        <div class="container">
            <div class="footer-main">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-30">
                            <h3 class="title">About Us</h3>
                            <div class="about-text mb-25">
                                <p>
                                    We are an enthusiastic group of writers, managers, editors, and designers dedicated
                                    to turning your ideas into reality.
                                </p>
                            </div>
                            <div class="f-about-social">
                                <h4 class="fa-title">Social Contact</h4>
                                <a href="https://www.facebook.com/emerging.ghostwriter/" target="__blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="http://instagram.com/emergingghostwriters" target="__blank"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget main-link mb-30">
                            <h3 class="title">Main Links</h3>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ route('about-us') }}">About</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('ghostwriting-services') }}">Ghost Writing</a></li>
                                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div style="float: right">
                            <img width="50%" style="border-radius: 50px;"
                                src="{{ asset('assets/frontend/img/logo/newlogo.jpg') }}" alt="">
                            <div class="footer-widget main-link mb-30 mt-4">
                                <div class="footer-link">
                                    <ul class="d-flex justify-content-between">
                                        <li style="margin-right: 10px;">
                                            <a href="{{ route('terms') }}">Terms & Conditions</a>
                                        </li>
                                        <li style="margin-right: 10px;">
                                            <a href="{{ route('privacy') }}">Privacy & Policy</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="d-flex">
                                        <a class="thm-btn thm-btn-2"
                                            style="font-size: 12px; margin-right: 10px; padding: 10px;"
                                            href="javascript:void(Tawk_API.toggle())">Chat With US</a>
                                        <a class="thm-btn border-btn"
                                            style="font-size: 12px; margin-right: 10px; padding: 10px;"
                                            href="{{ route('contact') }}">Get Free Consultation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-text text-center">
                        <p>Copyright By &copy; <a>{{ env('APP_NAME') }}</a></p>

                        <span><a href="mailto:info@emergingghostwriters.com">info@emergingghostwriters.com</a></span>
                        <br>
                        <span><a href="tel:13612731595">+1 361 273 1595</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
