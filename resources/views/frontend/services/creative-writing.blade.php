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
                        <h3>Creative Writing</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li>Creative Writing</li>
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
                        <h3 class="title">Creative Writing Services</h3>
                        <div class="text mb-45">
                            <p>
                                Producing interesting content is essential in today's cutthroat business environment to
                                wow your audience. However, many people struggle to make an impression on their viewers'
                                brains through their published information. There are numerous causes for it. For
                                instance, many people struggle to focus on multiple tasks and cannot finish them.
                                Similar to this, some people lack the skills necessary to create engaging material and
                                are unable to do so without making grammatical mistakes.
                            </p>
                            <p>
                                However, because we are in the
                                town now, there is no need to worry.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Plagiarism-free guarantee</li>
                                        <li><i class="ti-check"></i>Experience</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Confidentiality & security</li>
                                        <li><i class="ti-check"></i>Quality & reliability</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Money-back Guaranteed</li>
                                        <li><i class="ti-check"></i>No hidden charges</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                Looking for a local business that offers trustworthy creative writing services? Would
                                you like to hire qualified, imaginative web copywriters for your website? You are on the
                                appropriate platform if "yes" to the questions above. We offer the most affordable
                                creative writing services available. Our talented writers will completely instill your
                                awe. Wish to learn more? Subsequently, let's look at what we can do for you. Our gifted
                                writers can create interesting content that will undoubtedly motivate your readers. Hire
                                creative writers from our organization if you require original content for your website
                                or blog. We stand out in this respect from many other businesses in the area.
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
                <h2>Creative Writing</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Diverse Specialized Genres</a></h3>
                            <hr>
                            <p>
                                The Emerging Ghostwriter's writing staff has years of experience giving professional
                                ghostwriting services. We have contributed our knowledge of specialist writing across a
                                range of genres.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Customized Service</a></h3>
                            <hr>
                            <p>
                                When a client contacts us regarding a specific category or content genre, we assign a
                                specialist writer who is competent in that industry.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Customer Communication</a></h3>
                            <hr>
                            <p>
                                The Emerging Ghostwriter's creative team ensures that tasks are completed on time and to
                                the client's satisfaction. As a result, we constantly stay in touch with customers to
                                ensure that our services meet their demands.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a>Book Marketing</a></h3>
                            <hr>
                            <p>
                                Even if choosing a ghostwriter is required, we go above and beyond by not only providing
                                top-notch writing services but also actively promoting the book.
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