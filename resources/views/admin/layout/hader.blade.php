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
                        <a href="index.html">
                            <svg width="24" height="28" viewBox="0 0 24 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-primary"
                                    d="M10.123 17.0196H14.7278L17.0428 19.9893L19.3201 22.6346L23.6121 28H18.5568L15.6038 24.3815L14.0897 22.2353L10.123 17.0196ZM24 13.1266C24 15.9133 23.4703 18.284 22.4108 20.2389C21.3598 22.1937 19.9249 23.6869 18.1064 24.7184C16.2961 25.7415 14.2607 26.2531 12 26.2531C9.72263 26.2531 7.67883 25.7374 5.86861 24.7059C4.05839 23.6744 2.62774 22.1812 1.57664 20.2264C0.525548 18.2715 0 15.9049 0 13.1266C0 10.3399 0.525548 7.9691 1.57664 6.01426C2.62774 4.05942 4.05839 2.57041 5.86861 1.54724C7.67883 0.515746 9.72263 0 12 0C14.2607 0 16.2961 0.515746 18.1064 1.54724C19.9249 2.57041 21.3598 4.05942 22.4108 6.01426C23.4703 7.9691 24 10.3399 24 13.1266ZM18.5068 13.1266C18.5068 11.3215 18.2357 9.79917 17.6934 8.55972C17.1595 7.32026 16.4046 6.38028 15.4286 5.73975C14.4526 5.09923 13.3097 4.77897 12 4.77897C10.6903 4.77897 9.54745 5.09923 8.57143 5.73975C7.59541 6.38028 6.83629 7.32026 6.29406 8.55972C5.76017 9.79917 5.49322 11.3215 5.49322 13.1266C5.49322 14.9317 5.76017 16.454 6.29406 17.6934C6.83629 18.9329 7.59541 19.8728 8.57143 20.5134C9.54745 21.1539 10.6903 21.4742 12 21.4742C13.3097 21.4742 14.4526 21.1539 15.4286 20.5134C16.4046 19.8728 17.1595 18.9329 17.6934 17.6934C18.2357 16.454 18.5068 14.9317 18.5068 13.1266Z"
                                    fill="#5BC43A" />
                            </svg>
                            <span class="fs-5 ms-2">Zeshan</span>
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
                            <li><a class="ms-link active" href="index.html">My Dashboard</a></li>
                            <li><a class="ms-link" href="my-analytics.html">Analytics</a></li>
                            <li><a class="ms-link" href="my-project.html">My Project</a></li>
                            <li><a class="ms-link" href="my-wallet.html">Wallet</a></li>
                            <li><a class="ms-link" href="my-iot.html">Smart IOT</a></li>
                            <li><a class="ms-link" href="my-task.html">My Task</a></li>
                            <li><a class="ms-link" href="my-ecommerce.html">eCommerce</a></li>
                            <li><a class="ms-link" href="my-realestate.html">Real Estate</a></li>
                            <li><a class="ms-link" href="my-jobboard.html">Job Portal</a></li>
                            <li><a class="ms-link" href="my-crypto.html">Crypto</a></li>
                            <li><a class="ms-link" href="my-fitness.html">Fitness</a></li>
                            <li><a class="ms-link" href="university.html">University</a></li>
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
                            <li><a class="ms-link" href="app-calendar.html">Add Category</a></li>
                            <li><a class="ms-link" href="app-calendar.html">See Categories</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_pages" href="#">
                            <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path opacity="0.4"
                                    d="M14 4.5V11H13V4.5H11C10.6022 4.5 10.2206 4.34196 9.93934 4.06066C9.65804 3.77936 9.5 3.39782 9.5 3V1H4C3.73478 1 3.48043 1.10536 3.29289 1.29289C3.10536 1.48043 3 1.73478 3 2L8 11H3H2V2C2 1.46957 2.21071 0.960859 2.58579 0.585786C2.96086 0.210714 3.46957 0 4 0L9.5 0L14 4.5Z" />
                                <path opacity="0.9"
                                    d="M4.264 15.849V11.85H3.473V13.476H1.791V11.85H1V15.849H1.79V14.135H3.473V15.849H4.264Z" />
                                <path opacity="0.9"
                                    d="M6.515 15.849V12.512H7.652V11.85H4.588V12.512H5.721V15.849H6.515Z" />
                                <path opacity="0.9"
                                    d="M8.691 13.189V15.849H7.985V11.85H8.79L9.93 14.446H9.956L11.096 11.85H11.896V15.849H11.181V13.188H11.143L10.197 15.348H9.681L8.729 13.189H8.691Z" />
                                <path opacity="0.9"
                                    d="M15.097 15.175H13.401H13.4V11.85H12.61V15.849H15.097V15.175Z" />
                            </svg>
                            <span class="mx-3">More Pages</span>
                            <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu_pages">
                            <li><a class="ms-link" href="crafted-profile.html">My Profile</a></li>
                            <li><a class="ms-link" href="crafted-activity.html">User Activity</a></li>
                            <li><a class="ms-link" href="crafted-gallery.html">Image Gallery</a></li>
                            <li><a class="ms-link" href="crafted-ticket.html">Support Ticket</a></li>
                            <li><a class="ms-link" href="crafted-pricing.html">Pricing Table</a></li>
                            <li><a class="ms-link" href="crafted-search.html">Search Pages</a></li>
                            <li><a class="ms-link" href="crafted-map.html">World Map</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_auth" href="#">
                            <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <rect opacity="0.2" width="16" height="16" rx="2" />
                                <path opacity="0.7"
                                    d="M8 3.625C8.42435 3.625 8.83131 3.7567 9.13137 3.99112C9.43143 4.22554 9.6 4.54348 9.6 4.875V7.375H6.4V4.875C6.4 4.54348 6.56857 4.22554 6.86863 3.99112C7.16869 3.7567 7.57565 3.625 8 3.625ZM10.4 7.375V4.875C10.4 4.37772 10.1471 3.90081 9.69706 3.54917C9.24697 3.19754 8.63652 3 8 3C7.36348 3 6.75303 3.19754 6.30294 3.54917C5.85286 3.90081 5.6 4.37772 5.6 4.875V7.375C5.17565 7.375 4.76869 7.5067 4.46863 7.74112C4.16857 7.97554 4 8.29348 4 8.625V11.75C4 12.0815 4.16857 12.3995 4.46863 12.6339C4.76869 12.8683 5.17565 13 5.6 13H10.4C10.8243 13 11.2313 12.8683 11.5314 12.6339C11.8314 12.3995 12 12.0815 12 11.75V8.625C12 8.29348 11.8314 7.97554 11.5314 7.74112C11.2313 7.5067 10.8243 7.375 10.4 7.375Z" />
                            </svg>
                            <span class="mx-3">Authentication</span>
                            <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu_auth">
                            <li><a class="ms-link" href="auth-signin.html">Sign in</a></li>
                            <li><a class="ms-link" href="auth-signup.html">Sign up</a></li>
                            <li><a class="ms-link" href="auth-password-reset.html">Password reset</a></li>
                            <li><a class="ms-link" href="auth-two-step.html">2-Step Authentication</a></li>
                            <li><a class="ms-link" href="auth-lockscreen.html">Lockscreen</a></li>
                            <li><a class="ms-link" href="auth-maintenance.html">Maintenance</a></li>
                            <li><a class="ms-link" href="auth-404.html">404</a></li>
                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_landing" href="#">
                            <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" class="bi bi-front">
                                <path opacity="0.8"
                                    d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2H5z" />
                            </svg>
                            <span class="mx-3">Landing Pages</span>
                            <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu_landing">
                            <li><a class="ms-link" href="landing-realestate/lan-realestate.html">Real Estate</a></li>
                            <li><a class="ms-link" href="landing-jobboard/lan-jobboard.html">Job Board</a></li>
                            <li><a class="ms-link" href="landing-ecommerce/lan-ecommerce.html">eCommerce</a></li>
                            <li><a class="ms-link" href="landing-crypto/lan-crypto.html">Crypto</a></li>
                            <li><a class="ms-link" href="landing-fitness/lan-fitness.html">Fitness</a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <!--[ Start:: Documentation ]-->
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_docs" href="#">
                            <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path opacity="0.2"
                                    d="M6.5 0C6.10218 0 5.72064 0.158035 5.43934 0.43934C5.15804 0.720644 5 1.10218 5 1.5V2.5C5 2.89782 5.15804 3.27936 5.43934 3.56066C5.72064 3.84196 6.10218 4 6.5 4H9.5C9.89782 4 10.2794 3.84196 10.5607 3.56066C10.842 3.27936 11 2.89782 11 2.5V1.5C11 1.10218 10.842 0.720644 10.5607 0.43934C10.2794 0.158035 9.89782 0 9.5 0L6.5 0ZM9.5 1C9.63261 1 9.75979 1.05268 9.85355 1.14645C9.94732 1.24021 10 1.36739 10 1.5V2.5C10 2.63261 9.94732 2.75979 9.85355 2.85355C9.75979 2.94732 9.63261 3 9.5 3H6.5C6.36739 3 6.24021 2.94732 6.14645 2.85355C6.05268 2.75979 6 2.63261 6 2.5V1.5C6 1.36739 6.05268 1.24021 6.14645 1.14645C6.24021 1.05268 6.36739 1 6.5 1H9.5Z" />
                                <path opacity="0.2"
                                    d="M4 1.5H3C2.46957 1.5 1.96086 1.71071 1.58579 2.08579C1.21071 2.46086 1 2.96957 1 3.5V14C1 14.5304 1.21071 15.0391 1.58579 15.4142C1.96086 15.7893 2.46957 16 3 16H13C13.5304 16 14.0391 15.7893 14.4142 15.4142C14.7893 15.0391 15 14.5304 15 14V3.5C15 2.96957 14.7893 2.46086 14.4142 2.08579C14.0391 1.71071 13.5304 1.5 13 1.5H12V2.5C12 2.8283 11.9353 3.15339 11.8097 3.45671C11.6841 3.76002 11.4999 4.03562 11.2678 4.26777C11.0356 4.49991 10.76 4.68406 10.4567 4.8097C10.1534 4.93534 9.8283 5 9.5 5H6.5C5.83696 5 5.20107 4.73661 4.73223 4.26777C4.26339 3.79893 4 3.16304 4 2.5V1.5Z" />
                                <path opacity="0.9"
                                    d="M5.5 7C5.36739 7 5.24021 7.05268 5.14645 7.14645C5.05268 7.24021 5 7.36739 5 7.5C5 7.63261 5.05268 7.75979 5.14645 7.85355C5.24021 7.94732 5.36739 8 5.5 8H10.5C10.6326 8 10.7598 7.94732 10.8536 7.85355C10.9473 7.75979 11 7.63261 11 7.5C11 7.36739 10.9473 7.24021 10.8536 7.14645C10.7598 7.05268 10.6326 7 10.5 7H5.5ZM5 9.5C5 9.36739 5.05268 9.24021 5.14645 9.14645C5.24021 9.05268 5.36739 9 5.5 9H10.5C10.6326 9 10.7598 9.05268 10.8536 9.14645C10.9473 9.24021 11 9.36739 11 9.5C11 9.63261 10.9473 9.75979 10.8536 9.85355C10.7598 9.94732 10.6326 10 10.5 10H5.5C5.36739 10 5.24021 9.94732 5.14645 9.85355C5.05268 9.75979 5 9.63261 5 9.5ZM5 11.5C5 11.3674 5.05268 11.2402 5.14645 11.1464C5.24021 11.0527 5.36739 11 5.5 11H7.5C7.63261 11 7.75979 11.0527 7.85355 11.1464C7.94732 11.2402 8 11.3674 8 11.5C8 11.6326 7.94732 11.7598 7.85355 11.8536C7.75979 11.9473 7.63261 12 7.5 12H5.5C5.36739 12 5.24021 11.9473 5.14645 11.8536C5.05268 11.7598 5 11.6326 5 11.5Z" />
                            </svg>
                            <span class="mx-3">Documentation</span>
                            <span class="arrow fa fa-angle-down ms-auto text-end"></span>
                        </a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu_docs">
                            <li><a class="ms-link" href="docs/index.html">Getting Started</a></li>
                            <li><a class="ms-link" href="docs/widget.html">Widget's</a></li>
                            <li><a class="ms-link" href="docs/charts.html">Chart's</a></li>
                            <li><a class="ms-link" href="docs/form.html">Form Elements</a></li>
                            <li><a class="ms-link" href="docs/fonticon.html">Font icon</a></li>
                            <li><a class="ms-link" href="docs/plugins.html">Vendor Plugins</a></li>
                            <li><a class="ms-link" href="docs/bootstrap.html">Bootstrap UI</a></li>
                        </ul>
                    </li>
                    <!--[ Start:: Changelog ]-->
                    <li>
                        <a class="m-link" href="changelog.html">
                            <svg width="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path opacity="0.6"
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path opacity="0.2"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                            <span class="mx-3">Changelog</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
