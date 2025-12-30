@extends('layout.website.master')

@section('title',__('website.about'))

@section('content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h2 class="title-h2">{{ __('website.about') }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('website.about') }}</li>
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

    <!-- About Us -->
    <section class="section section-about">
        <div class="container">
            <div class="row justify-content-between align-items-end row-about">
                <div class="col-xl-5 col-md-12 col-sm-12 col-12">
                    <p class="before-title">we are special</p>
                    <h2 class="title-h2">We are Creative And Professional Agency</h2>
                    <p class="after-title">Our digital company has been developing products for 15 years.</p>
                    <p class="text-description">We’ve got a lot of awards for our work and develop applications that became popular in the world. We try not to miss important details in each area.</p>
                    <p class="text-description">Every morning in our company begins with hot coffee and a stand-up. Discussion is an important thing in the development process. Thus new ideas and ingenious solutions are born. Then we get to work with renewed vigor and inspiration. We are never bored.</p>
                    <p class="text-description">We’ve got a lot of awards for our work and develop applications that became popular in the world. We try not to miss important details in each area.</p>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12 col-12 col-photo">
                    <div class="box-about">
                        <div class="box-about-item">
                            <div class="box-about-back">
                                <img class="box-about-back__img" src="https://via.placeholder.com/300x350" alt="Image Back">
                            </div>
                        </div>
                        <div>
                            <div class="box-about-front">
                                <img class="box-about-front__img" src="https://via.placeholder.com/330x437" alt="Image Front">
                            </div>
                        </div>
                        <div class="box-about-text">
                            <p><span>15</span>Years of&nbsp;experience</p>
                        </div>
                    </div>
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
    <section class="section section-feedback">
        <div class="container">

            <p class="before-title">happy clients say</p>
            <h2 class="title-h2">Feedbacks From Our Customers</h2>

            <div class="owl-carousel feedback-carousel">
                <div class="feedback-carousel-item">
                    <div class="box-user">
                        <div class="box-user-item">
                            <div class="box-user__thumb">
                                <img class="box-user__img" src="https://via.placeholder.com/70x70" alt="">
                            </div>
                        </div>
                        <div class="box-user-item">
                            <h3 class="title-h3">Paul Kemplys</h3>
                            <p class="box-user__text">Director of KDO Company</p>
                        </div>
                    </div>
                    <p class="feedback-carousel__text">Great team, good support and development. very pleased with the cooperation. I will definitely contact this company again with new project.</p>
                    <p class="feedback-carousel__date">Oct 12, 2019</p>
                </div>
                <div class="feedback-carousel-item">
                    <div class="box-user">
                        <div class="box-user-item">
                            <div class="box-user__thumb">
                                <img class="box-user__img" src="https://via.placeholder.com/70x70" alt="">
                            </div>
                        </div>
                        <div class="box-user-item">
                            <h3 class="title-h3">Paul Kemplys</h3>
                            <p class="box-user__text">Director of KDO Company</p>
                        </div>
                    </div>
                    <p class="feedback-carousel__text">Great team, good support and development. very pleased with the cooperation. I will definitely contact this company again with new project.</p>
                    <p class="feedback-carousel__date">Oct 12, 2019</p>
                </div>
                <div class="feedback-carousel-item">
                    <div class="box-user">
                        <div class="box-user-item">
                            <div class="box-user__thumb">
                                <img class="box-user__img" src="https://via.placeholder.com/70x70" alt="">
                            </div>
                        </div>
                        <div class="box-user-item">
                            <h3 class="title-h3">Paul Kemplys</h3>
                            <p class="box-user__text">Director of KDO Company</p>
                        </div>
                    </div>
                    <p class="feedback-carousel__text">Great team, good support and development. very pleased with the cooperation. I will definitely contact this company again with new project.</p>
                    <p class="feedback-carousel__date">Oct 12, 2019</p>
                </div>
                <div class="feedback-carousel-item">
                    <div class="box-user">
                        <div class="box-user-item">
                            <div class="box-user__thumb">
                                <img class="box-user__img" src="https://via.placeholder.com/70x70" alt="">
                            </div>
                        </div>
                        <div class="box-user-item">
                            <h3 class="title-h3">Paul Kemplys</h3>
                            <p class="box-user__text">Director of KDO Company</p>
                        </div>
                    </div>
                    <p class="feedback-carousel__text">Great team, good support and development. very pleased with the cooperation. I will definitely contact this company again with new project.</p>
                    <p class="feedback-carousel__date">Oct 12, 2019</p>
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

    <!-- Reasons Why -->
    <section class="section section-reason">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <p class="before-title">our advantages</p>
                    <h2 class="title-h2">Why Choose Us</h2>
                    <p class="after-title">Our digital company has been developing products for 15 years.</p>
                    <p class="description">Every morning in our company begins with hot coffee and a stand-up. Discussion is an important thing in the development process. Thus new ideas and ingenious solutions are born. Then we get to work with renewed vigor and inspiration. We are never bored.</p>
                    <ul class="list-decoration">
                        <li class="list-decoration-item"><i class="zmdi zmdi-plus-square"></i> Integration with back-end systems</li>
                        <li class="list-decoration-item"><i class="zmdi zmdi-plus-square"></i> User authentication-authorization</li>
                        <li class="list-decoration-item"><i class="zmdi zmdi-plus-square"></i> Data services</li>
                    </ul>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <div class="box-reason">
                        <div class="box-reason-item">
                            <img class="box-reason__img" src="/website/img/icons/icon-SEO.svg" alt="Digital">
                            <h3 class="title-h3">Huge Digital Experience</h3>
                        </div>
                        <div class="box-reason-item">
                            <img class="box-reason__img" src="/website/img/icons/content.svg" alt="Marketing">
                            <h3 class="title-h3">Clear Marketing Strategy</h3>
                        </div>
                        <div class="box-reason-item">
                            <img class="box-reason__img" src="/website/img/icons/app.svg" alt="Team">
                            <h3 class="title-h3">Professional & Strong Team</h3>
                        </div>
                        <div class="box-reason-item">
                            <img class="box-reason__img" src="/website/img/icons/branding.svg" alt="Tech">
                            <h3 class="title-h3">Modern Technologies</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection