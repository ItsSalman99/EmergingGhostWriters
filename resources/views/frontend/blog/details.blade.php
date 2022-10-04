@extends('frontend.layout.main')

@section('content')
    <main>
        <!-- page title start -->
        <section class="page-title-area pt-120 pb-80 black-thm-bg">
            <div class="container" style="margin-top: 100px;">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-title mb-30">
                            <p>Blog</p>
                            <h3>{{ $post->title }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title end -->

        <!-- news start -->
        <section class="news-single pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-news-wrapper mb-40">
                            <article>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        {{ $post->title }}
                                    </h3>
                                    <ul class="post-meta clearfix">
                                        <li><i class="ti-calendar"></i> {{ date('F j, Y', strtotime($post->created_at)) }}
                                        </li>
                                    </ul>
                                    {!! $post->paragraph !!}

                            </article>
                            <div class="post-footer mt-40 mb-40">
                                <div class="divider"></div>
                                <div>
                                    <span style="font-weight: bold">
                                        Published At: {{ date('F j, Y', strtotime($post->created_at)) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-sidebar">
                            <div class="widget">
                                <h5 class="widget-title">Search Here</h5>
                                <form class="search-widget" action="#">
                                    <input type="search" disabled placeholder="Search your keyword...">
                                    <button type="button"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news end -->
    </main>
@endsection
