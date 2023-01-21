@extends('admin.layout.app')

@section('content')
    <div class="page order-2 flex-grow-1">
        <!--[ Start:: page header link ]-->
        <header class="page-header sticky-top">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <a class="me-4 d-lg-inline-flex d-none menu-toggle" href="#" title="Sidebar Toggle">
                        <svg width="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill="var(--accent-color)"
                                d="M14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L12.4142 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H12.4142L14.7071 15.2929C15.0976 15.6834 15.0976 16.3166 14.7071 16.7071C14.3166 17.0976 13.6834 17.0976 13.2929 16.7071L9.29289 12.7071C8.90237 12.3166 8.90237 11.6834 9.29289 11.2929L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289Z" />
                            <path fill="var(--accent-color)" fill-opacity="0.3"
                                d="M4 3C4.55228 3 5 3.44772 5 4V20C5 20.5523 4.55228 21 4 21C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3Z" />
                        </svg>
                    </a>
                    <a class="me-4 d-lg-none d-inline-flex text-decoration-none text-accent align-items-center"
                        href="index.html">
                        <svg width="24" height="28" viewBox="0 0 24 28" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-accent"
                                d="M10.123 17.0196H14.7278L17.0428 19.9893L19.3201 22.6346L23.6121 28H18.5568L15.6038 24.3815L14.0897 22.2353L10.123 17.0196ZM24 13.1266C24 15.9133 23.4703 18.284 22.4108 20.2389C21.3598 22.1937 19.9249 23.6869 18.1064 24.7184C16.2961 25.7415 14.2607 26.2531 12 26.2531C9.72263 26.2531 7.67883 25.7374 5.86861 24.7059C4.05839 23.6744 2.62774 22.1812 1.57664 20.2264C0.525548 18.2715 0 15.9049 0 13.1266C0 10.3399 0.525548 7.9691 1.57664 6.01426C2.62774 4.05942 4.05839 2.57041 5.86861 1.54724C7.67883 0.515746 9.72263 0 12 0C14.2607 0 16.2961 0.515746 18.1064 1.54724C19.9249 2.57041 21.3598 4.05942 22.4108 6.01426C23.4703 7.9691 24 10.3399 24 13.1266ZM18.5068 13.1266C18.5068 11.3215 18.2357 9.79917 17.6934 8.55972C17.1595 7.32026 16.4046 6.38028 15.4286 5.73975C14.4526 5.09923 13.3097 4.77897 12 4.77897C10.6903 4.77897 9.54745 5.09923 8.57143 5.73975C7.59541 6.38028 6.83629 7.32026 6.29406 8.55972C5.76017 9.79917 5.49322 11.3215 5.49322 13.1266C5.49322 14.9317 5.76017 16.454 6.29406 17.6934C6.83629 18.9329 7.59541 19.8728 8.57143 20.5134C9.54745 21.1539 10.6903 21.4742 12 21.4742C13.3097 21.4742 14.4526 21.1539 15.4286 20.5134C16.4046 19.8728 17.1595 18.9329 17.6934 17.6934C18.2357 16.454 18.5068 14.9317 18.5068 13.1266Z"
                                fill="#5BC43A" />
                        </svg>
                        <span class="fs-4 ps-2 d-none d-sm-inline-flex">Boat</span>
                    </a>
                    <!-- Example single danger button -->
                    <ul class="header-menu flex-grow-1">
                        <!--[ Start:: user detail ]-->
                        <li class="dropdown user">
                            <a class="dropdown-toggle text-decoration-none" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" title="User">
                                <img class="avatar sm rounded-circle shadow border border-2"
                                    src="{{ asset('assets/assets/img/profile_av.png') }}" alt="avatar">
                                <span
                                    class="ps-1 fs-6 text-white d-none d-lg-inline-block">{{ auth()->user()->name }}</span>
                            </a>
                        </li>
                        <!--[ Start:: setting toggle ]-->
                        <li class="dropdown">
                            <a class="dropdown-toggle text-white" href="#settings" data-bs-toggle="offcanvas"
                                role="button">
                                <svg width="20" viewBox="0 0 18 18" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.3" cx="11" cy="11" r="4" />
                                    <path
                                        d="M8.9999 5.34825C8.52034 5.34825 8.04548 5.44271 7.60243 5.62622C7.15938 5.80974 6.75681 6.07873 6.41772 6.41782C6.07862 6.75692 5.80964 7.15949 5.62612 7.60254C5.4426 8.04559 5.34814 8.52045 5.34814 9C5.34814 9.47956 5.4426 9.95441 5.62612 10.3975C5.80964 10.8405 6.07862 11.2431 6.41772 11.5822C6.75681 11.9213 7.15938 12.1903 7.60243 12.3738C8.04548 12.5573 8.52034 12.6518 8.9999 12.6518C9.9684 12.6518 10.8972 12.267 11.5821 11.5822C12.2669 10.8973 12.6516 9.96851 12.6516 9C12.6516 8.0315 12.2669 7.10266 11.5821 6.41782C10.8972 5.73299 9.9684 5.34825 8.9999 5.34825ZM6.47315 9C6.47315 8.32987 6.73936 7.68718 7.21321 7.21332C7.68707 6.73946 8.32976 6.47325 8.9999 6.47325C9.67003 6.47325 10.3127 6.73946 10.7866 7.21332C11.2604 7.68718 11.5266 8.32987 11.5266 9C11.5266 9.67014 11.2604 10.3128 10.7866 10.7867C10.3127 11.2605 9.67003 11.5268 8.9999 11.5268C8.32976 11.5268 7.68707 11.2605 7.21321 10.7867C6.73936 10.3128 6.47315 9.67014 6.47315 9Z" />
                                    <path
                                        d="M11.0204 1.51082C10.4276 -0.502934 7.5723 -0.502934 6.97943 1.51082L6.87368 1.86969C6.83227 2.01026 6.75994 2.13979 6.66197 2.24877C6.564 2.35775 6.44289 2.44343 6.30751 2.49952C6.17213 2.55562 6.02591 2.58071 5.87957 2.57295C5.73324 2.56519 5.59049 2.52478 5.4618 2.45469L5.1333 2.27469C3.2883 1.27119 1.27118 3.28944 2.2758 5.13332L2.45468 5.46182C2.52477 5.59051 2.56518 5.73325 2.57293 5.87959C2.58069 6.02593 2.5556 6.17214 2.49951 6.30752C2.44342 6.44291 2.35774 6.56402 2.24875 6.66198C2.13977 6.75995 2.01025 6.83229 1.86968 6.87369L1.5108 6.97944C-0.502949 7.57232 -0.502949 10.4276 1.5108 11.0204L1.86968 11.1262C2.01025 11.1676 2.13977 11.2399 2.24875 11.3379C2.35774 11.4359 2.44342 11.557 2.49951 11.6924C2.5556 11.8277 2.58069 11.974 2.57293 12.1203C2.56518 12.2666 2.52477 12.4094 2.45468 12.5381L2.27468 12.8666C1.27118 14.7116 3.2883 16.7298 5.1333 15.7241L5.4618 15.5452C5.59049 15.4751 5.73324 15.4347 5.87957 15.4269C6.02591 15.4192 6.17213 15.4443 6.30751 15.5004C6.44289 15.5565 6.564 15.6421 6.66197 15.7511C6.75994 15.8601 6.83227 15.9896 6.87368 16.1302L6.97943 16.4891C7.5723 18.5028 10.4276 18.5028 11.0204 16.4891L11.1262 16.1302C11.1676 15.9896 11.2399 15.8601 11.3379 15.7511C11.4358 15.6421 11.557 15.5565 11.6923 15.5004C11.8277 15.4443 11.9739 15.4192 12.1203 15.4269C12.2666 15.4347 12.4094 15.4751 12.5381 15.5452L12.8666 15.7252C14.7116 16.7298 16.7298 14.7104 15.7241 12.8666L15.5452 12.5381C15.4751 12.4094 15.4347 12.2666 15.4269 12.1203C15.4192 11.974 15.4442 11.8277 15.5003 11.6924C15.5564 11.557 15.6421 11.4359 15.7511 11.3379C15.8601 11.2399 15.9896 11.1676 16.1302 11.1262L16.489 11.0204C18.5028 10.4276 18.5028 7.57232 16.489 6.97944L16.1302 6.87369C15.9896 6.83229 15.8601 6.75995 15.7511 6.66198C15.6421 6.56402 15.5564 6.44291 15.5003 6.30752C15.4442 6.17214 15.4192 6.02593 15.4269 5.87959C15.4347 5.73325 15.4751 5.59051 15.5452 5.46182L15.7252 5.13332C16.7298 3.28832 14.7104 1.27119 12.8666 2.27582L12.5381 2.45469C12.4094 2.52478 12.2666 2.56519 12.1203 2.57295C11.9739 2.58071 11.8277 2.55562 11.6923 2.49952C11.557 2.44343 11.4358 2.35775 11.3379 2.24877C11.2399 2.13979 11.1676 2.01026 11.1262 1.86969L11.0204 1.51082ZM8.0583 1.82919C8.33505 0.889816 9.6648 0.889816 9.94155 1.82919L10.0473 2.18807C10.1362 2.48966 10.2915 2.76754 10.5017 3.00133C10.712 3.23512 10.9719 3.41889 11.2624 3.53917C11.5529 3.65945 11.8666 3.71319 12.1806 3.69645C12.4946 3.67972 12.8009 3.59292 13.0769 3.44244L13.4043 3.26244C14.2638 2.79557 15.2043 3.73494 14.7363 4.59557L14.5574 4.92407C14.4072 5.20017 14.3206 5.5064 14.304 5.8203C14.2875 6.13421 14.3414 6.44784 14.4617 6.73822C14.5821 7.0286 14.7659 7.28837 14.9997 7.49849C15.2335 7.70861 15.5114 7.86376 15.8129 7.95257L16.1707 8.05832C17.1101 8.33507 17.1101 9.66482 16.1707 9.94157L15.8118 10.0473C15.5102 10.1362 15.2323 10.2915 14.9985 10.5017C14.7648 10.712 14.581 10.9719 14.4607 11.2624C14.3404 11.5529 14.2867 11.8667 14.3034 12.1806C14.3202 12.4946 14.4069 12.8009 14.5574 13.0769L14.7374 13.4043C15.2043 14.2638 14.2649 15.2043 13.4043 14.7363L13.0769 14.5574C12.8008 14.407 12.4944 14.3202 12.1804 14.3036C11.8664 14.2869 11.5526 14.3407 11.2621 14.4611C10.9715 14.5815 10.7116 14.7654 10.5014 14.9993C10.2912 15.2332 10.1361 15.5112 10.0473 15.8129L9.94155 16.1707C9.6648 17.1101 8.33505 17.1101 8.0583 16.1707L7.95255 15.8118C7.86361 15.5104 7.70837 15.2327 7.4982 14.999C7.28802 14.7653 7.02824 14.5816 6.73788 14.4613C6.44751 14.3411 6.13392 14.2873 5.82008 14.3039C5.50623 14.3205 5.20008 14.4072 4.92405 14.5574L4.59555 14.7374C3.73605 15.2043 2.79555 14.2649 3.26355 13.4043L3.44243 13.0769C3.59312 12.8008 3.68008 12.4945 3.69693 12.1804C3.71378 11.8662 3.66008 11.5523 3.53979 11.2617C3.41949 10.971 3.23564 10.711 3.00174 10.5007C2.76783 10.2903 2.4898 10.135 2.18805 10.0462L1.82918 9.94044C0.889801 9.66369 0.889801 8.33394 1.82918 8.05719L2.18805 7.95144C2.48933 7.86246 2.76691 7.70725 3.00046 7.49715C3.23401 7.28706 3.41764 7.0274 3.53789 6.73718C3.65814 6.44696 3.71197 6.13352 3.69546 5.81981C3.67894 5.5061 3.59249 5.20005 3.44243 4.92407L3.26243 4.59557C2.79555 3.73607 3.73493 2.79557 4.59555 3.26357L4.92405 3.44244C5.20008 3.59271 5.50623 3.67934 5.82008 3.69596C6.13392 3.71259 6.44751 3.6588 6.73788 3.53853C7.02824 3.41827 7.28802 3.23457 7.4982 3.0009C7.70837 2.76723 7.86361 2.4895 7.95255 2.18807L8.0583 1.82919Z" />
                                </svg>
                            </a>
                        </li>
                        <li class="dropdown d-block d-lg-none">
                            <button class="btn btn-sm btn-white sidebar-toggle ms-3" type="button"><i
                                    class="fa fa-bars"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="NotificationsDiv">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Notifications</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body notification custom_scroll">
                <ul class="nav nav-tabs tab-card" role="tablist">
                    <li class="nav-item flex-fill text-center"><a class="nav-link active" data-bs-toggle="tab"
                            href="#noti_tab_all" role="tab">All</a></li>
                    <li class="nav-item flex-fill text-center"><a class="nav-link" data-bs-toggle="tab" href="#noti_tab_msg"
                            role="tab">Message</a></li>
                    <li class="nav-item flex-fill text-center"><a class="nav-link" data-bs-toggle="tab"
                            href="#noti_tab_archive" role="tab">Archive</a></li>
                </ul>
                <div class="tab-content mt-4">
                    <div class="tab-pane fade show active" id="noti_tab_all" role="tabpanel">
                        <ul class="list-group list-group-flush list-group-custom mb-0">
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <div class="avatar sm rounded no-thumbnail"><i class="fa fa-thumbs-up fa-lg"></i>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <p class="mb-0">Your New Campaign <strong class="text-primary">Holiday
                                                Sale</strong> is approved.</p>
                                        <small>11:30 AM Today</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex">
                                    <img class="avatar sm rounded" src="assets/img/xs/avatar1.jpg" alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Tina Harris</span>
                                            <small>2MIN</small>
                                        </p>
                                        <span>is requesting to upgrade Plan</span>
                                        <div class="mt-2">
                                            <a href="#" class="btn btn-sm bg-dark text-muted">Accept</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary">Decline</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <div class="avatar sm rounded no-thumbnail"><i class="fa fa-pie-chart fa-lg"></i>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <p class="mb-0">Website visits from Twitter is <strong class="text-danger">27%
                                                higher</strong> than last week.</p>
                                        <small>04:00 PM Today</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <img class="avatar sm rounded" src="{{ asset('assets/assets/img/xs/avatar3.jpg') }}"
                                        alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Elsie Melendez</span>
                                            <small>1HR</small>
                                        </p>
                                        <span>There are many variations of passages</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <img class="avatar sm rounded" src="{{ asset('assets/assets/img/xs/avatar4.jpg') }}"
                                        alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Silva Foster</span>
                                            <small>1DAY</small>
                                        </p>
                                        <span>Contrary to popular belief <span class="badge bg-danger">Code</span></span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <div class="avatar sm rounded no-thumbnail"><i class="fa fa-info-circle fa-lg"></i>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <p class="mb-0">Campaign <strong class="text-primary">Holiday Sale</strong>
                                            is nearly reach budget limit.</p>
                                        <small>10:00 AM Today</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <div class="avatar sm rounded no-thumbnail"><i class="fa fa-warning fa-lg"></i>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <p class="mb-0"><strong class="text-warning">Error</strong> on website
                                            analytics configurations</p>
                                        <small>Yesterday</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="noti_tab_msg" role="tabpanel">
                        <ul class="list-group list-group-flush list-group-custom mb-0">
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <img class="avatar sm rounded" src="{{ asset('assets/assets/img/xs/avatar5.jpg') }}"
                                        alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Joseph Strickland</span>
                                            <small>13MIN</small>
                                        </p>
                                        <span>making it over 2000 years old</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <img class="avatar sm rounded" src="{{ asset('assets/assets/img/xs/avatar6.jpg') }}"
                                        alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Elsie Melendez</span>
                                            <small>1HR</small>
                                        </p>
                                        <span>There are many variations of passages</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex">
                                    <img class="avatar sm rounded" src="{{ asset('assets/assets/img/xs/avatar1.jpg') }}"
                                        alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Tina Harris</span>
                                            <small>2MIN</small>
                                        </p>
                                        <span>is requesting to upgrade Plan</span>
                                        <div class="mt-2">
                                            <a href="#" class="btn btn-sm bg-dark text-muted">Accept</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary">Decline</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <div class="avatar sm rounded no-thumbnail">PT</div>
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Margo Witt</span>
                                            <small>13MIN</small>
                                        </p>
                                        <span>It is a long established fact that a reader will be distracted</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <img class="avatar sm rounded" src="{{ asset('assets/assets/img/xs/avatar3.jpg') }}"
                                        alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Elsie Melendez</span>
                                            <small>1HR</small>
                                        </p>
                                        <span>There are many variations of passages</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <img class="avatar sm rounded" src="{{ asset('assets/assets/img/xs/avatar4.jpg') }}"
                                        alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Carmen Goh</span>
                                            <small>1DAY</small>
                                        </p>
                                        <span>Update code in GitHub</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0);" class="d-flex">
                                    <img class="avatar sm rounded" src="{{ asset('assets/assets/img/xs/avatar7.jpg') }}"
                                        alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="d-flex justify-content-between mb-0"><span>Barber Johnson</span>
                                            <small>1DAY</small>
                                        </p>
                                        <span>The generated Lorem Ipsum</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="noti_tab_archive" role="tabpanel">
                        <ul class="list-group list-group-flush list-group-custom mb-0">
                            <li class="list-group-item">
                                <h4 class="color-400">No Archive!</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--[ Start:: page filter ]-->
        <div class="page-filter ">
            <div class="collapse" id="collapseFilter">
                <div class="filter-div">
                    <a class="px-3 py-2 m-1 d-inline-flex rounded text-decoration-none border dashed"
                        href="my-wallet.html">My Wallet</a>
                    <a class="px-3 py-2 m-1 d-inline-flex rounded text-decoration-none border dashed"
                        href="my-iot.html">Smart Home</a>
                    <a class="px-3 py-2 m-1 d-inline-flex rounded text-decoration-none border dashed"
                        href="my-task.html">My Task</a>
                    <a class="px-3 py-2 m-1 d-inline-flex rounded text-decoration-none border dashed"
                        href="my-campaigns.html">Campaigns</a>
                    <a class="px-3 py-2 m-1 d-inline-flex rounded text-decoration-none border dashed"
                        href="app-inbox.html">Inbox</a>
                </div>
            </div>
            <a class="btn btn-sm collapsed py-0" data-bs-toggle="collapse" href="#collapseFilter" role="button"
                aria-expanded="false">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none">
                    <style>
                        @keyframes slide-right {
                            0% {
                                transform: translateY(0)
                            }

                            to {
                                transform: translateY(1px)
                            }
                        }
                    </style>
                    <path fill="var(--primary-color)"
                        d="M12.75 6.432a.75.75 0 00-1.5 0h1.5zm-1.5 6a.75.75 0 001.5 0h-1.5zm-1.22-2.53a.75.75 0 10-1.06 1.06l1.06-1.06zm1.97 3.03l-.53.53a.75.75 0 001.06 0l-.53-.53zm3.03-1.97a.75.75 0 00-1.06-1.06l1.06 1.06zm-3.78-4.53v6h1.5v-6h-1.5zm-2.28 4.53l2.5 2.5 1.06-1.06-2.5-2.5-1.06 1.06zm3.56 2.5l2.5-2.5-1.06-1.06-2.5 2.5 1.06 1.06z"
                        style="animation:slide-right .5s cubic-bezier(1,-.43,.68,.57) infinite alternate both" />
                    <path fill="var(--gray-5)"
                        d="M8.398 15.37a.75.75 0 10-.796 1.27l.796-1.27zm-.319.685l.398-.636-.398.636zm8.327.58a.75.75 0 00-.812-1.26l.812 1.26zm-8.804.006l.08.05.795-1.272-.079-.05-.796 1.272zm.08.05a8.14 8.14 0 008.724-.055l-.812-1.262a6.64 6.64 0 01-7.117.045l-.796 1.271z" />
                </svg>
            </a>
        </div>
        <!--[ Start:: page title and breadcrumb ]-->
        <div class="page-title mb-lg-4">
            <div class="container-fluid">
                <ol class="breadcrumb bg-transparent w-100 li_animate mb-3 mb-md-1">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Dashboard</li>
                </ol>
                <h1 class="mb-0 text-gradient font-heading">Hello, {{ auth()->user()->name }}!</h1>
                <div class="ms-sm-auto mt-2 mt-sm-0">
                </div>
            </div>
        </div>
        <!--[ Start:: page body area ]-->
        <main class="page-body">
            <div class="container-fluid">
                <!--[ Start:: My Dashboard ]-->
                <div class="row g-3 row-deck">
                    <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>$15K</h3>
                                <p class="text-muted">67% <i class="fa fa-level-up text-success"></i> Total income</p>
                                <div id="apexspark_bar_1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>$1258</h3>
                                <p class="text-muted">15% <i class="fa fa-level-up text-success"></i> Total Expense
                                </p>
                                <div id="apexspark_bar_2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>$2315</h3>
                                <p class="text-muted">23% <i class="fa fa-level-up text-success"></i> Total Growth</p>
                                <div id="apexspark_bar_3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>$1025</h3>
                                <p class="text-muted">52% <i class="fa fa-level-up text-success"></i> Bounce Rate</p>
                                <div id="apexspark_bar_4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-8 col-lg-12">
                        <div class="card">
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title fw-normal m-0">Order status</h5>
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle after-none gray-8"
                                            data-bs-toggle="dropdown" aria-expanded="false" title="Card Filter">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-opacity="0.4"
                                                    d="M1.5 0.5C1.5 0.367392 1.55268 0.240215 1.64645 0.146447C1.74021 0.0526784 1.86739 0 2 0H14C14.1326 0 14.2598 0.0526784 14.3536 0.146447C14.4473 0.240215 14.5 0.367392 14.5 0.5V4.5C14.5 4.62331 14.4544 4.74226 14.372 4.834L10 9.692V14.5C9.99992 14.6049 9.96685 14.7071 9.90547 14.7922C9.8441 14.8772 9.75752 14.9409 9.658 14.974L6.658 15.974C6.58287 15.999 6.50288 16.0058 6.4246 15.9939C6.34632 15.982 6.272 15.9516 6.20775 15.9053C6.1435 15.859 6.09116 15.7982 6.05504 15.7277C6.01893 15.6572 6.00006 15.5792 6 15.5V9.692L1.628 4.834C1.54561 4.74226 1.50002 4.62331 1.5 4.5V0.5ZM2.5 1V4.308L6.872 9.166C6.95439 9.25774 6.99998 9.37669 7 9.5V14.806L9 14.14V9.5C9.00002 9.37669 9.04561 9.25774 9.128 9.166L13.5 4.308V1H2.5Z" />
                                                <rect fill-opacity="0.9" x="4" y="2" width="8"
                                                    height="3" rx="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end shadow border-0 p-4 rounded-4"
                                            style="width: 300px;">
                                            <h6>Filter Options</h6>
                                            <div class="row g-3 mt-3">
                                                <div class="col-12">
                                                    <label class="form-label small text-muted">Sorted by:</label>
                                                    <input type="email" class="form-control" placeholder="Search">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label small text-muted">Status:</label>
                                                    <select class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label small text-muted">Notifications:</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="n_Enabled">
                                                        <label class="form-check-label" for="n_Enabled">Enabled</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end mt-4">
                                                    <button type="reset"
                                                        class="btn btn-sm btn-light me-1">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div id="apex-simple-donut"></div>
                            </div>
                            <div class="card-footer">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <h6 class="mb-1">$3,095</h6>
                                        <small class="text-muted">Last Month</small>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="mb-1">$2,763</h6>
                                        <small class="text-muted">This Month</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title fw-normal m-0">Page Views(Avg)</h5>
                                <div class="card-action">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle after-none gray-8"
                                            data-bs-toggle="dropdown" aria-expanded="false" title="Card Filter">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-opacity="0.4"
                                                    d="M1.5 0.5C1.5 0.367392 1.55268 0.240215 1.64645 0.146447C1.74021 0.0526784 1.86739 0 2 0H14C14.1326 0 14.2598 0.0526784 14.3536 0.146447C14.4473 0.240215 14.5 0.367392 14.5 0.5V4.5C14.5 4.62331 14.4544 4.74226 14.372 4.834L10 9.692V14.5C9.99992 14.6049 9.96685 14.7071 9.90547 14.7922C9.8441 14.8772 9.75752 14.9409 9.658 14.974L6.658 15.974C6.58287 15.999 6.50288 16.0058 6.4246 15.9939C6.34632 15.982 6.272 15.9516 6.20775 15.9053C6.1435 15.859 6.09116 15.7982 6.05504 15.7277C6.01893 15.6572 6.00006 15.5792 6 15.5V9.692L1.628 4.834C1.54561 4.74226 1.50002 4.62331 1.5 4.5V0.5ZM2.5 1V4.308L6.872 9.166C6.95439 9.25774 6.99998 9.37669 7 9.5V14.806L9 14.14V9.5C9.00002 9.37669 9.04561 9.25774 9.128 9.166L13.5 4.308V1H2.5Z" />
                                                <rect fill-opacity="0.9" x="4" y="2" width="8"
                                                    height="3" rx="1" />
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end shadow border-0 p-4 rounded-4"
                                            style="width: 300px;">
                                            <h6>Filter Options</h6>
                                            <div class="row g-3 mt-3">
                                                <div class="col-12">
                                                    <label class="form-label small text-muted">Sorted by:</label>
                                                    <input type="email" class="form-control" placeholder="Search">
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label small text-muted">Status:</label>
                                                    <select class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label small text-muted">Notifications:</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="n_Enabled">
                                                        <label class="form-check-label" for="n_Enabled">Enabled</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end mt-4">
                                                    <button type="reset"
                                                        class="btn btn-sm btn-light me-1">Reset</button>
                                                    <button type="submit" class="btn btn-sm btn-primary">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4>6.25</h4>
                                <p class="mb-2"><span><i class="fa fa-caret-up text-success ml-1"></i> +1.12</span>
                                    vs last month (4.0)</p>
                                <div id="apexspark_bar_5"></div>
                            </div>
                            <div class="card-footer">
                                <h6 class="mb-1">2,54,021</h6>
                                <small class="text-muted">Total Clicks</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--[ Start:: page footer link copywrite ]-->
        <footer class="page-footer py-4 mt-4 ">
            <div class="container-fluid">
                <p class="col-md-4 mb-0 text-muted">© 2022 <a href="https://pixelwibes.com/" target="_blank"
                        title="Pixelwibes">Pixelwibes</a>, All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <!--[ Start modal:: Full screen grid menu ]-->
    <div class="modal fade " tabindex="-1" id="full_screen_menu">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content bg-primary-gradient p-lg-5">
                <div class="modal-header border-0">
                    <h3 class="modal-title text-white">QBoat</h3>
                    <div class="modal-menu d-flex align-items-center">
                        <ul class="nav me-3">
                            <li class="nav-item"><a class="nav-link text-uppercase active" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link text-uppercase" href="#">Blog</a></li>
                            <li class="nav-item"><a class="nav-link text-uppercase" href="#">Support us</a>
                            </li>
                        </ul>
                        <button type="button" class="btn bg-white text-dark px-3">Download</button>
                    </div>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <div class="row g-3 justify-content-center align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-5 col-md-12 text-lg-start text-center text-white">
                            <h2>Amazing Features</h2>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-4">
                                    <span class="d-block mb-2 fs-4 fw-light">Handcrafted UI</span>
                                    <span>Each component has been carefully handcrafted and natively supports dark
                                        mode.</span>
                                </li>
                                <li>
                                    <span class="d-block mb-2 fs-4 fw-light">Fast Development</span>
                                    <span>QBoat handles HTML compilation while Gulp recompiles your SCSS and Javascript
                                        code</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-12">
                            <ul class="grid-menu row g-1">
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-tag"></i>
                                        <span>Influencer</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-star"></i>
                                        <span>Hobbies</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-briefcase"></i>
                                        <span>Business</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-pie-chart"></i>
                                        <span>Finance</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-flag"></i>
                                        <span>Food Delivery</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-layers"></i>
                                        <span>Stocks Dashboard</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-wallet"></i>
                                        <span>Sales Dashboard</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-puzzle"></i>
                                        <span>UI Widgets</span>
                                    </a>
                                </li>
                                <li class="col-sm-4 col-6">
                                    <a href="#" class="rounded-4">
                                        <i class="icon-handbag"></i>
                                        <span>Ecommerce</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn px-4 py-2 text-uppercase bg-secondary text-primary"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--[ Start offcanvas:: Need a Help ]-->
    <div class="offcanvas xl offcanvas-start" tabindex="-1" id="need_help">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Need a Help?</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body custom_scroll">
            <ul class="list-group list-group-custom mb-4">
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <a href="#" class="gray-8 fw-bold" title="Regular License">Regular License</a>
                        <p class="mb-0 gray-5">For single end product used by you or one client</p>
                    </div>
                    <div class="avatar lg rounded no-thumbnail">$18</div>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    <div class="me-3">
                        <a href="#" class="gray-8 fw-bold" title="Extended License">Extended License</a>
                        <p class="mb-0 gray-5">For single SaaS app with paying users</p>
                    </div>
                    <div class="avatar lg rounded no-thumbnail">$499</div>
                </li>
            </ul>
            <div class="card bg-body mb-4">
                <div class="card-body">
                    <h4>Support at <a href="#">pixelwibes@gmail.com</a></h4>
                    <span>Join our developers community to find answer to your question and help others.</span>
                </div>
            </div>
            <strong class="d-block h6 my-2 pb-2 border-bottom">Helpful Links</strong>
            <ul class="lh-lg">
                <li><a href="#Documentation">Sidebar Layouts</a>
                    <ul>
                        <li><a href="index.html">Main version</a></li>
                        <li><a href="index-sidebar-v1.html">Min Sidebar v1</a></li>
                        <li><a href="index-sidebar-v3.html">Sidebar v3</a></li>
                        <li><a href="index-sidebar-v4.html">Sidebar v4 with Tab</a></li>
                    </ul>
                </li>
                <li><a href="changelog.html">Change log</a></li>
                <li><a href="#Documentation">Documentation</a>
                    <ul>
                        <li><a href="docs/index.html">Documentation</a></li>
                        <li><a href="docs/widget.html">Widget's Card</a></li>
                        <li><a href="docs/charts.html">Chart's</a></li>
                        <li><a href="docs/form.html">Advanced Form Elements</a></li>
                        <li><a href="docs/fonticon.html">Font icon</a></li>
                        <li><a href="docs/plugins.html">Vendor library</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--[ Start offcanvas:: quick access ]-->
    <div class="offcanvas xl offcanvas-end" tabindex="-1" id="rightbar">
        <ul class="nav nav-pills align-items-center offcanvas-header" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills_tasks" type="button"
                    role="tab">Tasks</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills_wallet" type="button"
                    role="tab">Wallet</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills_activity" type="button"
                    role="tab">Activity</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills_emails" type="button"
                    role="tab">Emails</button>
            </li>
            <li class="nav-item ms-auto d-flex">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </li>
        </ul>
        <div class="offcanvas-body custom_scroll">
            <div class="tab-content mt-lg-3">
                <!--[ Start:: Tasks ]-->
                <div class="tab-pane fade show active" id="pills_tasks" role="tabpanel">
                    <ul class="row g-2 list-unstyled li_animate">
                        <li class="col-12 text-uppercase text-muted">
                            <div class="d-flex justify-content-between small">
                                <span>Assigned Tasks</span>
                                <a href="#">View All</a>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">158</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Pending</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">17</div>
                                    <span class="text-muted"><span class="pie">3/5</span> Completed</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">43</div>
                                    <span class="text-muted"><span class="pie">4/5</span> On Hold</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">27</div>
                                    <span class="text-muted"><span class="pie">2/5</span> In Progress</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 text-uppercase text-muted mt-4 small">Latest Tasks</li>
                        <li class="col-12">
                            <ol class="list-group list-group-custom list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div>HR Dashboard</div>
                                        <small class="text-muted">Tempor fames sapien tristique bibendum per quisque
                                            senectus.</small>
                                        <div class="members mt-2">
                                            <label class="me-2">Team:</label>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="{{ asset('assets/assets/img/xs/avatar3.jpg') }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="avatar"
                                                    alt="friend"></a>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="{{ asset('assets/assets/img/xs/avatar1.jpg') }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="avatar"
                                                    alt="friend"></a>
                                        </div>
                                    </div>
                                    <span class="badge bg-light text-muted rounded-pill">Feedback</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div>Logo Design</div>
                                        <small class="text-muted">Create new logo in Figma file</small>
                                        <div class="members mt-2">
                                            <label class="me-2">Team:</label>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="{{ asset('assets/assets/img/xs/avatar2.jpg') }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="avatar"
                                                    alt="friend"></a>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="{{ asset('assets/assets/img/xs/avatar4.jpg') }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="avatar"
                                                    alt="friend"></a>
                                            <a href="#"><img class="avatar xs rounded-circle"
                                                    src="{{ asset('assets/assets/img/xs/avatar5.jpg') }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="avatar"
                                                    alt="friend"></a>
                                        </div>
                                    </div>
                                    <span class="badge bg-primary rounded-pill">New</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div>Hospital App</div>
                                        <small class="text-muted">the logo of the company you are applying to and an
                                            image.</small>
                                    </div>
                                    <span class="badge bg-light text-muted rounded-pill">Feedback</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div>CRM Project</div>
                                        <small class="text-muted">Convallis mollis porttitor nisi dis
                                            adipiscing.</small>
                                    </div>
                                    <span class="badge bg-light text-muted rounded-pill">Changes</span>
                                </li>
                            </ol>
                        </li>
                    </ul>
                </div>
                <!--[ Start:: Wallet ]-->
                <div class="tab-pane fade" id="pills_wallet" role="tabpanel">
                    <ul class="row g-2 list-unstyled li_animate">
                        <li class="col-12">
                            <div class="card border dashed">
                                <div class="card-header">
                                    <h6>Total Balance</h6>
                                </div>
                                <div class="card-body">
                                    <h2 class="text-accent">$2,854.00</h2>
                                    <p class="text-muted">Wallet ID: Q0001214777</p>
                                    <button class="btn btn-sm px-3 bg-dark text-muted">Deposit</button>
                                    <button class="btn btn-sm px-3 btn-primary">Withdraw</button>
                                </div>
                                <div class="card-footer py-3">
                                    <span class="text-success">1.75%</span>
                                    <span class="text-muted">March 31,2022</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 text-uppercase text-muted mt-4 mt-xl-5">
                            <div class="d-flex justify-content-between small">
                                <span>Pay & Transfer</span>
                                <a href="#">View All</a>
                            </div>
                        </li>
                        <li class="col-4">
                            <a href="#" class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                    </svg>
                                    <p class="mb-0">Cards</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#" class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" />
                                    </svg>
                                    <p class="mb-0">Transfer</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#" class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                    </svg>
                                    <p class="mb-0">Withdraw</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#" class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                        <path
                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <p class="mb-0">Bill payments</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#" class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        <path fill-rule="evenodd"
                                            d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                    <p class="mb-0">Add Payee</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-4">
                            <a href="#" class="card border dashed text-center small gray-5 text-decoration-none">
                                <div class="card-body px-2">
                                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="28"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
                                    </svg>
                                    <p class="mb-0">Scan & Pay</p>
                                </div>
                            </a>
                        </li>
                        <li class="col-12">
                            <div class="card border dashed bg-body">
                                <div class="card-body">
                                    <p class="lead">Transact safely with Lender’s Fund Account (QBoat)</p>
                                    <p class="text-muted mb-4">Apply now, quick registration </p>
                                    <button class="btn bg-accent text-white">Start Now</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--[ Start:: Activity ]-->
                <div class="tab-pane fade" id="pills_activity" role="tabpanel">
                    <ol class="activity-feed p-0 ms-3 mb-0">
                        <li class="feed-item mb-3 pl-lg-4 ps-3" data-content="" data-time="5 hours ago"
                            data-color="yellow">
                            <div class="card border dashed mb-5">
                                <div class="card-body p-3">
                                    <input type="checkbox" id="expand_1" name="expand_1">
                                    <label for="expand_1" class="mb-0">
                                        <b>Request</b> code merge in git </label>
                                    <div class="feed-content">
                                        <span><b>comments</b> Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="feed-item mb-3 pl-lg-4 ps-3" data-content="" data-time="7 hours ago"
                            data-color="green">
                            <div class="card border dashed mb-5">
                                <div class="card-body p-3">
                                    <input type="checkbox" id="expand_2" name="expand_2">
                                    <label for="expand_2" class="mb-0">
                                        <b>Update</b> React app login page code </label>
                                    <div class="feed-content">
                                        <span><b>comments</b> Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="feed-item mb-3 pl-lg-4 ps-3" data-content="" data-time="December 2022"
                            data-color="green">
                            <div class="card border dashed mb-5">
                                <div class="card-body p-3">
                                    <input type="checkbox" id="expand_3" name="expand_3">
                                    <label for="expand_3" class="mb-0"> 2 contributions in private repositories
                                    </label>
                                    <div class="feed-content">
                                        <span><a href="#">isscaler/aromio-v0.1</a> 12 commits</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="feed-item mb-3 pl-lg-4 ps-3" data-content="" data-time="December 2022"
                            data-color="dark">
                            <div class="card border dashed mb-5">
                                <div class="card-body p-3">
                                    <input type="checkbox" id="expand_4" name="expand_4">
                                    <label for="expand_4" class="mb-0">
                                        <b>QBoat</b> Create a new project </label>
                                    <div class="feed-content">
                                        <h2>BOOM!</h2>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
                <!--[ Start:: Emails ]-->
                <div class="tab-pane fade" id="pills_emails" role="tabpanel">
                    <ul class="row g-2 list-unstyled li_animate">
                        <li class="col-12 text-uppercase text-muted">
                            <div class="d-flex justify-content-between small">
                                <span>Outgoing Emails</span>
                                <a href="#">View All</a>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">158</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Sending</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">752</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Sent</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">125</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Delivered</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-6">
                            <div class="card border dashed">
                                <div class="card-body">
                                    <div class="fs-3">42</div>
                                    <span class="text-muted"><span class="pie">1/5</span> Failed</span>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 text-uppercase text-muted mt-5">
                            <div class="d-flex justify-content-between small">
                                <span>Latest message</span>
                                <a href="#">View All</a>
                            </div>
                        </li>
                        <li class="col-12">
                            <ul class="list-group list-group-custom list-group-flush">
                                <li class="list-group-item d-flex align-items-start bg-body mb-1 border-0">
                                    <img class="rounded-circle avatar sm" src="assets/img/xs/avatar1.jpg"
                                        data-bs-toggle="tooltip" title="Avatar Name" alt="Avatar">
                                    <div class="ms-2">
                                        <a href="#" title="">Github</a>
                                        <small class="text-muted">8 minutes ago</small>
                                        <p class="mb-0 small text-muted">Where are we in terms of design?</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-start bg-body mb-1 border-0">
                                    <img class="rounded-circle avatar sm"
                                        src="{{ asset('assets/assets/img/xs/avatar2.jpg') }}" data-bs-toggle="tooltip"
                                        title="Avatar Name" alt="Avatar">
                                    <div class="ms-2">
                                        <a href="#" title="">Themeforest</a>
                                        <small class="text-muted">12 minutes ago</small>
                                        <p class="mb-0 small text-muted">Where are we in terms of design?</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-start bg-body mb-1 border-0">
                                    <img class="rounded-circle avatar sm"
                                        src="{{ asset('assets/assets/img/xs/avatar3.jpg') }}" data-bs-toggle="tooltip"
                                        title="Avatar Name" alt="Avatar">
                                    <div class="ms-2">
                                        <a href="#" title="">Paybee inc.</a>
                                        <small class="text-muted">22 minutes ago</small>
                                        <p class="mb-0 small text-muted">Where are we in terms of design?</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-start bg-body mb-1 border-0">
                                    <img class="rounded-circle avatar sm"
                                        src="{{ asset('assets/assets/img/xs/avatar4.jpg') }}" data-bs-toggle="tooltip"
                                        title="Avatar Name" alt="Avatar">
                                    <div class="ms-2">
                                        <a href="#" title="">Github</a>
                                        <small class="text-muted">28 minutes ago</small>
                                        <p class="mb-0 small text-muted">Where are we in terms of design?</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("span.pie").peity("pie", {
            fill: ["var(--primary-color)", "var(--border-color)"]
        })
    </script>
    <!--[ Start offcanvas:: Template Settings ]-->
    <div class="offcanvas sm offcanvas-end" tabindex="-1" id="settings">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Template Setting</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body custom_scroll">
            <ul class="row g-2 list-unstyled li_animate">
                <li class="col-12 text-uppercase text-muted">
                    <div class="d-flex justify-content-between small">
                        <span>Color Scheme</span>
                    </div>
                </li>
                <li class="col-12">
                    <ul class="choose-skin list-group list-group-custom mb-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            data-theme="AppleGreen">
                            <span>Apple Green</span>
                            <div style="background-color: #5BC43A;">Primary</div>
                            <div style="background-color: #00668b;">Accent</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            data-theme="DaisyBush">
                            <span>Daisy Bush</span>
                            <div style="background-color: #541690;">Primary</div>
                            <div style="background-color: #FF8D29;">Accent</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            data-theme="DodgerBlue">
                            <span>Dodger Blue</span>
                            <div style="background-color: #287eff;">Primary</div>
                            <div style="background-color: #03C4A1;">Accent</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            data-theme="WebOrange">
                            <span>Web Orange</span>
                            <div style="background-color: #F0A500;">Primary</div>
                            <div style="background-color: #334756;">Accent</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            data-theme="TorchRed">
                            <span>Torch Red</span>
                            <div style="background-color: #FF0F5B;">Primary</div>
                            <div style="background-color: #7160cb;">Accent</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            data-theme="Tradewind">
                            <span>Tradewind</span>
                            <div style="background-color: #65baa9;">Primary</div>
                            <div style="background-color: #7a6697;">Accent</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            data-theme="FrenchRose">
                            <span>French Rose</span>
                            <div style="background-color: #EB5393;">Primary</div>
                            <div style="background-color: #36AE7C;">Accent</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            data-theme="Jasper">
                            <span>Jasper Red</span>
                            <div style="background-color: #c94e4e;">Primary</div>
                            <div style="background-color: #713045;">Accent</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            data-theme="Midnight">
                            <span>Midnight</span>
                            <div style="background-color: #001429;">Primary</div>
                            <div style="background-color: #52616B;">Accent</div>
                        </li>
                    </ul>
                </li>
                <li class="col-12 text-uppercase text-muted mt-5">
                    <div class="d-flex justify-content-between small">
                        <span>More Setting</span>
                    </div>
                </li>
                <li class="col-12">
                    <ul class="row g-2 list-unstyled li_animate gray-8 fs-6">
                        <li class="col-12">
                            <div class="form-check form-switch light-dark-toggle">
                                <input class="form-check-input" type="checkbox" role="switch" id="LightDark">
                                <label class="form-check-label" for="LightDark">Switch to Light/Dark</label>
                            </div>
                        </li>
                        <li class="col-12">
                            <div class="form-check form-switch monochrome-toggle">
                                <input class="form-check-input" type="checkbox" role="switch" id="monochrome">
                                <label class="form-check-label" for="monochrome">Monochrome Mode</label>
                            </div>
                        </li>
                        <li class="col-12">
                            <div class="form-check form-switch mini-sidebar">
                                <input class="form-check-input" type="checkbox" role="switch" id="mini-sidebar">
                                <label class="form-check-label" for="mini-sidebar">Mini Sidebar toggle</label>
                            </div>
                        </li>
                        <li class="col-12">
                            <div class="form-check form-switch gradient-active">
                                <input class="form-check-input" type="checkbox" role="switch" id="gradient-active">
                                <label class="form-check-label" for="gradient-active">Gradient Active</label>
                            </div>
                        </li>
                        <li class="col-12">
                            <div class="form-check form-switch radius-toggle">
                                <input class="form-check-input" type="checkbox" role="switch" id="radius0">
                                <label class="form-check-label" for="radius0">Border Radius none</label>
                            </div>
                        </li>
                        <li class="col-12">
                            <div class="form-check form-switch sidebar-dark">
                                <input class="form-check-input" type="checkbox" role="switch" id="sidebarDark">
                                <label class="form-check-label" for="sidebarDark">Enable Dark! ( Sidebar )</label>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--[ Start offcanvas:: Template site map url ]-->
    <div class="offcanvas offcanvas-start sm" tabindex="-1" id="site_map">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Template Site map url</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body custom_scroll">
            <ul class="lh-lg list-style list-unstyled">
                <li><a href="#"><span class="bullet theme-color1 me-3"></span>Dashboard</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed" href="index.html">My
                            Dashboard</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-wallet.html">My Wallet</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-iot.html">My Smart Home</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-task.html">My Tasks</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-analytics.html">My Analytics</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="my-project.html">My Project</a>
                    </div>
                </li>
                <li><a href="account.html"><span class="bullet theme-color1 me-3"></span>Accounts</a></li>
                <li><a href="#"><span class="bullet theme-color2 me-3"></span>App</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-calendar.html">Calendar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-inbox.html">Inbox</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-chat.html">Chat</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-contacts.html">Contact list</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="app-filemanager.html">File Manager</a>
                    </div>
                </li>
                <li><a href="#"><span class="bullet theme-color3 me-3"></span>Crafted Page</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-profile.html">My Profile</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-activity.html">User Activity</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-gallery.html">Imgae gallery</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-ticket.html">Support Ticket</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-pricing.html">Pricing table</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-search.html">Search page</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="crafted-map.html">World Map</a>
                    </div>
                </li>
                <li><a href="#"><span class="bullet theme-color3 me-3"></span>Authentication Page</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-signin.html">Sign in</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-signup.html">Sign up</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-password-reset.html">Reset Password</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-two-step.html">2-step Verification</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-lockscreen.html">Page Locked</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-maintenance.html">Under Construction!</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="auth-404.html">404</a>
                    </div>
                </li>
                <li class="mt-5">QBoat Documentation</li>
                <li><a href="docs/index.html"><span class="bullet theme-color1 me-3"></span>Documentation</a></li>
                <li><a href="docs/widget.html"><span class="bullet theme-color2 me-3"></span>Widget's</a></li>
                <li><a href="#"><span class="bullet theme-color3 me-3"></span>Charts</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-apex.html">Apex chart</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-sparkline.html">Sparkline</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-chartjs.html">Chartjs</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-knob.html">knob chart</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/chart-peity.html">Peity chart</a>
                    </div>
                </li>
                <li><a href="#"><span class="bullet theme-color4 me-3"></span>Form Elements</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-clipboard.html">Clipboard</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-datepicker.html">Datepicker</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-daterange.html">Date Range Picker</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-flatpickr.html">Flatpickr</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-inputmask.html">Inputmask</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-maxlength.html">Bootstrap Maxlength</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-nouislider.html">nouislider</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-passwordmeter.html">Password Meter</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-rangeslider.html">Range Slider</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-select2.html">Select 2</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-sweetalert2.html">Sweetalert 2</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-tagsinput.html">Tags input</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/form-wizard.html">jQuery Steps Wizard</a>
                    </div>
                </li>
                <li><a href="#"><span class="bullet theme-color5 me-3"></span>Font icon</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-fontawesome.html">Font awesome</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-bootstrap.html">Bootstrap Icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-flag.html">Country Flag icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-linear.html">Simple line icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-feather.html">Feather icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-weather.html">Weather icon</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/icon-icons8.html">Icons8 icon</a>
                    </div>
                </li>
                <li><a href="#"><span class="bullet theme-color6 me-3"></span>Vendor Plugin</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-datatable.html">DataTables</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-owlcarousel.html">owl Carousel</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-summernote.html">Summernote</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-fancybox.html">Fancybox</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-fullcalendar.html">Full calendar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-tuicalendar.html">tui Calendar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-dropify.html">Dropify</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-jkanban.html">jKanban Board</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-jsgrid.html">jsgrid</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-masonrygallery.html">Masonry Gallery</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-nestable.html">nestable</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-countup.html">Count Up</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-tabledragger.html">Table Dragger</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-swiper.html">Swiper</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-jspreadsheet.html">jspreadsheet</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-rating.html">Rating Review</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-br-tabs.html">Responsive Tabs</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-bootstrap-select.html">Bootstrap Select</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-bs5-toast.html">Bootstrap 5 toast</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/plugin-bootstrap-touchspin.html">Bootstrap TouchSpin</a>
                    </div>
                </li>
                <li><a href="#"><span class="bullet theme-color3 me-3"></span>Bootstrap Component</a>
                    <div class="lh-normal mb-3 ms-4 d-flex flex-wrap">
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-accordion.html">Profile</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-accordion.html">Accordion</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-alerts.html">Alerts</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-avatar.html">User Avatar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-badges.html">Badges</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-breadcrumb.html">Breadcrumb</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-buttons.html">Buttons</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-cards.html">Cards</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-carousel.html">Carousel</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-collapse.html">Collapse</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-dropdowns.html">Dropdowns</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-listgroup.html">List group</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-modal.html">Modal</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-navstabs.html">Navs and tabs</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-navbar.html">Navbar</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-offcanvas.html">Offcanvas</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-pagination.html">Pagination</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-placeholders.html">Placeholders</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-popovers.html">Popovers</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-progress.html">Progress</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-spinners.html">Spinners</a>
                        <a class="px-2 m-1 rounded text-decoration-none small gray-6 border dashed"
                            href="docs/ui-toasts.html">Toasts</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
