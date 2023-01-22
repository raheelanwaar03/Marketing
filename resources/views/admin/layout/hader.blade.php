<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
    <meta name="keyword" content="QBoat, Bootstrap 5, Admin Dashboard, Admin Theme">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/assets/bundles/bootstrapdatepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/css/style.css') }}">
    <script src="{{ asset('assets/assets/js/plugins.js') }}"></script>
    {{-- Datatable cdns --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body class="qboat admin" data-qboat="theme-DodgerBlue">
    <!--[ Start:: main sidebar menu link ]-->
    <aside class="sidebar ">
        <div class="container-fluid">
            <!--[ sidebar:: menu list ]-->
            <div class="flex-grow-1">
                <ul class="menu-list mt-3 rounded-4">
                    <!--[ Start:: brand logo and name ]-->
                    <li class="brand-icon mb-3 py-1">
                        <a href="{{ route('LandingPage') }}">
                            <img src="{{ asset('assets/images/favicon.ico') }}" alt="">
                            <span class="fs-5 ms-2">{{ auth()->user()->name }}</span>
                        </a>
                        <button type="button" class="btn btn-link px-0" data-bs-toggle="modal"
                            data-bs-target="#full_screen_menu" data-toggle="tooltip" title="Grid Fullscreen Menu"
                            data-bs-placement="bottom">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-muted"
                                    d="M3.5 15C4.16304 15 4.79893 14.7366 5.26777 14.2678C5.73661 13.7989 6 13.163 6 12.5C6 11.837 5.73661 11.2011 5.26777 10.7322C4.79893 10.2634 4.16304 10 3.5 10C2.83696 10 2.20107 10.2634 1.73223 10.7322C1.26339 11.2011 1 11.837 1 12.5C1 13.163 1.26339 13.7989 1.73223 14.2678C2.20107 14.7366 2.83696 15 3.5 15ZM12.5 6C13.163 6 13.7989 5.73661 14.2678 5.26777C14.7366 4.79893 15 4.16304 15 3.5C15 2.83696 14.7366 2.20107 14.2678 1.73223C13.7989 1.26339 13.163 1 12.5 1C11.837 1 11.2011 1.26339 10.7322 1.73223C10.2634 2.20107 10 2.83696 10 3.5C10 4.16304 10.2634 4.79893 10.7322 5.26777C11.2011 5.73661 11.837 6 12.5 6ZM12.5 15C11.837 15 11.2011 14.7366 10.7322 14.2678C10.2634 13.7989 10 13.163 10 12.5C10 11.837 10.2634 11.2011 10.7322 10.7322C11.2011 10.2634 11.837 10 12.5 10C13.163 10 13.7989 10.2634 14.2678 10.7322C14.7366 11.2011 15 11.837 15 12.5C15 13.163 14.7366 13.7989 14.2678 14.2678C13.7989 14.7366 13.163 15 12.5 15ZM16 3.5C16 4.42826 15.6313 5.3185 14.9749 5.97487C14.3185 6.63125 13.4283 7 12.5 7C11.5717 7 10.6815 6.63125 10.0251 5.97487C9.36875 5.3185 9 4.42826 9 3.5C9 2.57174 9.36875 1.6815 10.0251 1.02513C10.6815 0.368749 11.5717 0 12.5 0C13.4283 0 14.3185 0.368749 14.9749 1.02513C15.6313 1.6815 16 2.57174 16 3.5ZM7 12.5C7 13.4283 6.63125 14.3185 5.97487 14.9749C5.3185 15.6313 4.42826 16 3.5 16C2.57174 16 1.6815 15.6313 1.02513 14.9749C0.368749 14.3185 0 13.4283 0 12.5C0 11.5717 0.368749 10.6815 1.02513 10.0251C1.6815 9.36875 2.57174 9 3.5 9C4.42826 9 5.3185 9.36875 5.97487 10.0251C6.63125 10.6815 7 11.5717 7 12.5ZM12.5 16C13.4283 16 14.3185 15.6313 14.9749 14.9749C15.6313 14.3185 16 13.4283 16 12.5C16 11.5717 15.6313 10.6815 14.9749 10.0251C14.3185 9.36875 13.4283 9 12.5 9C11.5717 9 10.6815 9.36875 10.0251 10.0251C9.36875 10.6815 9 11.5717 9 12.5C9 13.4283 9.36875 14.3185 10.0251 14.9749C10.6815 15.6313 11.5717 16 12.5 16Z" />
                                <path class="fill-primary"
                                    d="M5.97487 5.97487C5.3185 6.63125 4.42826 7 3.5 7C2.57174 7 1.6815 6.63125 1.02513 5.97487C0.368749 5.3185 0 4.42826 0 3.5C0 2.57174 0.368749 1.6815 1.02513 1.02513C1.6815 0.368749 2.57174 0 3.5 0C4.42826 0 5.3185 0.368749 5.97487 1.02513C6.63125 1.6815 7 2.57174 7 3.5C7 4.42826 6.63125 5.3185 5.97487 5.97487Z" />
                            </svg>
                        </button>
                    </li>
                    <!--[ Start:: dashboard ]-->
                    <li class="collapsed">
                        <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#menu_dashboard"
                            href="#">
                            <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path opacity="0.2"
                                    d="M8.186 1.11303C8.06662 1.06519 7.93338 1.06519 7.814 1.11303L1.846 3.50003L8 5.96103L14.154 3.50003L8.186 1.11303ZM15 4.23903L8.5 6.83903V14.761L15 12.161V4.24003V4.23903ZM7.5 14.762V6.83803L1 4.23903V12.162L7.5 14.762V14.762ZM7.443 0.184033C7.80057 0.041032 8.19943 0.041032 8.557 0.184033L15.686 3.03603C15.7787 3.07318 15.8581 3.13723 15.9141 3.21992C15.9701 3.30262 16 3.40018 16 3.50003V12.162C15.9999 12.3619 15.9399 12.5571 15.8278 12.7225C15.7157 12.8879 15.5566 13.0159 15.371 13.09L8.186 15.964C8.06662 16.0119 7.93338 16.0119 7.814 15.964L0.63 13.09C0.444251 13.0161 0.284942 12.8881 0.172642 12.7227C0.0603417 12.5573 0.000206329 12.362 0 12.162L0 3.50003C2.32399e-05 3.40018 0.0299437 3.30262 0.085907 3.21992C0.14187 3.13723 0.221313 3.07318 0.314 3.03603L7.443 0.184033Z" />
                                <path opacity="0.8" d="M8 7L1 4V12.5L8 15V7Z" />
                            </svg>
                            <span class="mx-3">Dashboard</span>
                            <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse show" id="menu_dashboard">
                            <li><a class="ms-link active" href="{{ route('Admin.Dashboard') }}">My Dashboard</a></li>
                        </ul>
                    </li>
                    <!--[ Start:: Account ]-->
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_apps" href="#">
                            <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path opacity="0.2"
                                    d="M8.186 1.11303C8.06662 1.06519 7.93338 1.06519 7.814 1.11303L1.846 3.50003L8 5.96103L14.154 3.50003L8.186 1.11303ZM15 4.23903L8.5 6.83903V14.761L15 12.161V4.24003V4.23903ZM7.5 14.762V6.83803L1 4.23903V12.162L7.5 14.762V14.762ZM7.443 0.184033C7.80057 0.041032 8.19943 0.041032 8.557 0.184033L15.686 3.03603C15.7787 3.07318 15.8581 3.13723 15.9141 3.21992C15.9701 3.30262 16 3.40018 16 3.50003V12.162C15.9999 12.3619 15.9399 12.5571 15.8278 12.7225C15.7157 12.8879 15.5566 13.0159 15.371 13.09L8.186 15.964C8.06662 16.0119 7.93338 16.0119 7.814 15.964L0.63 13.09C0.444251 13.0161 0.284942 12.8881 0.172642 12.7227C0.0603417 12.5573 0.000206329 12.362 0 12.162L0 3.50003C2.32399e-05 3.40018 0.0299437 3.30262 0.085907 3.21992C0.14187 3.13723 0.221313 3.07318 0.314 3.03603L7.443 0.184033Z" />
                                <path opacity="0.8" d="M8 7L1 4V12.5L8 15V7Z" />
                            </svg>
                            <span class="mx-3">Category</span>
                            <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu_apps">
                            <li><a class="ms-link" href="{{ route('Admin.Create.Category') }}">Add Category</a></li>
                            <li><a class="ms-link" href="{{ route('Admin.All.Categories') }}">All Categories</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_pages" href="#">
                            {{-- icon --}}
                            <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path opacity="0.2"
                                    d="M8.186 1.11303C8.06662 1.06519 7.93338 1.06519 7.814 1.11303L1.846 3.50003L8 5.96103L14.154 3.50003L8.186 1.11303ZM15 4.23903L8.5 6.83903V14.761L15 12.161V4.24003V4.23903ZM7.5 14.762V6.83803L1 4.23903V12.162L7.5 14.762V14.762ZM7.443 0.184033C7.80057 0.041032 8.19943 0.041032 8.557 0.184033L15.686 3.03603C15.7787 3.07318 15.8581 3.13723 15.9141 3.21992C15.9701 3.30262 16 3.40018 16 3.50003V12.162C15.9999 12.3619 15.9399 12.5571 15.8278 12.7225C15.7157 12.8879 15.5566 13.0159 15.371 13.09L8.186 15.964C8.06662 16.0119 7.93338 16.0119 7.814 15.964L0.63 13.09C0.444251 13.0161 0.284942 12.8881 0.172642 12.7227C0.0603417 12.5573 0.000206329 12.362 0 12.162L0 3.50003C2.32399e-05 3.40018 0.0299437 3.30262 0.085907 3.21992C0.14187 3.13723 0.221313 3.07318 0.314 3.03603L7.443 0.184033Z" />
                                <path opacity="0.8" d="M8 7L1 4V12.5L8 15V7Z" />
                            </svg>
                            <span class="mx-3">Store</span>
                            <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu_pages">
                            <li><a class="ms-link" href="{{ route('Admin.Add.Store') }}">Add Store</a></li>
                            <li><a class="ms-link" href="{{ route('Admin.All.Stores') }}">All Stores</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_auth" href="#">
                            {{-- icon --}}
                            <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path opacity="0.2"
                                    d="M8.186 1.11303C8.06662 1.06519 7.93338 1.06519 7.814 1.11303L1.846 3.50003L8 5.96103L14.154 3.50003L8.186 1.11303ZM15 4.23903L8.5 6.83903V14.761L15 12.161V4.24003V4.23903ZM7.5 14.762V6.83803L1 4.23903V12.162L7.5 14.762V14.762ZM7.443 0.184033C7.80057 0.041032 8.19943 0.041032 8.557 0.184033L15.686 3.03603C15.7787 3.07318 15.8581 3.13723 15.9141 3.21992C15.9701 3.30262 16 3.40018 16 3.50003V12.162C15.9999 12.3619 15.9399 12.5571 15.8278 12.7225C15.7157 12.8879 15.5566 13.0159 15.371 13.09L8.186 15.964C8.06662 16.0119 7.93338 16.0119 7.814 15.964L0.63 13.09C0.444251 13.0161 0.284942 12.8881 0.172642 12.7227C0.0603417 12.5573 0.000206329 12.362 0 12.162L0 3.50003C2.32399e-05 3.40018 0.0299437 3.30262 0.085907 3.21992C0.14187 3.13723 0.221313 3.07318 0.314 3.03603L7.443 0.184033Z" />
                                <path opacity="0.8" d="M8 7L1 4V12.5L8 15V7Z" />
                            </svg>
                            <span class="mx-3">Coupon</span>
                            <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu_auth">
                            <li><a class="ms-link" href="{{ route('Admin.Coupon.Deal') }}">Add Coupon</a></li>
                            <li><a class="ms-link" href="{{ route('Admin.All.Coupon.Deals') }}">All Coupon Deals</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                </ul>
            </div>
        </div>
    </aside>
