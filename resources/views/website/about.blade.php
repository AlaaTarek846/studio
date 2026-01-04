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
                <img class="section-banner__img" src="/website/img/header-img.jpg" alt="Image Banner">
            </div>
        </div>
    </section>

    <!-- About Us -->
    @if($oneAbout)
    <section class="section section-about">
        <div class="container">
            <div class="row justify-content-between align-items-end row-about">
                <div class="col-xl-5 col-md-12 col-sm-12 col-12">
                    <p class="before-title">{{ $oneAbout->title_color }}</p>
                    <h2 class="title-h2">{{ $oneAbout->title }}</h2>
                    <p class="text-description">{{ $oneAbout->description }}</p>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12 col-12 col-photo">
                    <div class="box-about">
                        @if($oneAbout->secondPhoto)
                        <div class="box-about-item">
                            <div class="box-about-back">
                                <img class="box-about-back__img" src="{{ $oneAbout->secondPhoto->url }}" alt="{{ $oneAbout->title }}">
                            </div>
                        </div>
                        @endif
                        @if($oneAbout->firstPhoto)
                        <div>
                            <div class="box-about-front">
                                <img class="box-about-front__img" src="{{ $oneAbout->firstPhoto->url }}" alt="{{ $oneAbout->title }}">
                            </div>
                        </div>
                        @endif
                        <div class="box-about-text">
                            <p><span>{{ $oneAbout->years_of_experience }}</span>{{ __('website.Years of experience') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Count -->
    @if($oneAbout && $oneAbout->details && $oneAbout->details->count() > 0)
    <section class="section section-count">
        <div class="container text-center box-count">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-count">
                @foreach($oneAbout->details as $detail)
                <div class="col mb-2">
                    <p class="title-count counter">{{ $detail->count }}</p>
                    <p class="text-count">{{ $detail->title }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Get a Free -->
    <section class="section section-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="before-title">{{ __('website.Come join us') }}</p>
                    <h2 class="title-h2">{{ __('website.Join Our Acting Workshops') }}</h2>
                    <a href="{{route('contact')}}" class="btn btn-primary">{{ __('website.Get started') }}</a>
                </div>
            </div>
        </div>
        <div class="box-action">
            <div class="thumb-action">
                <img class="thumb-action-img" src="/website/img/cta-bg.png" alt="Image Newsletter">
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    @if($testimonials && $testimonials->count() > 0)
    <section class="section section-feedback">
        <div class="container">
            <p class="before-title">{{ __('website.happy clients say') }}</p>
            <h2 class="title-h2">{{ __('website.Feedbacks From Our Students') }}</h2>

            <div class="owl-carousel feedback-carousel">
                @foreach($testimonials as $testimonial)
                <div class="feedback-carousel-item">
                    <div class="box-user">
                        <div class="box-user-item">
                            @if($testimonial->media)
                            <div class="box-user__thumb">
                                <img class="box-user__img" src="{{ $testimonial->media->url }}" alt="{{ $testimonial->name }}">
                            </div>
                            @endif
                        </div>
                        <div class="box-user-item">
                            <h3 class="title-h3">{{ $testimonial->name }}</h3>
                            @if($testimonial->job)
                            <p class="box-user__text">{{ $testimonial->job }}</p>
                            @endif
                        </div>
                    </div>
                    @if($testimonial->description)
                    <p class="feedback-carousel__text">{{ $testimonial->description }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Newsletter -->
    @include('components.home.newsletter')

    <!-- Team Carousel -->
    @if($teams && $teams->count() > 0)
    <section class="section section-team" style="background: url();">
        <div class="container">
            <p class="before-title text-center">{{ __('website.our team') }}</p>
            <h2 class="title-h2 text-center">{{ __('website.Our Acting Coaches') }}</h2>
            <p class="text-center after-title">{{ __('website.The best professionals will guide you') }}<br>{{ __('website.We can safely say that success is guaranteed') }}</p>
        </div>
        <div class="owl-carousel team-carousel text-center">
            @foreach($teams as $index => $team)
            <div class="team-carousel-item team-carousel-{{ $index + 1 }}" style="background-image: url('{{ $team->media?->url }}');">
                <div class="team-info">
                    <p class="team-name">{{ $team->name }}</p>
                    @if($team->job)
                    <p class="team-job">{{ $team->job }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    <!-- Clients -->

    <section class="section section-client">
        <div class="container">

            <p class="before-title text-center">{{ __('website.they trust us') }}</p>
            <h2 class="title-h2 text-center">{{ __('website.Our Clients') }}</h2>

            @if($clients && $clients->count() > 0)
                <div class="owl-carousel client-carousel text-center">
                    @foreach($clients as $client)
                        <div class="client-carousel-item">
                            @if($client->media)
                                @if($client->url)
                                    <a href="{{ $client->url }}" target="_blank" rel="noopener noreferrer">
                                        <img src="{{ $client->media->url }}" alt="{{ $client->name_ar ?? $client->name_en ?? 'Client' }}">
                                    </a>
                                @else
                                    <img src="{{ $client->media->url }}" alt="{{ $client->name_ar ?? $client->name_en ?? 'Client' }}">
                                @endif
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center">
                    <p>{{ __('website.No Clients Found') }}</p>
                </div>
            @endif
        </div>
    </section>

@endsection

@push('script')
@endpush

