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
                                    <ul>
                                        <li>
                                            <a href="{{ route('terms') }}">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('privacy') }}">Privacy & Policy</a>
                                        </li>
                                    </ul>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
