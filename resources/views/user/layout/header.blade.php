<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('content')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/effect_style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link href="{{ asset('assets/css/responsive_bootstrap_carousel.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/set1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/brand.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/coupon_style.css') }}" />
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-654881816');
    </script>
    <!-- Event snippet for Figarodeals conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-654881816/bvWSCOSO4_QCEJjoorgC'
        });
    </script>
</head>

<body>
    <header class="header4" style="border-bottom: 1px solid grey">
        <nav id="main-navigation-wrapper" class="navbar navbar-default ">
            <div class="container">
                <div class="navbar-header">
                    <div class="logo-menu"><a href="{{ route('LandingPage') }}"><img
                                src="{{ asset('assets/images/logo.png') }}" alt="Figaro Deals Logo"></a></div>
                    <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"
                        class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span
                            class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                </div>
                <div id="main-navigation" class="collapse navbar-collapse ">
                    <a href="{{ route('LandingPage') }}" class="logo"><img
                            src="{{ asset('assets/images/logo.png') }}" class="img-responsive display-block"
                            alt="Figaro Deals Logo"></a>
                    <ul class="nav navbar-nav">
                        <li class="dropdown ">
                            <a href="{{ route('LandingPage') }}" class="active">Home</a><i
                                class="fa fa-chevron-down"></i>

                        </li>
                        <li class="dropdown">
                            <a href="#">Categories</a><i class="fa fa-chevron-down"></i>
                            <ul class="dropdown-submenu">
                                <li>
                                    <a href="{{ route('LandingPage.Categorys') }}">All Categorys</a>
                                </li>
                                @foreach ($categorys as $category)
                                    <li><a
                                            href="{{ route('LandingPage.Single.Category', ['category_slug' => $category->category_slug]) }}">{{ $category->category_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('LandingPage.All.Stores') }}">Stores</a><i
                                class="fa fa-chevron-down"></i>
                            <ul class="dropdown-submenu">
                                @forelse ($stores as $store)
                                    <li><a
                                            href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}">{{ $store->store_name }}</a>
                                    </li>
                                @empty
                                    <h4>No more Store</h4>
                                @endforelse
                            </ul>
                        </li>
                        <li><a href="{{ route('LandingPage.ContactUs') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
