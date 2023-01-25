@extends('layouts.app')

@section('content')
    <hr class="invis1">

    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="promobox">
                <div class="post-media">
                    <a href="categories.html"><img src="{{ asset('assets/uploads/promo_01.png') }}" alt=""
                            class="img-responsive"></a>
                    <div class="promo-desc">
                        <img src="{{ asset('assets/uploads/small_01.png') }}" alt=""
                            class="alignleft img-thumbnail">
                        <h4><a href="#">Shop for LifeStyle</a></h4>
                        <small>128 Available Coupons</small>
                    </div><!-- end desc -->
                </div><!-- end media -->

            </div><!-- end box -->
        </div><!-- end col -->

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="promobox">
                <div class="post-media">
                    <a href="categories.html"><img src="{{ asset('assets/uploads/promo_02.png') }}" alt=""
                            class="img-responsive"></a>

                    <div class="promo-desc">
                        <img src="{{ asset('assets/uploads/small_02.png') }}" alt=""
                            class="alignleft img-thumbnail">
                        <h4><a href="#">Shop for Kids</a></h4>
                        <small>44 Available Coupons</small>
                    </div><!-- end desc -->
                </div><!-- end media -->

            </div><!-- end box -->
        </div><!-- end col -->

        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="promobox">
                <div class="post-media">
                    <a href="categories.html"><img src="{{ asset('assets/uploads/promo_03.png') }}" alt=""
                            class="img-responsive"></a>

                    <div class="promo-desc">
                        <img src="{{ asset('assets/uploads/small_03.png') }}" alt=""
                            class="alignleft img-thumbnail">
                        <h4><a href="#">Shop for Pets</a></h4>
                        <small>55 Available Coupons</small>
                    </div><!-- end desc -->
                </div><!-- end media -->
            </div><!-- end box -->
        </div><!-- end col -->
    </div><!-- end row -->

    <hr class="invis3">

    <div class="row">
        <div class="col-md-12">
            <h4>Popular Stores</h4>
        </div>
        <!-- end col -->
    </div>
    @foreach ($stores as $store)
        <div class="text-center store-list row">
            <div class="col-md-2 col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="post-media">
                    <a href="{{ route('User.Store.See/', $store->store_slug) }}"><img
                            src="{{ asset('images/' . $store->store_img) }}" alt="{{ $store->store_img }}"
                            class="img-responsive"></a>
                    <small>{{ $store->store_name }}</small>
                </div>
                <!-- end media -->
            </div>
        </div>
    @endforeach
    </div><!-- end container -->
    </div><!-- end section -->

    <div class="section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Featured Coupons</h2>
                    <hr>
                    <p class="lead">Recent discount coupon codes from hundreds of stores. With our codes take a
                        few seconds you can earn unlimited discounts.</p>
                </div>
            </div><!-- end title -->

            <div class="row">
                @foreach ($coupons as $coupon)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="coupon-list">
                            <div class="coupon-wrapper">
                                <div class="post-media">
                                    <a href="coupon-single.html"><img src="{{ asset('images/' . $coupon->coupon_img) }}"
                                            alt="{{ $coupon->coupon_img }}" class="img-responsive"></a>
                                </div>
                                <!-- end media -->

                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <small>12 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom"
                                                title="Favorite it"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- end coupon-top -->
                                    <h3><a href="#">{{ $coupon->coupon_name }} </p>
                                </div>
                                <!-- end meta -->

                                <div class="showcode">
                                    <a href="{{ $coupon->coupon_slug }}" class="code-link">
                                        <span class="coupon-code">{{ $coupon->coupon_code }}</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div>
                                <!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : {{ $coupon->coupon_expire }}</small>
                                </div>
                                <!-- end coupon-top -->
                            </div>
                            <!-- end coupon-wrapper -->

                            <!-- Modal -->
                            <div id="{{ $coupon->coupon_slug }}" class="modal fade code-modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4><a href="coupon-single.html">{{ $coupon->coupon_name }}</a>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a href="{{ $coupon->coupon_link }}"><img
                                                            src="{{ asset('images/' . $coupon->coupon_img) }}"
                                                            alt="" class="img-responsive"></a>
                                                    <div class="modal-button">
                                                        <a href="{{ $coupon->coupon_link }}" target="_blank"
                                                            title="{{ $coupon->coupon_store }}"
                                                            class="btn btn-default btn-block">Visit
                                                            Store <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-8">

                                                    <p>{{ $coupon->coupon_des }}</p>

                                                    <div class="modal-share clearfix">
                                                        <ul class="list-inline social-small">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end share -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end modal-body -->

                                        <div class="modal-footer">
                                            <div class="coupon-area">
                                                <div class="showcode row">
                                                    <div class="col-md-4 text-left">
                                                        <div class="coupon-vote">
                                                            <a href="#" data-toggle="tooltip"
                                                                data-placement="bottom" title="Work!"><i
                                                                    class="fa fa-smile-o"></i></a>
                                                            <a href="#" data-toggle="tooltip"
                                                                data-placement="bottom" title="Poor!"><i
                                                                    class="fa fa-frown-o"></i></a>
                                                        </div>
                                                        <!-- end coupon-meta -->
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-md-8 text-center">>
                                                        <button data-clipboard-text="{{ $coupon->coupon_code }}"
                                                            class="coupon-code btn btn-primary btn-block" type="submit"
                                                            title="Click to Copy">{{ $coupon->coupon_code }}</button>
                                                        <small>Click to Copy</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="section wb overflow">
        <div class="device-showcase hidden-sm hidden-xs">
            <div class="devices">
                <div class="ipad-wrap wow slideInUp" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                <div class="iphone-wrap wow slideInUp" data-wow-duration="1s" data-wow-delay="0.4s"></div>
            </div>
        </div>
    </div><!-- /.section -->

    <div class="section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Recent Coupons</h2>
                    <hr>
                    <p class="lead">Recent discount coupon codes from hundreds of stores. With our codes take a
                        few seconds you can earn unlimited discounts.</p>
                </div>
            </div><!-- end title -->

            <div class="row grid-coupons">
                @foreach ($coupons as $coupon)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="coupon-list">
                            <div class="coupon-wrapper">
                                <div class="post-media">
                                    <a href="coupon-single.html"><img src="{{ asset('images/' . $coupon->coupon_img) }}"
                                            alt="{{ $coupon->coupon_img }}" class="img-responsive"></a>
                                </div><!-- end media -->

                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                        <div class="rating pull-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <small>21 Rating</small>
                                        </div>
                                        <div class="favorite-coupon pull-right text-right">
                                            <a href="coupon-favorites.html" data-toggle="tooltip" data-placement="bottom"
                                                title="Favorite it"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div><!-- end coupon-top -->
                                    <h3><a href="{{ $coupon->coupon_link }}">{{ $coupon->coupon_store }}</a></h3>
                                    <p>{{ $coupon->coupon_des }}</p>
                                </div><!-- end meta -->

                                <div class="showcode">
                                    <a href="{{ $coupon->coupon_slug }}" class="code-link">
                                        <span class="coupon-code">{{ $coupon->coupon_code }}</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div><!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : {{ $coupon->coupon_expire }}</small>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div id="{{ $coupon->coupon_slug }}" class="modal fade code-modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4><a href="coupon-single.html">{{ $coupon->coupon_name }}</a></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a href="store-single.html"><img
                                                            src="{{ asset('images/' . $coupon->coupon_img) }}"
                                                            alt="{{ $coupon->coupon_name }}" class="img-responsive"></a>
                                                    <div class="modal-button">
                                                        <a href="{{ $coupon->coupon_link }}" target="_blank"
                                                            title="" class="btn btn-default btn-block">Visit
                                                            Store <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class="col-md-8">
                                                    <div class="coupon-meta">
                                                        <div class="coupon-top clearfix">
                                                            <div class="rating pull-left">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <small>21 Rating</small>
                                                            </div>
                                                            <div class="favorite-coupon pull-right text-right">
                                                                <a href="coupon-favorites.html" data-toggle="tooltip"
                                                                    data-placement="bottom" title="Favorite"><i
                                                                        class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div><!-- end coupon-top -->
                                                    </div><!-- end coupon-meta -->

                                                    <p>{{ $coupon->coupon_des }}</p>

                                                    <div class="modal-share clearfix">
                                                        <ul class="list-inline social-small">
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end share -->
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end modal-body -->

                                        <div class="modal-footer">
                                            <div class="coupon-area">
                                                <div class="showcode row">
                                                    <div class="col-md-4 text-left">
                                                        <div class="coupon-vote">
                                                            <a href="#" data-toggle="tooltip"
                                                                data-placement="bottom" title="Work!"><i
                                                                    class="fa fa-smile-o"></i></a>
                                                            <a href="#" data-toggle="tooltip"
                                                                data-placement="bottom" title="Poor!"><i
                                                                    class="fa fa-frown-o"></i></a>
                                                        </div><!-- end coupon-meta -->
                                                    </div><!-- end col -->
                                                    <div class="col-md-8 text-center">
                                                        <button data-clipboard-text="{{ $coupon->coupon_code }}"
                                                            class="coupon-code btn btn-primary btn-block" type="submit"
                                                            title="Click to Copy">{{ $coupon->coupon_code }}</button>
                                                        <small>Click to Copy</small>
                                                    </div>
                                                </div><!-- end row -->
                                            </div><!-- end coupon-area -->
                                        </div><!-- end modal-footer -->
                                    </div><!-- end mpdal-content -->
                                </div><!-- end modal-dialog -->
                            </div><!-- end modal -->
                        </div><!-- end coupon list -->
                    </div><!-- end col -->
                @endforeach
            </div><!-- end row -->

            <div class="loadmorebutton text-center clearfix">
                <a href="{{ route('User.All.Coupon.Deals') }}" class="btn btn-custom">Browse more Coupons</a>
            </div><!-- end loadmore -->

            <hr class="invis1">

            <div class="footer-content">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Popular Categories</h4>
                    </div>
                    <!-- end col -->
                </div>

                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <ul class="customlist">
                            <li><a href="#">Baby Kids</a></li>
                            <li><a href="#">Books & Magazines</a></li>
                            <li><a href="#">Computers</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Electronics</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <ul class="customlist">
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Gifts</a></li>
                            <li><a href="#">Health Beauty</a></li>
                            <li><a href="#">Home Garden</a></li>
                            <li><a href="#">Home Supplies</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <ul class="customlist">
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Entertainetmen</a></li>
                            <li><a href="#">Digital Stores</a></li>
                            <li><a href="#">Marketplaces</a></li>
                            <li><a href="#">Musicians</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <ul class="customlist">
                            <li><a href="#">Movies & Films</a></li>
                            <li><a href="#">Phones</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Televisions</a></li>
                            <li><a href="#">Telegraphers</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <ul class="customlist">
                            <li><a href="#">Baby Toys</a></li>
                            <li><a href="#">Clothings</a></li>
                            <li><a href="#">Jewellry</a></li>
                            <li><a href="#">Car Supplies</a></li>
                            <li><a href="#">Watches</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <ul class="customlist">
                            <li><a href="#">Glassess</a></li>
                            <li><a href="#">Medical</a></li>
                            <li><a href="#">Pet Shops</a></li>
                            <li><a href="#">LifeStyle</a></li>
                            <li><a href="#">Sports</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
