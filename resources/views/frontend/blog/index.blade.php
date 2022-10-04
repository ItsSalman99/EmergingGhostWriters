@extends('frontend.layout.main')

@section('content')
    <main>
        <!-- page title start -->
        <section class="page-title-area pt-120 pb-80 black-thm-bg"
            style="background-image: url('assets/frontend/img/blog-bg.jpg'); background-repeat: no-repeat; background-size: cover;">
            <div class="container" style="margin-top: 100px;">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-title mb-30">
                            <p>Welcome to our blog</p>
                            <h3>Blog</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="breadcrumb-list mb-30">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Blog</li>
                            </ul>
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
                        @forelse ($posts as $post)
                            <div class="news-wrapper mb-40">
                                <article>
                                    <div class="news-item mb-40">
                                        <div class="post-thumb">
                                            <a href="{{ route('backend.blogs.details', ['id' => $post->id]) }}">
                                                <img src="{{ asset($post->img) }}"
                                                    alt="blog-image">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <div class="post-text">
                                                <h3 class="post-title">
                                                    <a href="{{ route('backend.blogs.details', ['id'=>$post->id]) }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </h3>
                                                <p>
                                                    {{ $post->summary }}
                                                </p>
                                            </div>
                                            <ul class="post-meta clearfix">
                                                <li><i
                                                        class="ti-calendar"></i>{{ date('F j, Y', strtotime($post->created_at)) }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @empty
                            <div class="bg-white" style="padding: 20px; border-radius: 20px;">
                                <h3>No Posts Found!</h3>
                            </div>
                        @endforelse
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
