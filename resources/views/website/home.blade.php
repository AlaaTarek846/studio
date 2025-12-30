@extends('layout.website.master')

@section('title', __('website.home'))

@section('content')

    <!-- Banner Carousel -->
    <div class="owl-carousel banner-carousel">
        <div class="banner-carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12 col-12 wow fadeInUp" data-wow-duration="1000ms">
                        <h1 class="title-h1">
                            Creative Web Design Studio
                        </h1>
                        <p class="description">We create new technologies for your business thanks to our wonderful team of professionals. Together we can reach new heights.</p>
                        <a href="about.html" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <span class="carousel-number">.01</span>
            <div class="box-banner">
                <div class="thumb-banner">
                    <img class="thumb-banner-img" src="https://via.placeholder.com/1070x880" alt="Image Banner">
                </div>
            </div>
        </div>
        <div class="banner-carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                        <h1 class="title-h1">
                            Creative Web Design Studio
                        </h1>
                        <p class="description">We create new technologies for your business thanks to our wonderful team of professionals. Together we can reach new heights.</p>
                        <a href="" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <span class="carousel-number">.02</span>
            <div class="box-banner">
                <div class="thumb-banner">
                    <img class="thumb-banner-img" src="https://via.placeholder.com/1070x880" alt="Image Banner">
                </div>
            </div>
        </div>
        <div class="banner-carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                        <h1 class="title-h1">
                            Creative Web Design Studio
                        </h1>
                        <p class="description">We create new technologies for your business thanks to our wonderful team of professionals. Together we can reach new heights.</p>
                        <a href="" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <span class="carousel-number">.03</span>
            <div class="box-banner">
                <div class="thumb-banner">
                    <img class="thumb-banner-img" src="https://via.placeholder.com/1070x880" alt="Image Banner">
                </div>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <section class="section section-about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                    <div class="img-about">
                        <div class="img-about-item">
                            <div class="thumb-back">
                                <img class="thumb-back-img" src="https://via.placeholder.com/300x350" alt="Image Back">
                            </div>
                        </div>
                        <div>
                            <div class="thumb-front wow fadeInUp" data-wow-duration="1000ms">
                                <img class="thumb-front-img" src="https://via.placeholder.com/330x437" alt="Image Front">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-5 col-md-5 col-sm-12 col-12">
                    <p class="before-title scnd">about us</p>
                    <h2 class="title-h2">We are the Creative Digital Team</h2>
                    <p class="after-title">Our digital company has been developing products for 15 years.</p>
                    <p class="description">We’ve got a lot of awards for our work and develop applications that became popular in the world. We try not to miss important details in each area.</p>
                    <button type="button" class="btn-play" data-toggle="modal" data-target="#videoModal">Watch video</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Count -->
    <section class="section section-count">
        <div class="container text-center box-count">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-count">
                <div class="col mb-2">
                    <p class="title-count counter">125</p>
                    <p class="text-count">Happy Clients</p>
                </div>
                <div class="col mb-2">
                    <p class="title-count counter">250</p>
                    <p class="text-count">Successful Projects</p>
                </div>
                <div class="col mb-2">
                    <p class="title-count counter">40</p>
                    <p class="text-count">Team Members</p>
                </div>
                <div class="col mb-2">
                    <p class="title-count counter">20</p>
                    <p class="text-count">Awards Winning</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Get a Free -->
    <section class="section section-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="before-title">Come on! we don’t bite :)</p>
                    <h2 class="title-h2">Get a Free Consultation</h2>
                    <a href="contact.html" class="btn btn-primary">Get started!</a>
                </div>
            </div>
        </div>
        <div class="box-action">
            <div class="thumb-action">
                <img class="thumb-action-img" src="https://via.placeholder.com/1000x1121" alt="Image Newsletter">
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section section-services">
        <div class="container">

            <p class="before-title text-center">Services that we provide</p>
            <h2 class="title-h2 text-center">We Develop Digital Products</h2>

            <div class="row-services">
                <div class="col-services">
                    <img src="/img/icons/icon-design.svg" alt="">
                    <h3 class="title-h3">UI/UX Design</h3>
                    <p class="description">Everything starts with the beautiful. And professional design is of great importance in this matter.</p>
                    <a class="btn-text btn-text-img" href="services-detail.html">Read more</a>
                </div>
                <div class="col-services col-services-center">
                    <img src="/img/icons/icon-web-development.svg" alt="">
                    <h3 class="title-h3">Web Development</h3>
                    <p class="description">Our developers are carefully considering how your product should work while maintaining its flexibility.</p>
                    <a class="btn-text btn-text-img" href="services-detail.html">Read more</a>
                </div>
                <div class="col-services">
                    <img src="/img/icons/icon-SEO.svg" alt="">
                    <h3 class="title-h3">SEO Optimization</h3>
                    <p class="description">Promotion of your product is an important step in making money and constant popularity among consumers.</p>
                    <a class="btn-text btn-text-img" href="services-detail.html">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Cases -->
    <section class="section section-case">
        <div class="container">
            <div class="row justify-content-end portfolio">
                <div class="col-md-12 col-xl-4">
                    <p class="before-title">recent projects</p>
                    <h2 class="title-h2">Check Our Latest&nbsp;Cases</h2>
                    <p class="description">We always try to implement our creative ideas at the highest level. You can see it by looking at our portfolio.</p>
                    <a href="portfolio.html" class="btn btn-primary">View all</a>
                </div>
            </div>
        </div>
        <div class="box-case">
            <div class="row row-cols-3 row-case">
                <div class="col col-case">
                    <div class="case-item case-1">
                        <div class="team-info">
                            <p class="team-name"><a href="portfolio-details.html" title="">Clean design concept</a></p>
                        </div>
                    </div>
                </div>
                <div class="col col-case">
                    <div class="case-item case-2">
                        <div class="team-info">
                            <p class="team-name"><a href="portfolio-details.html" title="">Clean design concept</a></p>
                        </div>
                    </div>
                </div>
                <div class="col col-case">
                    <div class="case-item case-3">
                        <div class="team-info">
                            <p class="team-name"><a href="portfolio-details.html" title="">Clean design concept</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    @include('components.home.newsletter')

    <!-- Team Carousel -->
    <section class="section section-team">
        <div class="container">
            <p class="before-title text-center">our team</p>
            <h2 class="title-h2 text-center">Experts In Their Field</h2>
            <p class="text-center after-title">The best professionals will work on your product.<br>We can safely say that success is guaranteed to your business.</p>
        </div>
        <div class="owl-carousel team-carousel text-center">
            <div class="team-carousel-item team-carousel-1">
                <div class="team-info">
                    <p class="team-name">Aleksander Firson</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-2">
                <div class="team-info">
                    <p class="team-name">Alex Freeman</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-3">
                <div class="team-info">
                    <p class="team-name">Jonh Doe</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-4">
                <div class="team-info">
                    <p class="team-name">Sam Beffort</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-5">
                <div class="team-info">
                    <p class="team-name">Aleksander Firson</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-6">

                <div class="team-info">
                    <p class="team-name">Aleksander Firson</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-7">
                <div class="team-info">
                    <p class="team-name">Alex Freeman</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-8">
                <div class="team-info">
                    <p class="team-name">Jonh Doe</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-9">
                <div class="team-info">
                    <p class="team-name">Sam Beffort</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-10">
                <div class="team-info">
                    <p class="team-name">Aleksander Firson</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-11">

                <div class="team-info">
                    <p class="team-name">Aleksander Firson</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-12">
                <div class="team-info">
                    <p class="team-name">Alex Freeman</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-13">
                <div class="team-info">
                    <p class="team-name">Jonh Doe</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-14">
                <div class="team-info">
                    <p class="team-name">Sam Beffort</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="team-carousel-item team-carousel-15">
                <div class="team-info">
                    <p class="team-name">Aleksander Firson</p>
                    <ul class="team-social">
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        </li>
                        <li class="team-social-item">
                            <a href="" class="team-social-link" target="_blank"><i class="zmdi zmdi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="section section-blog">

        <div class="container">

            <p class="before-title text-center">develop yourself - read more</p>
            <h2 class="title-h2 text-center">Resent News And Articles</h2>

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
            </div>
        </div>

    </section>

@endsection