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
                            <h3>Book Publishing</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="/">Services</a></li>
                                <li>Book Publishing</li>
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
                            <h3 class="title">Providing the Ideal Book Publishing Process</h3>
                            <div class="text mb-45">
                                <p>
                                    One of the top publishing companies, Emerging Ghostwriter, specializes in all genres,
                                    formats, and publication platforms. Our book publishing agencies have a reputation for
                                    providing top-notch services after helping thousands of fiction writers establish
                                    themselves as published authors. At Emerging Ghostwriter, the most seasoned writing
                                    executives who dominate practically every area may be found. We promise you the quickest
                                    and easiest procedure for self-publishing a book. Our first-rate book publishing
                                    services have aided prospective authors in becoming recognized authors.
                                </p>
                                <p>
                                    Whether it is a fabrication work, an autobiography, or a business publication, we have a
                                    team of knowledgeable book publishing agents experienced with the nuances of many
                                    publishing platforms; this book publishing agency assures great quality and unmatched
                                    service.
                                </p>
                            </div>
                            <div class="td-list-wrapper mb-60">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Experts on Platforms</li>
                                            <li><i class="ti-check"></i>Submission of the draft</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Customized Service</li>
                                            <li><i class="ti-check"></i>Software Rectification</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Connection with Customer</li>
                                            <li><i class="ti-check"></i>Keep control</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text mb-30">
                                <p>
                                    Anyone who hasn't previously explored those pathways will find book publishing to be a
                                    difficult path to travel. After putting your heart and soul into crafting a book, it
                                    shouldn't be acceptable to watch it get neglected or treated badly because the author
                                    was ignorant of the complexities of the publishing industry. Why not let professionals
                                    handle the challenging procedures for you? You may sit back and see your work
                                    materialize at the Emerging Ghostwriter as a gorgeous book with a striking cover and
                                    complementary subject matter. Let's work together to make your goal a reality right now.
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
                    <h2>Book Publishing</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Editing And Formatting</a></h3>
                                <hr>
                                <p>
                                    To proofread your material, you can quickly enlist the assistance of our book editors
                                    and ghostwriters. Our editors ensure that every content is error-free with their keen
                                    attention to detail.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Self-Publishing</a></h3>
                                <hr>
                                <p>
                                    Our self-book publishing service will help your work get the recognition it deserves. We
                                    confirm we take all the necessary steps to assist your achievement.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Promotion Service</a></h3>
                                <hr>
                                <p>
                                    Our staff begins to develop several effective techniques to advertise your work and
                                    attract as many readers as possible once you publish your book to make it a tremendous
                                    success.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a href="team-details.html">Distribution Service</a></h3>
                                <hr>
                                <p>
                                    You will finally get pleasure in what your hard work, perseverance, and dedication have
                                    produced. Your bank account will receive all payments instantly. You continue to receive
                                    your royalties in full.
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
