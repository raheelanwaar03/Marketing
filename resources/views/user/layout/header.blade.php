<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/apple-touch-icon-152x152.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">

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
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin10.css') }}"
        title="skin10" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin11.css') }}"
        title="skin11" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin12.css') }}"
        title="skin12" media="all" />
    <link href="{{ asset('assets/switcher/switcher.css') }}" rel="stylesheet">

</head>

<body>

    <x-alert />

    <div id="wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 center-xs">
                        <p class="topbar-text">
                            <strong><i class="fa fa-phone"></i></strong> +90 987 123 45 67 &nbsp;&nbsp;
                            <strong><i class="fa fa-envelope-o"></i></strong> <a
                                href="mailto:info@yoursite.com">info@yoursite.com</a>
                        </p>
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-6 center-xs text-right">
                        <div class="topbar-links">
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <div class="header">
            <div class="logo-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <a class="navbar-brand" href="index.html">YourCoupon <small>Discount Coupon
                                    Codes</small></a>
                        </div><!-- end col -->
                        <div class="col-md-2 col-sm-3 demo-1 hidden-xs">
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
                                            @foreach ($categorys as $category)
                                                <li><a href="{{ route('User.All.Category') }}">All Categories</a></li>
                                                <li>
                                                    <a
                                                        href="{{ route('User.See.Category/', $category->category_slug) }}">{{ $category->category_name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown hasmenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coupon Deals
                                            <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach ($coupons as $coupon)
                                                <li><a href="{{ route('User.All.Coupon.Deals') }}">All Coupon
                                                        Deals</a></li>
                                                <li><a
                                                        href="{{ route('User.See.Category/', $coupon->coupon_slug) }}">{{ $coupon->coupon_name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown hasmenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stores
                                            <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            @foreach ($stores as $store)
                                                <li>
                                                    <a href="{{ route('User.All.Store.See') }}">All Stores</a>
                                                    <a
                                                        href="{{ route('User.Store.See/', $store->store_slug) }}">{{ $store->store_name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @if (auth()->user())
                                        <li><a href="{{ route('User.Dashboard') }}" title="">Dashboard</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown hasmenu userpanel">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                                                src="{{ asset('assets/uploads/men.jpg') }}" alt="avatar"
                                                class="img-circle"> <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu start-right" role="menu">
                                            <li><a href="{{ route('User.Dashboard') }}"><i
                                                        class="fa fa-dashboard"></i>
                                                    Dashboard</a></li>
                                            <li><a href="user-favorites.html"><i class="fa fa-star"></i> Favorite
                                                    Stores</a></li>
                                            <li><a href="user-saved.html"><i class="fa fa-heart-o"></i> Saved
                                                    Coupons</a></li>
                                            <li><a href="user-submit.html"><i class="fa fa-bullhorn"></i> Submit
                                                    Coupon</a></li>
                                            <li>
                                            <li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-block btn-info"><i
                                                            class="fa fa-lock"></i>Sign Out</button>
                                                </form>
                                            </li>

                                    </li>
                                </ul>
                            @else
                                <li><a href="{{ route('login') }}" title="">Login</a></li>
                                <li><a href="{{ route('register') }}" title="">Register</a></li>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div
