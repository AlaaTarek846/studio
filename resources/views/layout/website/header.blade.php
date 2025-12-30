<!-- Header -->
<header>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="logo" src="{{ asset('website/img/logo.png')}}" alt="Desart">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('website.home') }} <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('about')}}">{{ __('website.about') }}</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('service') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('service')}}">{{ __('website.services') }}</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('blogs') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('blogs')}}">{{ __('website.Articles') }}</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('contact')}}">{{ __('website.contact') }}</a>
                        </li>
                    </ul>
                    <form class="form-inline align-items-center my-2 my-lg-0 search-bar">
                        @if(app()->getLocale() == 'en')
                            <a title="{{ __('website.arabic') }}" href="{{ route('change.language','ar') }}" class="btn btn-primary btn-search my-2 my-sm-0">
                            <i class='zmdi zmdi-globe-alt' style="line-height: 48px;"></i>
                        </a>
                        @else
                            <a title="{{ __('website.english') }}" href="{{ route('change.language','en') }}" class="btn btn-primary btn-search my-2 my-sm-0">
                            <i class='zmdi zmdi-globe-alt' style="line-height: 48px;"></i>
                        </a>
                        @endif
                    </form>
                </div>
            </nav>
        </div>
    </div>
</header>