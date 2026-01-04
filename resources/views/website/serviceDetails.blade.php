@extends('layout.website.master')

@section('title', app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en)

@section('content')
    <!-- Banner Header -->
    <section class="section section-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h2 class="title-h2">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('service') }}">{{ __('website.services') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}</li>
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

    <!-- Services Description -->

    <section class="section section-description">
        <div class="container">
            <div class="row row-post">
                <div class="col-xl-9 col-md-12 col-sm-12 col-12">
                    @if($service->image)
                    <div class="thumb-post">
                        <img class="thumb-post__img" src="{{ $service->image->url }}" alt="{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}">
                    </div>
                    @endif
                    <h1 class="title-post">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}</h1>
                    <div class="service-description" style="overflow: hidden;word-wrap: break-word;">
                        {!! app()->getLocale() == 'ar' ? $service->description_ar : $service->description_en !!}
                    </div>


                </div>
                <div class="col-xl-3 col-md-12 col-sm-12 col-12 sidebar">
                    <div class="sidebar-item sidebar-category">
                        <h3 class="title-h3">{{ __('website.services') }}</h3>
                        <ul class="list-category">
                            @foreach($allServices as $relatedService)
                            <li class="list-category__item">
                                <a class="list-category__link" href="{{ route('service-details', app()->getLocale() == 'ar' ? $relatedService->slug_ar : $relatedService->slug_en) }}">
                                    {{ app()->getLocale() == 'ar' ? $relatedService->title_ar : $relatedService->title_en }}
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


    <!-- Video Work -->
    @if($service->video)
    <section class="section section-work">
        <div class="video-work">
            <button type="button" class="video-play" data-toggle="modal" data-target="#videoModal">
                @php
                    $thumbnailUrl = optional($service->video->thumbnail)->url ?? '/website/img/video.jpg';
                @endphp
                <img class="video-play__img" src="{{ $thumbnailUrl }}" alt="Video">
            </button>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-12 col-lg-5 offset-lg-7">
                    <p class="before-title">{{ __('website.see us working') }}</p>
                    <h2 class="title-h2">{{ app()->getLocale() == 'ar' ? ($service->video->title_ar ?? __('website.Watch Our Working Process')) : ($service->video->title_en ?? __('website.Watch Our Working Process')) }}</h2>
                    <p class="after-title">{{ app()->getLocale() == 'ar' ? ($service->video->description_ar ?? __('website.Watch Our Working Process Description')) : ($service->video->description_en ?? __('website.Watch Our Working Process Description')) }}</p>
                    @if(app()->getLocale() == 'ar' ? $service->video->description_ar : $service->video->description_en)
                        <p class="description">{!! app()->getLocale() == 'ar' ? $service->video->description_ar : $service->video->description_en !!}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endif

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

    <!-- Video Modal -->
    @if($service->video)
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">
                        {{ app()->getLocale() == 'ar' ? ($service->video->title_ar ?? __('website.Watch Our Working Process')) : ($service->video->title_en ?? __('website.Watch Our Working Process')) }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        @php
                            // Extract YouTube video ID from URL
                            $youtubeUrl = $service->video->youtube_url;
                            $videoId = '';
                            
                            // Handle different YouTube URL formats
                            if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $youtubeUrl, $matches)) {
                                $videoId = $matches[1];
                            }
                            
                            $embedUrl = $videoId ? 'https://www.youtube.com/embed/' . $videoId : $youtubeUrl;
                        @endphp
                        <iframe class="embed-responsive-item" src="{{ $embedUrl }}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

@endsection

@push('script')
<style>
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

    .service-quote {
        background-color: #f8f9fa;
        padding: 20px;
        border-left: 4px solid #ff7062;
        margin: 20px 0;
    }

    .service-quote blockquote {
        margin: 0;
        font-style: italic;
        color: #555;
    }

    .service-faqs {
        margin-top: 40px;
    }

    .accordion-item {
        border: 1px solid #e2e2e2;
        margin-bottom: 10px;
    }

    .accordion-button {
        background-color: #f8f9fa;
        color: #222;
        font-weight: 600;
    }

    .accordion-button:not(.collapsed) {
        background-color: #ff7062;
        color: #fff;
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
                
                // Scroll to response
                $('html, body').animate({
                    scrollTop: $response.offset().top - 100
                }, 500);
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
                
                // Scroll to response
                $('html, body').animate({
                    scrollTop: $response.offset().top - 100
                }, 500);
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
