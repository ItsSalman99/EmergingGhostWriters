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
                            <h3>Book Cover Design</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="/">Services</a></li>
                                <li>Book Cover Design</li>
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
                            <h3 class="title">Book Cover Design</h3>
                            <div class="text mb-45">
                                <p>
                                    Writing a book is difficult. By the time you finish the final draft, you will have
                                    devoted many hours to it, whether fiction, non-fiction, poetry, or the ramblings of an
                                    insane mind. It deserves to be covered and formatted properly because it is a piece of
                                    art. Regardless of what your grandma may have told you, people always judge books by
                                    their covers.
                                </p>
                                <p>
                                    We at Emerging Ghostwriter are in the ideal position to create the finest
                                    possible first impression of your book - its cover - having spent the last years
                                    amassing an all-star team of award-winning book cover designers.
                                </p>
                            </div>
                            <div class="td-list-wrapper mb-60">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Attention-grabbing</li>
                                            <li><i class="ti-check"></i>Created for the target audience in mind</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Attracts businesses, and customers</li>
                                            <li><i class="ti-check"></i>Promotes your book</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Drive traffic</li>
                                            <li><i class="ti-check"></i>Reach a wider audience</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text mb-30">
                                <p>
                                    Emerging Ghostwriter cover also comes with a 100 percent satisfaction guarantee. If
                                    you're unhappy with any initial draughts, you won't be charged anything, and we cannot
                                    make it right. Although we resisted the impulse also to give away a knife set, the idea
                                    had crossed our minds.
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
                    <h2>Book Cover Design</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Custom E-Book Cover Design</a></h3>
                                <hr>
                                <p>
                                    In our opinion, the front and back of the book cover catch readers' attention initially.
                                    So, following your instructions, we design the front and back at the Emerging
                                    Ghostwriter.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Print Book Cover Design</a></h3>
                                <hr>
                                <p>
                                    We make sure the information in your paperback is consistent with the print book cover
                                    design. Our designers are proficient in this field.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Illustrated Book Cover Design</a></h3>
                                <hr>
                                <p>
                                    The theme of your book is most effectively illustrated on the book cover. Our designers
                                    and illustrators produce front and back covers that are ideal for your story.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Photographic Book Cover Design</a></h3>
                                <hr>
                                <p>
                                    The picture on the cover of our book complements the narrative inside. We know how to
                                    pique curiosity with an attractive book cover.
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
