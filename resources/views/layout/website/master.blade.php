<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'en' ? 'ltr' : 'rtl' }}">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @php
        $appName = config('app.name', 'Epoxy');
        $pageTitle = trim($__env->yieldContent('title', ''));
        $seoTitle = trim($__env->yieldContent('seo_title', ''));
        $resolvedTitle = $seoTitle !== '' ? $seoTitle : ($pageTitle !== '' ? $pageTitle : $appName);

        $rawDescription = trim($__env->yieldContent('seo_description', ''));
        $translationDefaultDescription = __('website.default_meta_description');
        $fallbackDescription = $translationDefaultDescription !== 'website.default_meta_description'
            ? $translationDefaultDescription
            : $appName . ' - premium epoxy solutions';
        $metaDescription = $rawDescription !== '' ? $rawDescription : $fallbackDescription;

        $focusKeyphrase = trim($__env->yieldContent('seo_focus_keyphrase', ''));
        $synonymsKeyphrase = trim($__env->yieldContent('seo_synonyms', ''));
        $rawTags = trim($__env->yieldContent('seo_tags', ''));
        $parsedTags = collect(preg_split('/[,;|]/', $rawTags));
        $articleTags = $parsedTags->map(fn ($tag) => trim($tag))->filter()->unique()->values();

        $keywordsCollection = collect([$focusKeyphrase, $synonymsKeyphrase])->filter();
        $keywordsCollection = $keywordsCollection->merge($articleTags);
        $metaKeywords = $keywordsCollection->implode(', ');

        $canonicalUrl = trim($__env->yieldContent('seo_canonical', '')) ?: url()->current();
        $permalink = trim($__env->yieldContent('seo_permalink', '')) ?: $canonicalUrl;
        $seoImage = trim($__env->yieldContent('seo_image', '')) ?: asset('website/images/favicons/apple-touch-icon.png');
        $seoCategory = trim($__env->yieldContent('seo_category', ''));
        $ogType = trim($__env->yieldContent('seo_og_type', '')) ?: 'website';
        $seoSlug = trim($__env->yieldContent('seo_slug', ''));

        // Get hreflang URLs - will be set via @push in child views
        $hreflangUrls = [];
    @endphp

    <title>{{ $resolvedTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    @if($metaKeywords !== '')
        <meta name="keywords" content="{{ $metaKeywords }}">
    @endif
    @if($focusKeyphrase !== '')
        <meta name="targeted-keyword" content="{{ $focusKeyphrase }}">
    @endif
    @if($synonymsKeyphrase !== '')
        <meta name="keyword-synonyms" content="{{ $synonymsKeyphrase }}">
    @endif
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <!-- Hreflang Tags -->
    @stack('hreflang_tags')

    <!-- Open Graph -->
    <meta property="og:site_name" content="{{ $appName }}">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:title" content="{{ $resolvedTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ $permalink }}">
    <meta property="og:image" content="{{ $seoImage }}">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    @if($seoCategory !== '')
        <meta property="article:section" content="{{ $seoCategory }}">
    @endif
    @foreach($articleTags as $tag)
        <meta property="article:tag" content="{{ $tag }}">
    @endforeach
    @if($seoSlug !== '')
        <meta property="article:slug" content="{{ $seoSlug }}">
    @endif

    <!-- Open Graph -->
    <meta property="og:site_name" content="{{ $appName }}">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:title" content="{{ $resolvedTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ $permalink }}">
    <meta property="og:image" content="{{ $seoImage }}">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    @if($seoCategory !== '')
        <meta property="article:section" content="{{ $seoCategory }}">
    @endif
    @foreach($articleTags as $tag)
        <meta property="article:tag" content="{{ $tag }}">
    @endforeach
    @if($seoSlug !== '')
        <meta property="article:slug" content="{{ $seoSlug }}">
    @endif

<!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $resolvedTitle }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $seoImage }}">
    <meta name="twitter:url" content="{{ $permalink }}">

    @yield('structured_data')
    @stack('meta')

    <!-- Article Schema (JSON-LD) - will be provided by child views -->
    @stack('structured_data')

    <!-- bootstrap css -->
    <!-- CSS here -->
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('website/css/bootstrap-rtl.min.css')}}">
    @else
        <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css')}}">
    @endif
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('website/css/owl.theme.default.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('website/fonts/flaticon.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/boxicons.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/animate.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/meanmenu.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/nice-select.min.css')}}">

    @if(app()->getLocale() == 'ar')
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('website/css/style-rtl.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('website/css/responsive-rtl.css')}}">
    @else
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('website/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('website/css/responsive.css')}}">
    @endif
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/theme-dark.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('website/img/favicon.png')}}">

    @stack('style')
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- header-area -->
     @include('layout.website.header')

     @yield('content')

    <!-- footer-area -->
    @include('layout.website.footer')
    <!-- footer-area-end -->

<!-- JS here -->
@include('layout.website.script')

@stack('script')

</body>


<!-- Mirrored from themegenix.com/demo/renova/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 May 2025 14:48:59 GMT -->
</html>