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
                        <h3>Non-Fiction GhostWriting Service</h3>
                        <a href="{{ url()->previous() }}" class="bg-white" style="border-radius: 10px; padding: 5px">
                            <i class="ti-arrow-left text-dark"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumb-list mb-30">
                        <ul>
                            <li><a href="{{ route('ghostwriting-services') }}">Services</a></li>
                            <li>Non-Fiction GhostWriting</li>
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
                        <h3 class="title">About Non-Fiction GhostWriting Service</h3>
                        <div class="text mb-45">
                            <p>
                                Like excellent research, nonfiction writing is based on true accounts of actual people,
                                places, and events. The Emerging Ghostwriter staff is led by bright individuals who are
                                authorities in their esteemed field. Because our authors are experts in the area, our
                                clients would always receive high-end nonfiction stories.
                            </p>
                            <p>
                                Their expertise helps you while writing a historical fiction book, a memoir, a how-to
                                manual, or an autobiography.We listen to our client's ideas and assist them in creating
                                a masterpiece. Our ghostwriters will expertly handle each stage of the process.
                            </p>
                        </div>
                        <div class="td-list-wrapper mb-60">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Proficiency in English writing skills</li>
                                        <li><i class="ti-check"></i>Up-to-date and well-researched content</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Aware of referencing and ghostwriting</li>
                                        <li><i class="ti-check"></i>Deadline specific</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="td-list mb-20">
                                        <li><i class="ti-check"></i>Competitive Advantage</li>
                                        <li><i class="ti-check"></i>Award-Winning nonfiction writers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="text mb-30">
                            <p>
                                For more than years, we have offered nonfiction copywriting services. As a result, our
                                writers are seasoned professionals. We fully admit that our ghostwriting services are
                                remarkable and confidently make this claim. Thanks to our nonfiction ghostwriter, you
                                won't need to stress about it. Your core idea is all that our ghostwriters need. We'll
                                make it into a book that can be published. Thanks to qualities like active deep
                                listening, note-taking, and an exceptional writing style, you will feel at ease working
                                with us.
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
                <h2>Non-Fiction Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Premium Storytelling</a></h3>
                            <hr>
                            <p>
                                Our skilled nonfiction ghostwriters are professional at keeping readers engrossed in the
                                book. We are experts in crafting non-fictional content that engages readers emotionally
                                and introduces them to the characters and their inspiring tales.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Sub-Genres</a></h3>
                            <hr>
                            <p>
                                A group of knowledgeable nonfiction ghostwriters with experience in various subgenres
                                may be found at Emerging Ghostwriter.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Compelling Tone</a></h3>
                            <hr>
                            <p>
                                Do you have a brilliant concept for a narrative but are stuck on how to write it? You
                                are in the ideal location. The nonfiction authors at Emerging Ghostwriter have received
                                training in telling stories through persuasive writing.
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-single text-center mb-30">
                        <div class="team-text mb-35">
                            <h3><a href="team-details.html">Promising Outcomes</a></h3>
                            <hr>
                            <p>
                                At Emerging Ghostwriter, you can employ a qualified ghostwriter. To ensure the quickest
                                turnaround time without compromising the caliber of the information, we are only
                                concerned with the elements.
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