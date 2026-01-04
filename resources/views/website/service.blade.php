@extends('layout.website.master')

@section('title',__('website.services'))

@section('content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h2 class="title-h2">{{ __('website.services') }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('website.services') }}</li>
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