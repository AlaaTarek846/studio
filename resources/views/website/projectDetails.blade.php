@extends('layout.website.master')

@section('title','Modern Minimal Concept for Coolbabka Brand')

@section('content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h2 class="title-h2">Modern Minimal Concept for Coolbabka Brand</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('projects') }}">{{ __('website.Acting workshops') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modern Minimal Concept for Coolbabka Brand</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="section-banner__box">
            <div class="section-banner__thumb">
                <img class="section-banner__img" src="/website/img/header-img.jpg" alt="Image Banner">
            </div>
        </div>
    </section>

    <!-- Portfolio Description -->

    <section class="section section-portfolio-work">
        <div class="container">
            <div class="row row-portfolio">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!--Carousel Wrapper-->
                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails carousel-portfolio" data-ride="carousel">
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://via.placeholder.com/730x550" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://via.placeholder.com/166x123" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://via.placeholder.com/166x123" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://via.placeholder.com/166x123" alt="Four slide">
                            </div>
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                            <i class="zmdi zmdi-arrow-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                            <i class="zmdi zmdi-arrow-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                        <ol class="carousel-indicators carousel-indicators-portfolio">
                            <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                                <img src="https://via.placeholder.com/730x550" alt="" width="100">
                            </li>
                            <li data-target="#carousel-thumb" data-slide-to="1">
                                <img src="https://via.placeholder.com/166x123" alt="" width="100">
                            </li>
                            <li data-target="#carousel-thumb" data-slide-to="2">
                                <img src="https://via.placeholder.com/166x123" alt="" width="100">
                            </li>
                            <li data-target="#carousel-thumb" data-slide-to="3">
                                <img src="https://via.placeholder.com/166x123" alt="" width="100">
                            </li>
                        </ol>
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 sidebar">
                    <div class="sidebar-item sidebar--portfolio">
                        <h3 class="title-h3">Coolbabka Brand</h3>
                        <p>We worked on Coolbabka Brand for a long time and we managed to achieve the desired result in less than a month. Our entire team was 100% involved in the process and we can safely declare that we are proud of the achieved result.</p>
                        <ul class="portfolio-detail">
                            <li class="portfolio-detail-item"><strong>Client:</strong>Katerine Vie</li>
                            <li class="portfolio-detail-item"><strong>Start date:</strong>Oct 05, 2019</li>
                            <li class="portfolio-detail-item"><strong>Finish date:</strong>Oct 28, 2019</li>
                            <li class="portfolio-detail-item"><strong>Category:</strong>Branding</li>
                        </ul>
                    </div>
                    <div class="sidebar-item">
                        <h3 class="title-h3">Follow</h3>
                        <ul class="portfolio-social">
                            <li class="portfolio-social-item"><a href="#" target="_blank" class="portfolio-social-link"><i class="zmdi zmdi-facebook"></i><span>Facebook</span></a></li>
                            <li class="portfolio-social-item"><a href="#" target="_blank" class="portfolio-social-link"><i class="zmdi zmdi-linkedin"></i><span>Linkedin</span></a></li>
                            <li class="portfolio-social-item"><a href="#" target="_blank" class="portfolio-social-link"><i class="zmdi zmdi-behance"></i><span>Behance</span></a></li>
                            <li class="portfolio-social-item"><a href="#" target="_blank" class="portfolio-social-link"><i class="zmdi zmdi-twitter"></i><span>Twitter</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-preview mb-0">
                <div class="previous">
                    <i class="zmdi zmdi-arrow-left"></i>
                    <a href="" class="box-preview-link">
                        <span>Previous post</span>
                        Site Development for IT Company
                    </a>
                </div>
                <div class="next">
                    <a href="" class="box-preview-link">
                        <span>Previous post</span>
                        SEO Optimization for Bundus
                    </a>
                    <i class="zmdi zmdi-arrow-right"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Works -->

    <section class="section section-services">
        <div class="container">

            <p class="before-title text-center">view more cases</p>
            <h2 class="title-h2 text-center">Related Works</h2>
            <p class="text-center after-title">We have many more similar and successful cases. Take a look and you can truly appreciate the level of our skills.</p>

            <div class="box-case box-case--static">
                <div class="row row-cols-3 row-case">
                    <div class="col col-case">
                        <div class="case-item case-1">
                            <div class="team-info">
                                <p class="team-name"><a href="#" title="">Clean design concept</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-case">
                        <div class="case-item case-2">
                            <div class="team-info">
                                <p class="team-name"><a href="#" title="">Clean design concept</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-case">
                        <div class="case-item case-3">
                            <div class="team-info">
                                <p class="team-name"><a href="#" title="">Clean design concept</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection