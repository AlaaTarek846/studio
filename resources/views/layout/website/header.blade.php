<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('website/img/logos/logo1.png')}}" width="110" class="logo-one" alt="Logo">
            <img src="{{ asset('website/img/logos/logo1.png')}}" width="110" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container-fluid">
            <nav class="container-max navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img style="width: 100px" src="{{ asset('website/img/logos/logo1.png')}}" class="logo-one" alt="Logo">
                    <img style="width: 100px" src="{{ asset('website/img/logos/logo1.png')}}" class="logo-two" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item ">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                {{ __('website.home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                                {{ __('website.about') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('service')}}" class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}">
                                {{ __('website.services') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('project')}}" class="nav-link {{ request()->routeIs('project') || request()->routeIs('apartments-resail') || request()->routeIs('areas') ? 'active' : '' }}">
                                {{ __('website.our_project') }}
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('areas')}}" class="nav-link {{ request()->routeIs('areas') ? 'active' : '' }}">
                                        {{__('website.primary')}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('apartments-resail')}}" class="nav-link {{ request()->routeIs('apartments-resail') ? 'active' : '' }}">
                                        {{__('website.resail')}}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('blogs')}}" class="nav-link {{ request()->routeIs('blogs') ? 'active' : '' }}">
                                {{ __('website.Articles') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                                {{ __('website.contact') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link {{ request()->routeIs('team') || request()->routeIs('faq') || request()->routeIs('gallery') ? 'active' : '' }}">
                                {{ __('website.more') }}
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('gallery')}}" class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">
                                        {{__('website.gallery')}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('team')}}" class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}">
                                        {{__('website.team')}}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('faq')}}" class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}">
                                        {{__('website.faq')}}
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>



                    <div class="side-btn-area">
                        @if(app()->getLocale() == 'en')
                            <a title="{{ __('website.arabic') }}" href="{{ route('change.language','ar') }}" class="call-btn">
                                <i class='bx bx-globe'></i>
                            </a>
                        @else
                            <a title="{{ __('website.english') }}" href="{{ route('change.language','en') }}" class="call-btn">
                                <i class='bx bx-globe'></i>
                            </a>
                        @endif
                    </div>

                    <div class="appointment-btn">
                        <a href="{{ route('contact') }}" class="default-btn default-bg-buttercup">
                            {{ __('website.contact') }}
                            @if(app()->getLocale() == 'en')
                                <i class='bx bx-right-arrow-alt'></i>
                            @else
                                <i class='bx bx-left-arrow-alt'></i>
                            @endif
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->