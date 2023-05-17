<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="9lQReAOP7TYMbm5nNnK5b7NtKpmZuMGXAIriNN7M">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Some description for the page" />
    <meta property="og:title" content="Lezato : Restaurant Admin Laravel Template" />
    <meta property="og:description" content="Lezato | Dashboard" />
    <meta property="og:image" content="../social-image.html" />
    <meta name="format-detection" content="telephone=no">
    <title>Admin | Dashboard</title>
    {{-- css --}}
    <link href="{{ asset('admin/public/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/public/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/public/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="preloader">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="{{ route('LandingPage') }}" class="brand-logo">
                <img src="{{ asset('admin/public/images/logo.png') }}" height="60px" width="188px" alt="logo">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="nav-item">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Find something here......">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                                class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item recipe">
                                <form action="{{ route('logout') }}" method="Post">
                                    @csrf
                                    <button class="btn btn-primary btn-rounded">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        {{-- links --}}

        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="{{ route('Admin.Dashboard') }}" aria-expanded="false">
                            <i class="ti-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('Admin.Messages') }}" aria-expanded="false">
                            <i class="ti-comment"></i>
                            <span class="nav-text">User Messages</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('Admin.All.Users') }}" aria-expanded="false">
                            <i class="ti-user"></i>
                            <span class="nav-text">All Users</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="ti-menu-alt"></i>
                            <span class="nav-text">Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Create.Category') }}">Add New Category</a></li>
                            <li><a href="{{ route('Admin.All.Categories') }}">All Categories</a></li>
                            {{-- <li><a href="{{ route('Admin.Approved.Users') }}">Approved User's</a></li>
                            <li><a href="{{ route('Admin.Rejected.Users') }}">Rejected User's</a></li> --}}
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="ti-shopping-cart"></i>
                            <span class="nav-text">Store</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Add.Store') }}">Add New Store</a></li>
                            <li><a href="{{ route('Admin.All.Stores') }}">All Stores</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="ti-bag"></i>
                            <span class="nav-text">Coupon Deals</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Coupon.Deal') }}">Add Coupon</a></li>
                            <li><a href="{{ route('Admin.All.Coupon.Deals') }}">All Coupon Deals</a></li>
                            {{-- <li><a href="{{ route('Admin.Rejected.Widthraw') }}">Rejected Widthraw</a></li> --}}
                        </ul>
                    </li>
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="ti-user"></i>
                            <span class="nav-text">Profile</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('profile.edit') }}">Edit Profile</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary">Logout</button>
                        </form>
                    </li>
                </ul>
                <div class="copyright">
                    <p><strong>{{ env('APP_NAME') }} coypright</strong> © 2019 All Rights Reserved</p>
                </div>
            </div>
        </div>
