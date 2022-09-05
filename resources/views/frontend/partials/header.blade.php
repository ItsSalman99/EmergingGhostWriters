<!-- header start -->
<header class="header-area header-2 clearfix transparent-header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ht-left f-left">
                        <span><a href="mailto:info@webmail.com">info@emergingghostwriters.com</a></span>
                        <span><a href="tel:78498798789">78498798789</a></span>
                    </div>
                    <div class="ht-right f-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="header-bottom">
        <div class="container">
            <div class="menu-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                        <div class="menu-left">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ route('about-us') }}">About</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('ghostwriting-services') }}">GhostWriting</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-5 col-8">

                        <a href="/">
                            <img width="80%" src="{{ asset('assets/frontend/img/logo/newlogo.gif') }}"
                                alt=""></a>

                    </div>
                    <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <div class="menu-right">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-btn">
                                <a class="thm-btn thm-btn-3" href="{{ route('contact') }}">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-4 d-block d-lg-none text-right">
                        <div class="icon hamburger-menu">
                            <a href="javascript:void(0);" class="">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
