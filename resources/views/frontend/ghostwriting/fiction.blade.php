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
                            <h3>Fiction Services</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="index.html">Services</a></li>
                                <li>Fiction Services</li>
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
                            <h3 class="title">Fiction Ghostwriting Services</h3>
                            <div class="text mb-45">
                                <p>
                                    Our fiction ghostwriters will cover all the incidents and components of a comprehensive
                                    plot and assist you in writing an engaging book, whether you want to polish your
                                    manuscript or imaginatively convey your ideas and imagination into the correct words.
                                </p>
                                <p>
                                    Any genre of a novel, novella, or short story can be considered fiction writing. To
                                    create a fluid and compelling book, the key to making a fiction narrative stand out is
                                    to incorporate all the necessary components of a novel, such as a storyline, characters,
                                    setting, and topic. Our fiction ghostwriters for hire have a talent for smoothly
                                    incorporating the narrative and characters, leaving the reader wanting more.
                                </p>
                            </div>
                            <div class="td-list-wrapper mb-60">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Best Customer Service</li>
                                            <li><i class="ti-check"></i>Your Privacy Is Guaranteed</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Affordable Ghostwriters</li>
                                            <li><i class="ti-check"></i>Drama/romance</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Historical fiction</li>
                                            <li><i class="ti-check"></i>Science fiction</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text mb-30">
                                <p>
                                    Our fiction writers collaborate directly with you, fully grasp your idea, and get
                                    intimately familiar with your story. We offer creative assistance to finish your papers
                                    and successfully incorporate your input. We work closely with you throughout the writing
                                    process and approach your project as our own, keeping your objectives and goals in mind.
                                    No matter the genre, we go above and above to write a compelling story that hooks your
                                    audience.
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
                    <span>Fiction Ghostwriting Services</span>
                    <h2></h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Romance Fiction <br> Ghostwriting Services</a></h3>
                                <hr>
                                <p>romance fiction is the way to go if you're seeking publications that appeal to a broad
                                    readership.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Action-Adventure <br> Ghostwriting Services</a></h3>
                                <hr>
                                <p>This genre can be seen as being on the other extreme from romanticism. While male readers
                                    tend to read more action adventures, female readers prefer the romance category.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Science Fiction <br> Ghostwriting Services</a></h3>
                                <hr>
                                <p>
                                    Science fiction takes place in a cosmos light year away from ours. The books are either
                                    set in the future or occasionally in the past.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Fantasy Novel <br> Ghostwriting Services</a></h3>
                                <hr>
                                <p>
                                    Most widely read books are in the fantasy genre, whether you look at the recent past or
                                    the present. Writing a successful fantasy book is being as descriptive as possible.
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
