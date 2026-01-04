<!-- Footer -->
<footer>
    <div class="footer">
        <div class="footer-body">
            <div class="container">
                <div class="row justify-content-between align-items-center footer-nav">
                    <div class="col-xl-2 col-md-2 col-sm-12 col-12">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img class="logo" src="/website/img/logo.png" alt="{{ $shareSetting?->title ?? 'Studio' }}" width="127" height="50" >
                        </a>
                    </div>
                    <div class="col-xl-10 col-md-10 col-sm-12 col-12">
                        <ul class="nav justify-content-end">
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">{{ __('website.about') }}</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}" href="{{ route('service') }}">{{ __('website.services') }}</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">{{ __('website.Acting workshops') }}</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('blogs') ? 'active' : '' }}" href="{{ route('blogs') }}">{{ __('website.Blogs') }}</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">{{ __('website.contact') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-between footer-info">
                    <div class="col-xl-5 col-md-8 col-sm-8 col-12">
                        <h3 class="title-h3">{{ __('website.about') }}</h3>
                        <p>
                            {{ __('website.Footer About Description') }}
                        </p>
                        @if($shareSetting)
                            <ul class="list-social">
                                @if($shareSetting->facebook)
                                    <li class="list-social-item"><a href="{{ $shareSetting->facebook }}" target="_blank" class="list-social-link"><i class="zmdi zmdi-facebook"></i></a></li>
                                @endif
                                @if($shareSetting->linkedin)
                                    <li class="list-social-item"><a href="{{ $shareSetting->linkedin }}" target="_blank" class="list-social-link"><i class="zmdi zmdi-linkedin"></i></a></li>
                                @endif
                                @if($shareSetting->twitter)
                                    <li class="list-social-item"><a href="{{ $shareSetting->twitter }}" target="_blank" class="list-social-link"><i class="zmdi zmdi-twitter"></i></a></li>
                                @endif
                                @if($shareSetting->instagram)
                                    <li class="list-social-item"><a href="{{ $shareSetting->instagram }}" target="_blank" class="list-social-link"><i class="zmdi zmdi-instagram"></i></a></li>
                                @endif
                            </ul>
                        @endif
                    </div>
                    <div class="col-xl-1 col-md-4 col-sm-4 col-12"></div>
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <h3 class="title-h3">
                            {{ __('website.services') }}
                        </h3>
                        @if($footerServices && $footerServices->count() > 0)
                            <ul class="list-services">
                                @foreach($footerServices as $service)
                                    <li class="list-services-item">
                                        <a class="list-services-link" href="{{ route('service-details', $service->slug) }}">
                                            {{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <h3 class="title-h3">
                            {{ __('website.contact') }}
                        </h3>
                        @if($shareSetting)
                            <ul class="list-contact">
                                @if($shareSetting->address)
                                    <li class="list-contact-item">
                                        <span class="box-icon"><i class="zmdi zmdi-pin"></i></span>
                                        <span>{!! nl2br(e($shareSetting->address)) !!}</span>
                                    </li>
                                @endif
                                @if($shareSetting->mobile)
                                    <li class="list-contact-item">
                                        <span class="box-icon"><i class="zmdi zmdi-phone"></i></span>
                                        <span>{{ $shareSetting->mobile }}</span>
                                    </li>
                                @endif
                                @if($shareSetting->email)
                                    <li class="list-contact-item">
                                        <span class="box-icon"><i class="zmdi zmdi-email"></i></span>
                                        <span>{{ $shareSetting->email }}</span>
                                    </li>
                                @endif
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-between align-items-center footer-bottom">
                <div class="col-6">
                    {{__('website.footer_message')}} <a href="https://innovations-eg.com" target="_blank">Innovation</a>
                </div>
                <div class="col-6 ">
{{--                    <ul class="list-footer">--}}
{{--                        <li class="list-footer-item">--}}
{{--                            <a href="" class="list-footer-link">Privacy Policy</a>--}}
{{--                        </li>--}}
{{--                        <li class="list-footer-item">--}}
{{--                            <a href="" class="list-footer-link">Terms and Conditions</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Social Networks Fixed -->
@if($shareSetting)
    <ul class="social-networks">
        @if($shareSetting->facebook)
            <li class="social-networks-item">
                <a href="{{ $shareSetting->facebook }}" class="social-networks-link" target="_blank"><i class="zmdi zmdi-facebook"></i> facebook</a>
            </li>
        @endif
        @if($shareSetting->linkedin)
            <li class="social-networks-item">
                <a href="{{ $shareSetting->linkedin }}" class="social-networks-link" target="_blank"><i class="zmdi zmdi-linkedin"></i> linkedin</a>
            </li>
        @endif
        @if($shareSetting->twitter)
            <li class="social-networks-item">
                <a href="{{ $shareSetting->twitter }}" class="social-networks-link" target="_blank"><i class="zmdi zmdi-twitter"></i> twitter</a>
            </li>
        @endif
    </ul>
@endif

{{--<!-- Video Modal -->--}}
{{--<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLabel">We are the Creative Digital Team</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="embed-responsive embed-responsive-16by9">--}}
{{--                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lM02vNMRRB0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}