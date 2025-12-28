@extends('layout.website.master')

@section('title', __('website.home'))

@section('content')

    <!-- Home Slider Area -->
    <div class="home-slider-area">
        <div class="container-fluid m-0 p-0">
            <div class="home-slider owl-carousel owl-theme">
                @foreach($homeSliders as $homeSlider)
                <div class="slider-item">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-5 col-xxl-6">
                            <div class="home-slider-content">
                                <span>{{ $homeSlider->title_color }}</span>
                                <h1>{{ $homeSlider->title }}</b></h1>
                                <p>{!!  $homeSlider->description !!} </p>
                                <div class="home-slider-btn">

                                    <a href="{{route('contact')}}" class="default-btn active">
                                        {{ __('website.contact') }}
                                        @if(app()->getLocale() == 'en')
                                            <i class='bx bx-right-arrow-alt'></i>
                                        @else
                                            <i class='bx bx-left-arrow-alt'></i>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-7 col-xxl-6 pr-0">
                            <div class="home-slider-img">
                                <img src="{{$homeSlider->background->url}}" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Home Slider Area End -->

    <!-- Service Area -->
    <div class="service-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">

                @foreach($services as $index => $service)
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-card service-card-bg {{$index == 1? 'active':''}}">
                            <i class='flaticon-value'></i>
                            <a href="{{route('service')}}">
                                <h3>{{$service->title}}</h3>
                            </a>
                            <p class="text-break">{!! app()->getLocale() == 'en' ? $service->quote_en :$service->quote_ar !!}</p>
                            <a href="{{route('service')}}" class="learn-more-btn">
                                {{ __('website.Learn More') }}
                                @if(app()->getLocale() == 'en')
                                    <i class='bx bx-right-arrow-alt'></i>
                                @else
                                    <i class='bx bx-left-arrow-alt'></i>
                                @endif
                            </a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- Service Area End -->

    <!-- House Area Two -->
    <div class="house-area-two pt-100  pb-70">
        <div class="container">
            <div class="row justify-content-center">

                @foreach($propertyTypes as $index => $propertyType)
                    <div class="col-lg-6 col-md-6">
                        <div class="house-card">
                            <a href="property-details.html">
                                <img src="{{$propertyType->media->url}}" alt="Images">
                            </a>
                            <div class="content">
                                <span>{{$propertyType->title}}</span>
                                <a href="property-details.html">
                                    <h3>{{$propertyType->title}}</h3>
                                </a>
                                <p>
                                    {{$propertyType->description}}
                                </p>
                                <a href="{{$index == 1 ? route('areas') : route('apartments') }}" class="learn-btn">
                                    {{ __('website.Learn More') }}
                                    @if(app()->getLocale() == 'en')
                                        <i class='bx bx-right-arrow-alt'></i>
                                    @else
                                        <i class='bx bx-left-arrow-alt'></i>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- House Area Two End -->




    <!-- Property Section -->
    <section class="property-section pb-70">
        <div class="container-fluid">
            <div class="container-max">
                <div class="property-section-text">
                    <div class="section-title">
                        <span>{{ __('website.The Projects') }}</span>
                        <h2>
                            {{ __('website.Projects') }}
                            <br>{{ __('website.Real Estate') }}</br>

                                                        

                        </h2>
                    </div>
                </div>

                <div class="row pt-45">
                    @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-property">
                                <div class="images">
                                    <a href="{{route('developments',$project->slug)}}">
                                        <img src="{{$project->media->url}}" alt="Images">
                                    </a>
                                    <div class="property-content">
                                        <span>{{$project->title}}</span>
                                        <a href="{{route('developments',$project->slug)}}">
                                            <h3>{{$project->title}}</h3>
                                        </a>
                                        <p>{{$project->description}}</p>
                                        <a href="{{route('apartments',$project->slug)}}" class="learn-more-btn">
                                           {{ __('website.Learn More') }}
                                            @if(app()->getLocale() == 'en')
                                                <i class='bx bx-right-arrow-alt'></i>
                                            @else
                                                <i class='bx bx-left-arrow-alt'></i>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->

    <!-- Testimonial Area -->
    <div class="testimonial-area pt-100">
        <div class="container">
            <div class="testimonial-slider owl-carousel owl-theme">

                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item">
                        <h3>{{$testimonial->name}}</h3>
                        <p>
                            {{$testimonial->description}}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->



    <!-- Blog Area -->
    <div class="blog-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>{{ __('website.REAL ESTATE BLOG') }}</span>
                <h2 class="margin-auto">{!! __('website.Blog News & Updates') !!}</h2>
            </div>
            <div class="row pt-45">
                @foreach($articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="{{route('blog-details',$article->route_slug ?? $article->id)}}">
                                <img src="{{$article->media->url}}" alt="Blog Images">
                            </a>
                            <div class="content">
                                <span>{{ app()->getLocale() == 'en' ? $article->created_at->format('F d, Y') : $article->created_at->format('d F, Y')    }}</span>
                                <a href="{{route('blog-details',$article->route_slug ?? $article->id)}}">
                                    <h3>{{$article->title}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Contact Area -->
    <div class="contact-area">
        <div class="container">
            <div class="contact-option">
                <div class="contact-form">
                    <span>{{ __('website.SEND MESSAGE') }}</span>
                    <h2>{{ __('website.Contact With Us') }}</h2>
                    <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <i class='bx bx-user'></i>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="{{ __('website.Please enter your name') }}" placeholder="{{ __('website.Your Name') }}*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <i class='bx bx-user'></i>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="{{ __('website.Please enter your email') }}" placeholder="{{ __('website.Your Email') }}*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <i class='bx bx-phone'></i>
                                    <input type="text" name="phone" id="phone_number" required data-error="{{ __('website.Please enter your number') }}" class="form-control" placeholder="{{ __('website.Your Phone')}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <i class='bx bx-envelope'></i>
                                    <input type="text" name="topic" id="msg_subject" required data-error="{{ __('website.Please enter your subject') }}" class="form-control" placeholder="{{ __('website.Your Topic') }}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <i class='bx bx-envelope'></i>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="{{ __('website.Write your message') }}" placeholder="{{ __('website.Message') }}"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn default-bg-buttercup">
                                    {{ __('website.Send Message') }}
                                    @if(app()->getLocale() == 'en')
                                        <i class='bx bx-right-arrow-alt'></i>
                                    @else
                                        <i class='bx bx-left-arrow-alt'></i>
                                    @endif
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

    @include('components.home.newsletter')

    <!-- Map Area -->
{{--    <div class="map-area">--}}
{{--        <div class="container-fluid m-0 p-0">--}}
{{--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.3734131639715!2d-96.95588917878352!3d18.89830951964275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e51eb45eacad%3A0x465ac54aa2735573!2zUmluY29uIGRlbCBCb3NxdWUsIOCmleCmsOCnjeCmoeCni-CmrOCmviwg4Kat4KeH4Kaw4Ka-4KaV4KeN4Kaw4KeB4KacLCDgpq7gp4fgppXgp43gprjgpr_gppXgp4s!5e0!3m2!1sbn!2sbd!4v1594641366896!5m2!1sbn!2sbd"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
{{--            <div class="map-content">--}}
{{--                <span>CONTACT FOR PROJECT</span>--}}
{{--                <h2>Do You Have A Project In <b>Mind?</b></h2>--}}
{{--                <div class="map-content-left">--}}
{{--                    <span>CALL US NOW</span>--}}
{{--                    <h3><a href="tel:+5678555178">+5 678 555 178</a></h3>--}}
{{--                </div>--}}
{{--                <div class="map-content-right">--}}
{{--                    <span>GET IN TOUCH</span>--}}
{{--                    <h3><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#41282f272e012e27352e316f222e2c"><span class="__cf_email__" data-cfemail="c7aea9a1a887a8a1b3a8b7e9a4a8aa">[email&#160;protected]</span></a></h3>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Map Area End -->

@endsection