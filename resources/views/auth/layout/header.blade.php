<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>{{ env('APP_NAME') }} | Responsive Coupon Code Site Templates</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('assets/imagesfavicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/imagesapple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/imagesapple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/imagesapple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/imagesapple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/imagesapple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/imagesapple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/imagesapple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/imagesapple-touch-icon-152x152.png') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css')}}">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors.css') }}">
    <!-- CUSTOM STYLES -->
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
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin11.css') }}"
        title="skin11" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/css/skins/skin12.css') }}"
        title="skin12" media="all" />

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
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <div class="header">
            <div class="logo-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <a class="navbar-brand" href="index.html">{{ env('APP_NAME') }} <small>Discount Coupon
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
                                    <li><a class="active" href="{{ route('LandingPage') }}" title="">Home</a></li>
                                    {{-- <li><a href="{{ route('LandingPage.ContactUs') }}" title="">Contact Us</a></li>
                                    <li class="dropdown hasmenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <span
                                                class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="store-single.html">All Categories</a></li>
                                            @forelse ($categorys as $category)
                                            <li><a href="store-single.html">{{ $category->category_name }}</a></li>
                                            @empty
                                                <h4>No more category</h4>
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li class="dropdown hasmenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stores <span
                                                class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">All Stores</a></li>
                                            @forelse ($stores as $store)
                                            <li><a href="#">{{ $store->store_name }}</a></li>
                                            @empty
                                            <h4>No more Store</h4>
                                            @endforelse
                                        </ul>
                                    </li> --}}
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
