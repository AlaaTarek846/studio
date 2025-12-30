@extends('layout.website.master')

@section('title', __('website.contact'))

@section('content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h2 class="title-h2">@lang("website.Articles")</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang("website.Articles")</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="section-banner__box">
            <div class="section-banner__thumb">
                <img class="section-banner__img" src="https://via.placeholder.com/960x290" alt="Image Banner">
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="section section-blog section-blog--full">
        <div class="container">

            <div class="row-blog">
                <div class="col-post">
                    <div class="thumb-blog thumb-blog-1">
                        <div class="post-date">Oct 12, 2019</div>
                    </div>
                    <h3 class="title-h3 line-clamp">
                        <a href="blog-single.html">How to create an amazing design for your site without</a>
                    </h3>
                    <p class="description line-clamp">Have you ever thought about your own site with clean and modern design</p>
                    <a class="btn-text btn-text-img" href="blog-single.html">Read more</a>
                </div>
                <div class="col-post col-post-center">
                    <div class="thumb-blog thumb-blog-2">
                        <div class="post-date">Oct 12, 2019</div>
                    </div>
                    <h3 class="title-h3 line-clamp">
                        <a href="blog-single.html">How to create an amazing design for your site without</a>
                    </h3>
                    <p class="description line-clamp">Have you ever thought about your own site with clean and modern design</p>
                    <a class="btn-text btn-text-img" href="blog-single.html">Read more</a>
                </div>
                <div class="col-post">
                    <div class="thumb-blog thumb-blog-3">
                        <div class="post-date">Oct 12, 2019</div>
                    </div>
                    <h3 class="title-h3 line-clamp">
                        <a href="blog-single.html">How to create an amazing design for your site without</a>
                    </h3>
                    <p class="description line-clamp">Have you ever thought about your own site with clean and modern design company</p>
                    <a class="btn-text btn-text-img" href="blog-single.html">Read more</a>
                </div>
                <div class="col-post">
                    <div class="thumb-blog thumb-blog-1">
                        <div class="post-date">Oct 12, 2019</div>
                    </div>
                    <h3 class="title-h3 line-clamp">
                        <a href="blog-single.html">How to create an amazing design for your site without</a>
                    </h3>
                    <p class="description line-clamp">Have you ever thought about your own site with clean and modern design</p>
                    <a class="btn-text btn-text-img" href="blog-single.html">Read more</a>
                </div>
                <div class="col-post col-post-center">
                    <div class="thumb-blog thumb-blog-2">
                        <div class="post-date">Oct 12, 2019</div>
                    </div>
                    <h3 class="title-h3 line-clamp">
                        <a href="blog-single.html">How to create an amazing design for your site without</a>
                    </h3>
                    <p class="description line-clamp">Have you ever thought about your own site with clean and modern design</p>
                    <a class="btn-text btn-text-img" href="blog-single.html">Read more</a>
                </div>
                <div class="col-post">
                    <div class="thumb-blog thumb-blog-3">
                        <div class="post-date">Oct 12, 2019</div>
                    </div>
                    <h3 class="title-h3 line-clamp">
                        <a href="blog-single.html">How to create an amazing design for your site without</a>
                    </h3>
                    <p class="description line-clamp">Have you ever thought about your own site with clean and modern design company</p>
                    <a class="btn-text btn-text-img" href="blog-single.html">Read more</a>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="">
                <ul class="pagination pagination-lg">
                    <li class="page-item active">
                        <a class="page-link" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
    </section>

@endsection
