@extends('layout.website.master')

@section('title', __('website.Articles'))

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
                <img class="section-banner__img" src="/website/img/header-img.jpg" alt="{{ __('website.Articles') }}">
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="section section-blog section-blog--full">
        <div class="container">

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
                            <p class="description line-clamp">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                            <a class="btn-text btn-text-img" href="{{ route('blog-details', $article->route_slug ?? $article->id) }}">{{ __('website.Read More') }}</a>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($articles->hasPages())
                    <nav aria-label="{{ __('website.Pagination') }}">
                        <ul class="pagination pagination-lg">
                            {{-- Previous Page Link --}}
                            @if ($articles->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link" tabindex="-1">{{ __('website.Prev Post') }}</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $articles->appends(request()->query())->previousPageUrl() }}" rel="prev">{{ __('website.Prev Post') }}</a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @php
                                $currentPage = $articles->currentPage();
                                $lastPage = $articles->lastPage();
                                $startPage = max(1, $currentPage - 2);
                                $endPage = min($lastPage, $currentPage + 2);
                            @endphp

                            @if($startPage > 1)
                                <li class="page-item">
                                    <a class="page-link" href="{{ $articles->appends(request()->query())->url(1) }}">1</a>
                                </li>
                                @if($startPage > 2)
                                    <li class="page-item disabled">
                                        <span class="page-link">...</span>
                                    </li>
                                @endif
                            @endif

                            @for ($page = $startPage; $page <= $endPage; $page++)
                                @if ($page == $currentPage)
                                    <li class="page-item active">
                                        <span class="page-link">{{ $page }}</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $articles->appends(request()->query())->url($page) }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endfor

                            @if($endPage < $lastPage)
                                @if($endPage < $lastPage - 1)
                                    <li class="page-item disabled">
                                        <span class="page-link">...</span>
                                    </li>
                                @endif
                                <li class="page-item">
                                    <a class="page-link" href="{{ $articles->appends(request()->query())->url($lastPage) }}">{{ $lastPage }}</a>
                                </li>
                            @endif

                            {{-- Next Page Link --}}
                            @if ($articles->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $articles->appends(request()->query())->nextPageUrl() }}" rel="next">{{ __('website.Next Post') }}</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">{{ __('website.Next Post') }}</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                @endif
            @else
                <div class="text-center">
                    <p class="description">{{ __('website.No Data Found here') }}</p>
                </div>
            @endif
        </div>
    </section>

@endsection
