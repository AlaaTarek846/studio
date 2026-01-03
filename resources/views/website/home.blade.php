@extends('layout.website.master')

@section('title', __('website.home'))

@section('content')

    <!-- Banner Carousel -->
    <div class="owl-carousel banner-carousel">
        @foreach ($homeSliders as $index => $homeSlider)
        <div class="banner-carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12 col-12 wow fadeInUp" data-wow-duration="1000ms">
                        <h1 class="title-h1">
                            {!! $homeSlider->title !!}
                        </h1>
                        <p class="description">{!! $homeSlider->description !!}</p>
                        <a href="{{route('about')}}" class="btn btn-primary">{{  __('website.Learn More') }}</a>
                    </div>
                </div>
            </div>
            <span class="carousel-number">.0{{ $index + 1 }}</span>
            <div class="box-banner">
                <div class="thumb-banner">
                    <img class="thumb-banner-img" src="{{ $homeSlider->media?->url }}" alt="Image Banner">
                </div>
            </div>
        </div>
        @endforeach
    </div>

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

    <!-- Services -->
    <section class="section section-services">

        <div class="container">

            <p class="before-title text-center">{{ __('website.Services that we provide') }}</p>
            <h2 class="title-h2 text-center">{{ __('website.Our Acting Workshops') }}</h2>

            @if($services && $services->count() > 0)
                <div class="row-services">
                    @foreach($services as $index => $service)
                        <div class="col-services {{ $index == 1 ? 'col-services-center' : '' }}">
                            @if($service->icon)
                                <img src="{{ $service->icon->url }}" alt="{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}">
                            @else
                                <img src="/website/img/icons/icon-design.svg" alt="{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}">
                            @endif
                            <h3 class="title-h3">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}</h3>
                            <p class="description">{{ app()->getLocale() == 'ar' ? getExcerpt($service->quote_ar) : getExcerpt($service->quote_en) }}</p>
                            <a class="btn-text btn-text-img" href="{{ route('service-details', app()->getLocale() == 'ar' ? $service->slug_ar : $service->slug_en) }}">{{ __('website.Read More') }}</a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center">
                    <p>{{ __('website.No Services Found') }}</p>
                </div>
            @endif
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

    <!-- Blog -->
    <section class="section section-blog">

        <div class="container">

            <p class="before-title text-center">{{ __('website.Develop Your Skills - Read More') }}</p>
            <h2 class="title-h2 text-center">{{ __('website.Latest Acting Articles & News') }}</h2>

            @if($articles->count() > 0)
                <div class="row-blog">
                    @foreach($articles as $index => $article)
                        <div class="col-post {{ ($index + 1) % 3 == 2 ? 'col-post-center' : '' }}">
                            <div class="thumb-blog" style="background-image: url('{{ $article->media ? $article->media->url : '/website/img/blog/post1.png' }}');">
                                <div class="post-date">
                                    @if(app()->getLocale() == 'ar')
                                        {{ \Carbon\Carbon::parse($article->created_at)->locale('ar')->translatedFormat('d M Y') }}
                                    @else
                                        {{ $article->created_at->format('M d, Y') }}
                                    @endif
                                </div>
                            </div>
                            <h3 class="title-h3 line-clamp">
                                <a href="{{ route('blog-details', $article->route_slug ?? $article->id) }}">{{ $article->title }}</a>
                            </h3>
                            <p class="description line-clamp">{{ Str::limit(getExcerpt($article->content), 100) }}</p>
                            <a class="btn-text btn-text-img" href="{{ route('blog-details', $article->route_slug ?? $article->id) }}">{{ __('website.Read More') }}</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </section>

@endsection