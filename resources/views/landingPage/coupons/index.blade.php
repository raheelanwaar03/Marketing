<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from codeboxr.net/themedemo/couponz/html/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 21:11:58 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>CouponZ - Category</title>

    <meta name="description" content="simple description for your site" />
    <meta name="keywords" content="keyword1, keyword2" />
    <meta name="author" content="CouponZ" />

    <!-- desktop bookmark -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/favicon.ico')}}" />
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/img/favicon/manifest.json')}}">


    <!-- Fallback For IE 9 [ Media Query and html5 Shim] -->
    <!--[if lt IE 9]>
<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js')}}"></script>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>
<![endif]-->

    <!-- GOOGLE FONT -->
    <link href="http://fonts.googleapis.com/css?family=Cabin:400,700%7CUbuntu:300,400,700" rel="stylesheet" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" media="all" />

    <!--owl-->
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/dist/assets/owl.carousel.min.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/dist/assets/owl.theme.default.min.css')}}" media="all" />

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" media="all" />

    <!-- linearicons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/linearicons/webfont/style.css')}}" media="all" />

    <!-- animate.css')}} -->
    <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.min.css')}}" media="all" />

    <!-- flatpickr -->
    <link rel="stylesheet" href="{{asset('assets/vendor/flatpickr/flatpickr.min.css')}}" media="all" />

    <!-- lity -->
    <link rel="stylesheet" href="{{asset('assets/vendor/lity/lity.min.css')}}" media="all" />

    <!-- Bootstrap Slider -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-slider/css/bootstrap-slider.min.css')}}" media="all" />

    <!-- CUSTOM  CSS  -->
    <link id="cbx-style" rel="stylesheet" href="{{asset('assets/css/style-default.css')}}" media="all" />

    <!-- MODERNIZER  -->
    <script src="{{asset('assets/vendor/modernizr/modernizr.min.js')}}"></script>


</head>

<body>


    <div class="cbx-container">
        <!-- SITE CONTENT -->

        <!-- Header Part Start -->
        @include('layouts.navigation')
        <!-- Header Part End -->


        <!-- Category Wrapper Start -->

        <div class="category-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-heading">All Coupons</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            @forelse ($coupons as $coupon)
                             <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="item deal-item">
                                <div class="deal-thumb">
                                    <img src="{{ asset('images/'.$coupon->coupon_img) }}" alt="" class="img-responsive"/>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45"
                                             aria-valuemin="0" aria-valuemax="100">
                                            <span class="popOver" data-toggle="tooltip" data-placement="top"
                                                  title="45%"> </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="deal-content">
                                    <h6><a href="#">{{ $coupon->coupon_name }}</a></h6>
                                    <p>{{ $coupon->coupon_des }}</p>
                                    <div class="deal-content-bottom">
                                        <p><i class="fa fa-clock-o">{{ $coupon->coupon_expire }}</i></p>
                                        <a type="button" data-toggle="modal" data-target="#{{ $coupon->coupon_slug }}" class="btn btn-sm">Get It</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                                    <!-- Deal Single Item Start -->
                                    <div class="deal-thumb">
                                        <img src="{{ asset('images/'.$coupon->coupon_img) }}" alt="" class="img-responsive"/>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" >
                                                <span class="popOver" data-toggle="tooltip" data-placement="top" title="70%"> </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="deal-content">
                                        <h6><a href="single-coupon-printable.html">{{ $coupon->coupon_name }} </a></h6>
                                        <p>{{ $coupon->coupon_des }}</p>
                                        <div class="deal-content-bottom">
                                        <p><i class="fa fa-clock-o"></i> {{ $coupon->coupon_expire }}</p>
                                            <a type="button" data-toggle="modal" data-target="#{{ $coupon->coupon_slug }}" class="btn btn-sm">Get It</a>
                                        </div>
                                    </div>
                                    <!-- Deal Single Item End -->
                                </div> --}}
                            @empty
                            @endforelse

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination-wrapper">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#"><i
                                                    class="fa fa-angle-left"></i>Previous</a></li>
                                        <li class="active"><a href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#"> Next<i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category Wrapper End -->


        <!-- Footer Part Start -->
        <footer class="cbx-footer">

            <!-- Footer Top Part Start -->
            <div class="cbx-footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- Footer widget about Part Start -->
                            <div class="widget widget-about">
                                <div class="widget-brand">
                                    <a href="#">
                                        <img src="{{asset('assets/img/logo/logo-light.png')}}" alt="CouponZ"
                                            class="img-responsive" />
                                    </a>
                                </div>
                                <p>We coupon so to be for the us me dose this recept good bad think nice beauti full
                                    thanks, moja los, u hungry naki food panda use sultan dine.</p>
                                <div class="widget-social">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-vimeo"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer widget about Part End -->
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <!-- Footer widget listings Part Start -->
                            <div class="widget widget-listings">
                                <h2>Usefull Link</h2>
                                <ul>
                                    <li>
                                        <a href="#">Pricing Plan</a>
                                    </li>

                                    <li>
                                        <a href="#">Categories</a>
                                    </li>

                                    <li>
                                        <a href="#">Populer Deal</a>
                                    </li>

                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>

                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer widget listings Part End -->
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <!-- Footer widget widget-listings Part Start -->
                            <div class="widget widget-listings">
                                <h2>FAQ</h2>
                                <ul>
                                    <li>
                                        <a href="#">Duis aute irure dolor?</a>
                                    </li>

                                    <li>
                                        <a href="#">Sunt in culpa qui officia?</a>
                                    </li>

                                    <li>
                                        <a href="#">Cillum dolore eu fugiat?</a>
                                    </li>

                                    <li>
                                        <a href="#">Lorem Ipsum dolor sit?</a>
                                    </li>

                                    <li>
                                        <a href="#">Dolor Sit Amet?</a>
                                    </li>
                                </ul>



                            </div>
                            <!-- Footer widget widget-listings Part End -->
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Footer widget newsletter Part Start -->
                            <div class="widget widget-newsletter">
                                <div class="widget-newsletter-area">
                                    <form id="cbx-subscribe-form" class="navbar-form" role="search">
                                        <div class="input-group">
                                            <input type="email" id="subscribe" required class="form-control"
                                                placeholder="Your Email" name="email">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i
                                                        class="fa fa-send-o"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <p>It you want to connect with us please subcribe by your email.</p>
                                    <h5>We Accept:</h5>
                                    <ul class="payment-gateways">
                                        <li><a href="#"><img src="{{asset('assets/img/payment_gateway/amex.png')}}"
                                                    alt="amex" /></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/payment_gateway/mastercard.png')}}"
                                                    alt="mastercard" /></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/payment_gateway/paypal.png')}}"
                                                    alt="paypal" /></a></li>
                                        <li><a href="#"><img src="{{asset('assets/img/payment_gateway/visa.png')}}"
                                                    alt="visa" /></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer widget newsletter Part End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Top Part End -->

            <!-- Footer Bottom Part Start -->
            <div class="cbx-footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright text-center">
                                <p>© 2017 Copyright CouponZ. All Rights reserved. Made with <i class="fa fa-heart"></i>
                                    at <a href="https://codeboxr.com/">Codeboxr</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Part End -->

        </footer>
        <!-- Footer Part End -->

        <!-- Scroll to Top Start -->
        <a href="#" class="scrollToTop">
            <i class="fa fa-arrow-up"></i>
        </a>
        <!-- Scroll to Top End -->


        <!-- //SITE CONTENT END -->

    </div>

    @include('layouts.footer')

    <!-- SITE SCRIPT  -->

    <!-- jquery -->
    <script src="{{asset('assets/vendor/jquery/jquery-1.11.3.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- if load google maps then load this api -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyChihC--Jb_QURoXd2MugyC53cDQjrV2MY"></script>

    <!-- load if our contact form or email subscribe options is used -->
    <script src="{{asset('assets/vendor/validation/jquery.validate.js')}}"></script>

    <!--owl-->
    <script src="{{asset('assets/vendor/owl-carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- clipboard.js')}} -->
    <script src="{{asset('assets/vendor/clipboard.js')}}/clipboard.min.js')}}"></script>

    <!-- flatpickr -->
    <script src="{{asset('assets/vendor/flatpickr/flatpickr.js')}}"></script>

    <!-- lity -->
    <script src="{{asset('assets/vendor/lity/lity.min.js')}}"></script>

    <!-- Bootstrap Slider -->
    <script src="{{asset('assets/vendor/bootstrap-slider/bootstrap-slider.min.js')}}"></script>


    <!-- THEME SCRIPT  -->
    <script src="{{asset('assets/js/theme.js')}}"></script>

    <!-- CUSTOM SCRIPT  -->
    <script src="{{asset('assets/js/custom.js')}}"></script>


</body>

</html>
