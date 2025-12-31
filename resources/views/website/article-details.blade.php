@extends('layout.website.master')

@php
    $locale = app()->getLocale();

    // Get bilingual SEO data
    $articleSeoTitle = $locale === 'ar'
        ? ($article->seo_title_ar ?: $article->seo_title ?: $article->title_ar)
        : ($article->seo_title_en ?: $article->seo_title ?: $article->title_en);

    $metaDescription = $locale === 'ar'
        ? ($article->meta_description_ar ?: $article->meta_description ?: \Illuminate\Support\Str::limit(strip_tags($article->content_ar), 155))
        : ($article->meta_description_en ?: $article->meta_description ?: \Illuminate\Support\Str::limit(strip_tags($article->content_en), 155));

    $focusKeyphrase = $locale === 'ar'
        ? ($article->focus_keyphrase_ar ?: $article->focus_keyphrase ?? '')
        : ($article->focus_keyphrase_en ?: $article->focus_keyphrase ?? '');

    $synonymsKeyphrase = $locale === 'ar'
        ? ($article->synonyms_keyphrase_ar ?: $article->synonyms_keyphrase ?? '')
        : ($article->synonyms_keyphrase_en ?: $article->synonyms_keyphrase ?? '');

    $tags = $locale === 'ar'
        ? ($article->getRawOriginal('tags_ar') ?: $article->getRawOriginal('tags') ?? [])
        : ($article->getRawOriginal('tags_en') ?: $article->getRawOriginal('tags') ?? []);

    // Ensure tags is an array
    if (!is_array($tags)) {
        $tags = json_decode($tags, true) ?: [];
    }
    $tagsString = is_array($tags) ? implode(', ', array_filter($tags)) : '';

    $permalink = $article->permalink ?? request()->url();
    $canonicalUrl = $locale === 'ar'
        ? ($article->canonical_url_ar ?: $permalink)
        : ($article->canonical_url_en ?: $permalink);

    $featuredImage = optional($article->media)->url ?? asset('website/images/favicons/apple-touch-icon.png');
    $categoryTitle = optional($article->category)->title ?? '';

    // Get alternate hreflang URLs
    $hreflangUrls = $article->alternate_hreflang ?? [];
@endphp

@section('title', $article->title)
@section('seo_title', $articleSeoTitle)
@section('seo_description', $metaDescription)
@section('seo_focus_keyphrase', $focusKeyphrase)
@section('seo_synonyms', $synonymsKeyphrase)
@section('seo_tags', $tagsString)
@section('seo_canonical', $canonicalUrl)
@section('seo_permalink', $permalink)
@section('seo_slug', $article->slug)
@section('seo_category', $categoryTitle)
@section('seo_image', $featuredImage)
@section('seo_og_type', 'article')

@push('hreflang_tags')
    @if(!empty($hreflangUrls))
        @foreach($hreflangUrls as $lang => $url)
            <link rel="alternate" hreflang="{{ $lang }}" href="{{ $url }}">
        @endforeach
        <link rel="alternate" hreflang="x-default" href="{{ $canonicalUrl }}">
    @endif
@endpush

@push('structured_data')
    @php
        $articleSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $articleSeoTitle,
            'description' => $metaDescription,
            'image' => $featuredImage,
            'datePublished' => $article->created_at?->toIso8601String(),
            'dateModified' => $article->updated_at?->toIso8601String(),
            'author' => [
                '@type' => 'Organization',
                'name' => config('app.name', 'Epoxy')
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => config('app.name', 'Epoxy'),
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('website/images/favicons/apple-touch-icon.png')
                ]
            ],
            'inLanguage' => $locale,
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => $canonicalUrl
            ]
        ];

        if ($categoryTitle) {
            $articleSchema['articleSection'] = $categoryTitle;
        }

        if ($focusKeyphrase || $synonymsKeyphrase || $tagsString) {
            $keywords = array_filter([$focusKeyphrase, $synonymsKeyphrase, $tagsString]);
            $articleSchema['keywords'] = implode(', ', $keywords);
        }
    @endphp
    <script type="application/ld+json">
        {!! json_encode($articleSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
@endpush

@section('content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h2 class="title-h2">{{ $article->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blogs') }}">@lang("website.Articles")</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
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

    <!--Post -->

    <section class="section section-description">
        <div class="container">
            <div class="row row-post">
                <div class="col-xl-9 col-md-12 col-sm-12 col-12">
                    <div class="thumb-post">
                        <img class="thumb-post__img" src="{{ $article->media?->url }}" alt="{{ $article->title }}">
                    </div>
                    <div class="post-info">
                        <div class="post-info-item">
                            <a class="post-info__link" href=""><i class="zmdi zmdi-account-o"></i>by Admin</a>
                            <span class="post-info__text"><i class="zmdi zmdi-calendar"></i>
                                {{ $article->created_at?->toFormattedDateString() }}
                            </span>
                            <a class="post-info__link" href=""><i class="zmdi zmdi-comment-outline"></i>{{ $article->comments_count }} {{ __('website.Comments') }}</a>
                        </div>
                    </div>
                    <div class="box-post" style="overflow: hidden;word-wrap: break-word;">
                        <h1 class="title-post">{{ $article->title }}</h1>
                        {!! $article->content  !!}
                    </div>
                    <div class="box-preview">
                        <div class="previous">
                            @if($previousProject)
                                @if(app()->getLocale() == 'en')
                                    <i class="zmdi zmdi-arrow-left"></i>
                                @else
                                    <i class="zmdi zmdi-arrow-right"></i>
                                @endif
                            <a href="{{ route('blog-details', ['slug' => $previousProject->route_slug ?? $previousProject->id]) }}" class="box-preview-link">
                                <span>{{ __('website.Previous post') }}</span>
                                {{ $previousProject->title }}
                            </a>
                            @endif
                        </div>
                        <div class="next">
                            @if($nextProject)
                                <a href="{{ route('blog-details', ['slug' => $nextProject->route_slug ?? $nextProject->id]) }}" class="box-preview-link">
                                    <span>{{ __('website.Next post') }}</span>
                                    {{ $nextProject->title }}
                                </a>
                                @if(app()->getLocale() == 'en')
                                    <i class="zmdi zmdi-arrow-right"></i>
                                @else
                                    <i class="zmdi zmdi-arrow-left"></i>
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="box-comment">
                        <h2 class="title-post">{{ __('website.Comments') }} ({{ $article->comments_count }})</h2>
                        @if(count($article->comments) > 0)
                            @foreach($article->comments as $comment)
                            <div class="comment">
                                <div class="comment-info">
                                    <div class="comment-header">
                                        <p class="comment__name">{{ $comment->name }}</p>
                                        <p class="comment__date">{{ $comment->created_at?->toFormattedDateString() }}</p>
                                        <p class="comment__time">{{ $comment->created_at?->toTimeString() }}</p>
                                    </div>
                                    <div class="comment-body">
                                        <p class="comment__text">
                                            {{ $comment->comment }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="box-contact">
                        <h2 class="title-post">@lang('website.Leave a Reply')</h2>
                        <form action="{{ route('blog-submit-query') }}" method="POST">
                            @csrf
                            <input type="hidden" required name="article_id" value="{{$article->id}}">
                            <div class="form">
                                <div class="form-item">
                                    <input class="form__input" name="name" type="text" placeholder="@lang('website.Name')*">
                                </div>
                                <div class="form-item">
                                    <input class="form__input" type="email" name="email" required data-error="Please enter your email" placeholder="@lang('website.Email')*">
                                </div>
                                <div class="form-item w-100">
                                    <textarea class="form__textarea" name="comment" rows="3" placeholder="@lang('website.Comment')"></textarea>
                                </div>
                                <div class="form-item">
                                    <button type="submit" class="btn btn-primary">@lang('website.Post Comment')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-md-12 col-sm-12 col-12 sidebar">
                    <div class="sidebar-item">
                        <form action="{{ route('blogs') }}" method="GET" class="sidebar-search-form">
                            @if (request()->has('category_id'))
                                <input type="hidden" name="category_id" value="{{ request('category_id') }}">
                            @endif
                            <div class="sidebar-letter">
                                <input type="search" class="form-control" name="search" id="search-input" value="{{ request('search') }}" placeholder="@lang('website.Searching')">
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-item sidebar--bg">
                        <h3 class="title-h3">{{ __('website.Categories') }}</h3>
                        <ul class="list-category">
                            @foreach ($categories as $category)
                            <li class="list-category__item">
                                <a class="list-category__link" href="{{ route('blogs') }}?category_id={{$category->id}}">
                                    {{ $category->title }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-item">
                        <h3 class="title-h3">@lang('website.Newsletter')</h3>
                        <form id="newsletter-form" method="POST" action="{{ route('contact.subscribe') }}">
                            @csrf
                            <div class="newsletter-response"></div>
                            <div class="sidebar-letter">
                                <input type="email" class="form-control" id="newsletter-email" name="email" placeholder="@lang('website.Email')" required>
                                <button type="submit" class="btn btn-primary" id="newsletter-submit-btn">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->

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
                                <p class="team-name">Clean design concept</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-case">
                        <div class="case-item case-2">
                            <div class="team-info">
                                <p class="team-name">Clean design concept</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-case">
                        <div class="case-item case-3">
                            <div class="team-info">
                                <p class="team-name">Clean design concept</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('script')
<style>
    /* Search Form Styling */
    .sidebar-search-form {
        width: 100%;
    }
    
    .sidebar-search-form .sidebar-letter {
        display: flex;
        align-items: center;
        gap: 0;
        width: 100%;
    }
    
    .sidebar-search-form .sidebar-letter .form-control {
        flex: 1;
        margin: 0;
        margin-bottom: 0;
    }
    
    .sidebar-search-form .sidebar-letter .btn-primary {
        flex-shrink: 0;
        margin: 0;
        margin-bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    @if(app()->getLocale() == 'ar')
    .sidebar-search-form .sidebar-letter .form-control {
        margin-left: 5px;
    }
    .sidebar-search-form .sidebar-letter .btn-primary {
        margin-right: 0;
    }
    @else
    .sidebar-search-form .sidebar-letter .form-control {
        margin-right: 5px;
    }
    .sidebar-search-form .sidebar-letter .btn-primary {
        margin-left: 0;
    }
    @endif
    
    /* Newsletter Form Styling */
    #newsletter-form {
        width: 100%;
    }
    
    .newsletter-response {
        min-height: 0;
        margin-bottom: 15px;
        display: none;
    }
    
    .newsletter-response.show {
        display: block;
    }
    
    .newsletter-response .alert {
        padding: 12px 15px;
        border-radius: 4px;
        margin-bottom: 0;
        font-size: 13px;
        line-height: 1.5;
        animation: slideDown 0.3s ease-out;
        text-align: center;
    }
    
    .newsletter-response .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    
    .newsletter-response .alert-error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    
    .sidebar-letter {
        display: flex;
        align-items: center;
        gap: 0;
        width: 100%;
    }
    
    .sidebar-letter .form-control {
        flex: 1;
        margin: 0;
        margin-bottom: 0;
    }
    
    .sidebar-letter .btn-primary {
        flex-shrink: 0;
        margin: 0;
        margin-bottom: 0;
    }
    
    @if(app()->getLocale() == 'ar')
    .sidebar-letter .form-control {
        margin-left: 5px;
    }
    .sidebar-letter .btn-primary {
        margin-right: 0;
    }
    @else
    .sidebar-letter .form-control {
        margin-right: 5px;
    }
    .sidebar-letter .btn-primary {
        margin-left: 0;
    }
    @endif
    
    #newsletter-submit-btn {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    #newsletter-submit-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
    
    #newsletter-submit-btn .btn-text {
        display: none;
    }
    
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Responsive */
    @media (max-width: 767.98px) {
        .sidebar-letter {
            flex-direction: column;
            gap: 10px;
        }
        
        .sidebar-letter .form-control {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }
        
        .sidebar-letter .btn-primary {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }
        
        .sidebar-search-form .sidebar-letter .form-control {
            margin-left: 0;
            margin-right: 0;
        }
        
        .sidebar-search-form .sidebar-letter .btn-primary {
            margin-left: 0;
            margin-right: 0;
        }
        
        #newsletter-submit-btn .btn-text {
            display: inline-block;
            margin-left: 8px;
        }
        
        @if(app()->getLocale() == 'ar')
        #newsletter-submit-btn .btn-text {
            margin-left: 0;
            margin-right: 8px;
        }
        @endif
    }
</style>
<script>
$(document).ready(function() {
    $('#newsletter-form').on('submit', function(e) {
        e.preventDefault();
        
        var $form = $(this);
        var $response = $form.find('.newsletter-response');
        var $submitBtn = $('#newsletter-submit-btn');
        var $icon = $submitBtn.find('i');
        var email = $('#newsletter-email').val();
        
        // Reset response
        $response.removeClass('show').html('');
        
        // Disable button and show loading
        $submitBtn.prop('disabled', true);
        $icon.removeClass('zmdi-mail-send').addClass('zmdi-refresh zmdi-hc-spin');
        
        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: {
                email: email,
                _token: $('input[name="_token"]').val()
            },
            success: function(response) {
                if(response.success) {
                    $response.html('<div class="alert alert-success">' + response.message + '</div>').addClass('show');
                    $('#newsletter-email').val('');
                } else {
                    $response.html('<div class="alert alert-error">' + response.message + '</div>').addClass('show');
                }
            },
            error: function(xhr) {
                var message = '{{ __('website.An error occurred. Please try again.') }}';
                if(xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    if(errors && errors.email) {
                        message = errors.email[0];
                    }
                }
                $response.html('<div class="alert alert-error">' + message + '</div>').addClass('show');
            },
            complete: function() {
                $submitBtn.prop('disabled', false);
                $icon.removeClass('zmdi-refresh zmdi-hc-spin').addClass('zmdi-mail-send');
            }
        });
    });
});
</script>
@endpush