<!-- Footer Area -->
<footer class="footer-area">
    <div class="footer-top pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-xxl-3 col-md-6">
                    <div class="single-footer-widget">
                        <a href="index-4.html" class="logo">
                            <img src="{{ asset('website/img/logos/logo1.png')}}" width="110" class="footer-logo1" alt="Logo">
                            <img src="{{ asset('website/img/logos/logo1.png')}}" width="110" class="footer-logo2" alt="Logo">
                        </a>
                        <p>
                            {{ __('website.Learn how to choose the right property to achieve the highest ROI.') }}
                        
                        </p>
                        <ul class="social-link">
                            @if ($shareSetting->facebook)
                                 <li>
                                    <a href="{{ $shareSetting->facebook }}" target="_blank"><i class='bx bxl-facebook'></i></a>
                                </li>
                            @endif
                             @if ($shareSetting->twitter)
                                 <li>
                                    <a href="{{ $shareSetting->twitter }}" target="_blank"><i class='bx bxl-twitter'></i></a>
                                </li>
                            @endif

                            @if ($shareSetting->instagram)
                                <li>
                                    <a href="{{ $shareSetting->instagram }}" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </li>
                            @endif
                             @if ($shareSetting->linkedin)
                                 <li>
                                    <a href="{{ $shareSetting->linkedin }}" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                </li>
                            @endif

                            
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-xxl-3 col-md-6">
                    <div class="single-footer-widget pl-70">
                        <h3>{{__('website.services')}}</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="{{route('service')}}" target="_blank">
                                    <i class='bx bx-plus'></i>
                                    {{__('website.services')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('about')}}" target="_blank">
                                    <i class='bx bx-plus'></i>
                                    {{__('website.about')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('team')}}" target="_blank">
                                    <i class='bx bx-plus'></i>
                                    {{__('website.team')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('termCondition')}}" target="_blank">
                                    <i class='bx bx-plus'></i>
                                    {{__('website.Terms and Conditions')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{route('policy')}}" target="_blank">
                                    <i class='bx bx-plus'></i>
                                    {{__('website.Privacy Policy')}}

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-xxl-3 col-md-6">
                    <div class="single-footer-widget pl-3">
                        <h3>{{__('website.CONTACT INFO')}}</h3>
                        <ul class="footer-contact-list">
                           
                            <li>
                                <span>{{__('website.Address')}} :</span> {{app()->getLocale()=='ar' ? $shareSetting->address_ar : $shareSetting->address_en}}
                            </li>
                            <li>
                                <span>{{__('website.phoneNumber')}} :</span> <a href="{{$shareSetting->mobile}}">{{$shareSetting->mobile}}</a>
                            </li>
                            <li>
                                <span>{{__('website.Email')}} :</span> <a href="{{$shareSetting->email}}"> <span class="__cf_email__" >{{$shareSetting->email}}</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-xxl-3 col-md-6">
                    <div class="single-footer-widget pl-5">
                        <h3>{{__('website.gallery')}}</h3>
                        <ul class="footer-gallery">
                            @foreach($galleries as $gallery)
                                <li>
                                    <a href="{{route('gallery')}}">
                                        <img src="{{ $gallery->media->url}}" alt="image">
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-text">
                <p>{{__('website.footer_message')}} <a href="https://innovations-eg.com" target="_blank">Innovation</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- Color Switch Button -->
<div class="switch-box">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>
<!-- Color Switch Button End -->