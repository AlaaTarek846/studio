@extends('layout.website.master')

@section('title', $project->title)

@section('content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h2 class="title-h2">{{ $project->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('projects') }}">{{ __('website.Acting workshops') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="section-banner__box">
            <div class="section-banner__thumb">
                <img class="section-banner__img" src="{{ '/website/img/header-img.jpg' }}" alt="{{ $project->title }}">
            </div>
        </div>
    </section>

    <!-- Portfolio Description -->

    <section class="section section-portfolio-work">
        <div class="container">
            <div class="row row-portfolio">
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <!--Carousel Wrapper-->
                    @if($project->sliderImages && $project->sliderImages->count() > 0)
                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails carousel-portfolio" data-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                @foreach($project->sliderImages as $index => $sliderImage)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img class="d-block w-100" src="{{ $sliderImage->url }}" alt="{{ $project->title }}">
                                    </div>
                                @endforeach
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                @if(app()->getLocale() == 'en')
                                    <i class="zmdi zmdi-arrow-left"></i>
                                @else
                                    <i class="zmdi zmdi-arrow-right"></i>
                                @endif
                                <span class="sr-only">{{ __('website.Previous') }}</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                @if(app()->getLocale() == 'en')
                                    <i class="zmdi zmdi-arrow-right"></i>
                                @else
                                    <i class="zmdi zmdi-arrow-left"></i>
                                @endif
                                <span class="sr-only">{{ __('website.Next') }}</span>
                            </a>
                            <!--/.Controls-->
                            <ol class="carousel-indicators carousel-indicators-portfolio">
                                @foreach($project->sliderImages as $index => $sliderImage)
                                    <li data-target="#carousel-thumb" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ $sliderImage->url }}" alt="" width="100">
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    @else
                        <div class="carousel slide carousel-fade carousel-thumbnails carousel-portfolio">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ $project->thumbnail ? $project->thumbnail->url : '/website/img/service.jpg' }}" alt="{{ $project->title }}">
                                </div>
                            </div>
                        </div>
                    @endif
                    <!--/.Carousel Wrapper-->
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 sidebar">
                    <div class="sidebar-item sidebar--portfolio">
                        <h3 class="title-h3">{{ $project->title }}</h3>
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            </div>
            <div class="box-preview mb-0">
                @if($previousProject)
                    <div class="previous">
                        @if(app()->getLocale() == 'en')
                            <i class="zmdi zmdi-arrow-left"></i>
                        @else
                            <i class="zmdi zmdi-arrow-right"></i>
                        @endif
                        <a href="{{ route('project-details', $previousProject->slug) }}" class="box-preview-link">
                            <span>{{ __('website.Previous post') }}</span>
                            {{ $previousProject->title }}
                        </a>
                    </div>
                @endif
                @if($nextProject)
                    <div class="next">
                        <a href="{{ route('project-details', $nextProject->slug) }}" class="box-preview-link">
                            <span>{{ __('website.Next post') }}</span>
                            {{ $nextProject->title }}
                        </a>
                        @if(app()->getLocale() == 'en')
                            <i class="zmdi zmdi-arrow-right"></i>
                        @else
                            <i class="zmdi zmdi-arrow-left"></i>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Works -->

    <section class="section section-services">
        <div class="container">

            <p class="before-title text-center">{{ __('website.view more cases') }}</p>
            <h2 class="title-h2 text-center">{{ __('website.Related Workshops') }}</h2>
            <p class="text-center after-title">{{ __('website.Related Workshops Description') }}</p>

            @if($relatedProjects && $relatedProjects->count() > 0)
                <div class="box-case box-case--static">
                    <div class="row row-cols-3 row-case">
                        @foreach($relatedProjects as $index => $relatedProject)
                            <div class="col col-case">
                                <div class="case-item case-{{ $index + 1 }}" style="background-image: url('{{ $relatedProject->thumbnail ? $relatedProject->thumbnail->url : '/website/img/service.jpg' }}'); background-size: cover; background-position: center; min-height: 300px;">
                                    <div class="team-info">
                                        <p class="team-name"><a href="{{ route('project-details', $relatedProject->slug) }}" title="{{ $relatedProject->title }}">{{ $relatedProject->title }}</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection