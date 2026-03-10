<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="{{asset('assets/css/custom.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <meta name="google-site-verification" content="HNhYiQy8nNVhOdc-GCMIiMryY7PgQqO6J4RS3YrwWnc" />
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17366003916">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17366003916');
</script>
</head>

<body>    

    <!-- PRELOADER -->
    <!-- <div class="preLoader black">
        <img src="images/logo.png" alt="img">
    </div>
    <div class="preLoader white"></div> -->
    @php
        $isHome = Route::currentRouteName() === 'index';
    @endphp
    <!-- HEADER -->
    <header class="main-header {{ $isHome ? '' : 'sticky-header' }}">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="{{route('index')}}" class="navbar-brand">
                <img src="{{ asset($isHome ? 'assets/images/logo-blue.png' : 'assets/images/logo-blue.png') }}" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas"
                aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" id="navbarOffcanvas" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img src="{{asset('assets/images/logo-blue.png')}}" alt="Filingzone" class="logo">
                    <button type="button" class="btn-close btn-close-dark text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <a class="nav-item nav-link {{ request()->routeIs('home') || request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">
                           Home
                        </a>
                        <a class="nav-item nav-link {{ request()->routeIs('about.us') || request()->is('about-us') ? 'active' : '' }}" href="{{ url('about-us') }}">
                           About Us
                        </a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('our-fleet/category/*') ? 'active' : '' }}" href="{{route('our.fleet')}}" id="navbarDropdown" role="button">
                                Car Types
                                <i class="fa fa-chevron-down ms-1" id="dropdownIcon"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                {!! \App\Helpers\GeneralHelper::getCarCategoriesMenuHtml() !!}
                            </ul>
                        </div>
                        <div class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('our-fleet/brand/*') ? 'active' : '' }}" href="#" id="navbarDropdown2" role="button">
                                Car Brands
                                <i class="fa fa-chevron-down ms-1" id="dropdownIcon2"></i>
                            </a>
                        
                            <ul class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown2">
                                {!! \App\Helpers\GeneralHelper::getCarBrandsMenuHtml() !!}
                            </ul>
                        </div>
                        

                        <a class="nav-item nav-link {{ request()->is('blog*') ? 'active' : '' }}" href="{{ route('blogs') }}" >Blogs</a>
                    </div>
                    <div class="btn_flex">
                        <div class="language-selector">
                          <select id="language-select" class="form-select">
                            <option value="en" selected>English</option>
                            <option value="fr">French</option>
                            <option value="ar">Arabic</option>
                            <option value="es">Spanish</option>
                            <option value="nl">Dutch</option>
                            <option value="de">German</option>
                            <option value="it">Italian</option>
                          </select>
                        </div>
                        <a href="{{ route('contact.us') }}" class="header_btn">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
    
        </div>
    </nav>
</header>
