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
                            <h3>Book Formating</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="/">Services</a></li>
                                <li>Book Formating</li>
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
                            <h3 class="title">What is book formatting?</h3>
                            <div class="text mb-45">
                                <p>
                                    Your success as an author depends on having a book that is well-formatted and designed.
                                    Even though you put a lot of effort into your manuscript, without expert formatting, it
                                    might not receive the attention it merits. You can help your book's readers have the
                                    finest reading experience by using Emerging Ghostwriter. With your input, our team of
                                    qualified book designers will produce a unique layout that complements your book's
                                    subject matter and message. Your book will not be designed using templates by our book
                                    designers. A real-life professional book designer creates each book from scratch. The
                                    best part is that we send you proofs of your designs for approval. We stand by the work
                                    we've done with the book publishing sector.
                                </p>
                                <p>
                                    Reserve your book promotion services immediately to see your
                                    book become a bestseller.
                                </p>
                            </div>
                            <div class="td-list-wrapper mb-60">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Historical fiction</li>
                                            <li><i class="ti-check"></i>Romance</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Flash fiction</li>
                                            <li><i class="ti-check"></i>Fan fiction for anime</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul class="td-list mb-20">
                                            <li><i class="ti-check"></i>Young Adult</li>
                                            <li><i class="ti-check"></i>Mystery</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text mb-30">
                                <p>
                                    We can format a book for publication quickly and accurately, just like book formatting
                                    software, because you're still the same person utilizing the software at the end of the
                                    day. Instead of spending valuable time formatting manuscripts because some publishing
                                    standards require it, you might prefer to use it to express your creativity. If you work
                                    with us for your book formatting requirements, we'll assist you in achieving the degree
                                    of utmost professionalism you need to succeed in the competitive market.
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
                    <h2>Book Formating</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Kindle & eBook formatting</a></h3>
                                <hr>
                                <p>
                                    The main eBooks format that Amazon and other online sellers [such as Apple products,
                                    Kobos, Nooks, and Android devices] utilize is the EPUB file. Your text will appear
                                    attractively and, more significantly, readable on any device's awning, thanks to our
                                    designers' knowledge and experience.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Print book formatting</a></h3>
                                <hr>
                                <p>
                                    When designing a book for print, many elements, such as typeface, font size, margins,
                                    page breaks, headers, line spacing, chapter breaks, etc., must be carefully managed. We
                                    produce a PDF version of your book that is print-ready and meets the standards of the
                                    majority of print-on-demand publishers.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Children's books</a></h3>
                                <hr>
                                <p>
                                    Picture books must adhere to specific rules, unlike novels for older readers and adults.
                                    Authors and artists may unwind knowing that their writing and illustrations—language and
                                    images—are in competent hands.
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single text-center mb-30">
                            <div class="team-text mb-35">
                                <h3><a>Hardcover</a></h3>
                                <hr>
                                <p>
                                    We use hardcover in formatted books and other types of publications. Another traditional
                                    word for hardcover books is trade cloth.
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
