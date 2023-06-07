<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title> @yield('title')|Coupons & Discount Codes - 50% Off Sitewide</title>
    <meta name="description"
        content="Find the best of @yield('title') deals, coupons, codes and discounts for June 2023 . Save with Newcouponsbook today!">
    <meta name="author" content="New Coupns Book">
    <meta name="keywords"
        content="@yield('title')coupon code,@yield('title')promo codes, @yield('title')discount codes, latest offers, free shipping">
    <link rel="canonical" href="" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    @yield('link')

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('assets/imagesfavicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/imagesapple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon.png') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

    <!-- Skin Examples -->
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin1.css') }}" title="skin1"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin2.css') }}" title="skin2"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin3.css') }}" title="skin3"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin4.css') }}" title="skin4"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin5.css') }}" title="skin5"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin6.css') }}" title="skin6"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin7.css') }}" title="skin7"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin8.css') }}" title="skin8"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin9.css') }}" title="skin9"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin10.css') }}" title="skin10"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin11.css') }}" title="skin11"
        media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin12.css') }}" title="skin12"
        media="all" />

</head>

<body>
    <div id="wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 center-xs">
                        <p class="topbar-text">
                            <strong><i class="fa fa-phone"></i></strong> {{ env('APP_NUM') }} &nbsp;&nbsp;
                            <strong><i class="fa fa-envelope-o"></i>{{ env('APP_EMAIL') }}</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="logo-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <a class="navbar-brand" href="{{ route('LandingPage') }}">{{ env('APP_NAME') }}
                                <small>Discount Coupon
                                    Codes</small></a>
                        </div><!-- end col -->
                        <div class="col-md-2 col-sm-3 demo-1 hidden-xs">
                            <div id="dl-menu" class="dl-menuwrapper">
                                <button class="dl-trigger"><i class="fa fa-tags"></i></button>
                                <p>Browse Deal</p>
                                <ul class="dl-menu">
                                    <li><a href="{{ route('LandingPage.All.Coupons') }}">Coupon Codes</a></li>
                                </ul>
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-2 col-sm-3 demo-1 hidden-xs">
                            <div id="dl-menu2" class="dl-menuwrapper">
                                <button class="dl-trigger"><i class="fa fa-share-alt"></i></button>
                                <p>Follow us</p>
                                <ul class="dl-menu">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                                    <li><a href="#"><i class="fa fa-youtube-square"></i> Youtube</a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i> Linkedin</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                                </ul>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end rpw -->
                </div><!-- end container -->
            </div>

            <div class="menu-wrapper">
                <div class="container">
                    <div class="hovermenu ttmenu menu-color">
                        <div class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div><!-- end navbar-header -->

                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li><a class="active" href="{{ route('LandingPage') }}" title="">Home</a>
                                    </li>
                                    <li class="dropdown hasmenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories
                                            <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ route('LandingPage.Categorys') }}">All Categories</a></li>
                                            @forelse ($categorys as $category)
                                                <li><a
                                                        href="{{ route('LandingPage.Single.Category', ['category_slug' => $category->category_slug]) }}">{{ $category->category_name }}</a>
                                                </li>
                                            @empty
                                                <h4>No more category</h4>
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li class="dropdown hasmenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stores <span
                                                class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ route('LandingPage.All.Stores') }}">All Stores</a></li>
                                            @forelse ($stores as $store)
                                                <li><a
                                                        href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}">{{ $store->store_name }}</a>
                                                </li>
                                            @empty
                                                <h4>No more Store</h4>
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('LandingPage.ContactUs') }}" title="">Contact Us</a>
                                    </li>
                                    @if (auth()->user())
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger">Logout</button>
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
