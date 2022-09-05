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
                            <h3>Book Writing</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="/">Services</a></li>
                                <li>Book Writing</li>
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
                            <h3 class="title">Have a Story in Mind? Need help in book writing?</h3>
                            <div class="text mb-45">
                                <p>
                                    If so, join us in finding your voice. Let us put your ideas into words and weave them
                                    into a compelling book that will hold readers' attention until the very last page is
                                    turned. We have skilled writers who use these narrative structures and tactics to make a
                                    biography sound heroic. Our professionals are available for free consultations and can
                                    guide you through the procedure.
                                </p>
                                <p>
                                    Get your stories written by our skilled ghostwriters, who will ensure that you receive
                                    exceptional copies inscribed with their imagination.
                                </p>
                            </div>
                            <div class="td-list-wrapper mb-60">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Proper planning & guidance</li>
                                            <li><i class="ti-check"></i>Inclusive research, editing and reviewing</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Drafting of a detailed outline</li>
                                            <li><i class="ti-check"></i>In-depth discussions throughout the process</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Final product/service refined to perfection</li>
                                            <li><i class="ti-check"></i>24/7 Free Consultation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text mb-30">
                                <p>
                                    A novel can be written roughly 475 hours; did you know that? A book's creation is no
                                    easy task. Even someone with years of experience could take a long time to finish a
                                    book. Did you realize that great, well-known authors would need to work with a
                                    ghostwriter to meet the demands of the industry and their strict deadlines? You may
                                    never find out which passages of your favorite novels weren't written by the authors. To
                                    avoid giving the impression that the book was written by someone else, a ghostwriter
                                    specializes in capturing the author's voice, language, and speed as if they were two
                                    peas in a pod. Therefore, even if a well-known specialist needs assistance from a
                                    ghostwriter, someone who is not a writer by trade will undoubtedly require expert
                                    assistance.
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
                    <h2>Book Writing</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Various Specialized Genres</a></h3>
                                <hr>
                                <p>
                                    Regarding book writing, our authors are professionals in various genres, so all you have
                                    to do is choose your genre and let us know; we'll do the legwork.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Client <br> Communication</a></h3>
                                <hr>
                                <p>
                                    We constantly check to see if our client is happy and heard. You can always contact one of our writers. If you need benefit, please get in touch with us.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Personalized <br> Service</a></h3>
                                <hr>
                                <p>
                                    Because our writers will customize the content to your specifications, you will receive your work exactly as you want.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Book <br> Marketing</a></h3>
                                <hr>
                                <p>
                                    We can even help you advertise your book after we've finished it and find deserving readers for it.
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
