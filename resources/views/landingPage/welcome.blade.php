@extends('layout.app')
@section('content')
    <div class="section wb">
        <div class="container">
            <div class="section-title m30 text-center">
                <h1>4.000+ Stores Publishes 20.000+ <span class="element"></span></h1>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="{{ route('LandingPage.Search.items') }}" method="GET" class="well">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                @csrf
                                <input name="search" value="" type="text" class="form-control"
                                    placeholder="Search for stores..." autocomplete="off" data-provide="typeahead">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="invis1">

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="promobox">
                        <div class="post-media">
                            <a href="{{ route('LandingPage.Categorys') }}"><img
                                    src="{{ asset('assets/uploads/promo_01.png') }}" alt=""
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
                            <a href="{{ route('LandingPage.Categorys') }}"><img
                                    src="{{ asset('assets/uploads/promo_02.png') }}" alt=""
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
                            <a href="{{ route('LandingPage.Categorys') }}"><img
                                    src="{{ asset('assets/uploads/promo_03.png') }}" alt=""
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
            <div class="text-center store-list row">
                @foreach ($stores as $store)
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="post-media">
                            <a href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}"><img
                                    src="{{ asset('images/' . $store->store_img) }}" style="width:150px;height:150px;"
                                    class="img-responsive"></a>
                            <small>{{ $store->store_name }}</small>
                        </div><!-- end media -->
                    </div>
                @endforeach
            </div><!-- end row -->
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
                @forelse ($coupons as $coupon)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="coupon-list">
                            <div class="coupon-wrapper">
                                <div class="post-media min-vh-50" style="border:1px solid rgb(0,187,211);">
                                    <h2 class="text-center mt-3" style="color:rgb(0,187,211);padding:20px;">
                                        {{ $coupon->coupon_text }}
                                    </h2>
                                </div>
                                <!-- end media -->

                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                    </div>
                                    <!-- end coupon-top -->
                                    <h3><a href="#">{{ $coupon->coupon_name }}</a></h3>
                                    <p>{{ $coupon->coupon_des }}</p>
                                </div>
                                <!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="{{ $coupon->coupon_link }}">
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
                                            <h4><a href="#">{{ $coupon->coupon_name }}</a>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div style="border: 1px solid rgb(0,187,211)">
                                                        <h2 class="text-center mt-2" style="color:rgb(0,187,211)">
                                                            {{ $coupon->coupon_text }}</h2>
                                                    </div>
                                                    <div class="modal-button">
                                                        <a href="{{ $coupon->coupon_link }}" target="_blank"
                                                            title="" class="btn btn-default btn-block">Visit
                                                            Store <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-8">
                                                    <p>{{ $coupon->coupon_des }}</p>
                                                </div>
                                            </div>
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
                                                    <div class="col-md-8 text-center">
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
                @empty
                    <h4>No Featured coupons</h4>
                @endforelse
            </div>
            <div class="loadmorebutton text-center clearfix">
                <a href="{{ route('LandingPage.All.Coupons') }}" class="btn btn-custom">Browse More Coupons</a>
            </div><!-- end loadmore -->
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>New Deals</h2>
                    <hr>
                    <p class="lead">These are our new deals from hundreds of stores. With our codes take a
                        few seconds you can earn unlimited discounts.</p>
                </div>
            </div><!-- end title -->

            <div class="row grid-coupons">
                @forelse ($trending_coupons as $coupon)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="coupon-list">
                            <div class="coupon-wrapper">
                                <div class="post-media min-vh-50" style="border:1px solid rgb(0,187,211);">
                                    <h2 class="text-center mt-3" style="color:rgb(0,187,211);padding:20px;">
                                        {{ $coupon->coupon_text }}
                                    </h2>
                                </div>
                                <div class="coupon-meta">
                                    <h3><a href="#">{{ $coupon->coupon_name }}</a></h3>
                                    <p>{{ $coupon->coupon_des }}</p>
                                </div><!-- end meta -->

                                <div class="showcode p-3">
                                    <a href="#" class="code-link" data-ex-link="{{ $coupon->coupon_link }}">
                                        <span class="show-code">Show Deal</span>
                                    </a>
                                </div>
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
                                            <h4><a href="#">{{ $coupon->coupon_name }}</a></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div style="border: 1px solid rgb(0,187,211)">
                                                        <h2 class="text-center" style="color:rgb(0,187,211);padding:20px">
                                                            {{ $coupon->coupon_text }}</h2>
                                                    </div>
                                                    <div class="modal-button">
                                                        <a href="{{ $coupon->coupon_link }}" target="_blank"
                                                            title="" class="btn btn-default btn-block">Visit
                                                            Store <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="coupon-meta">
                                                        <div class="coupon-top clearfix">
                                                        </div>
                                                    </div>
                                                    <p>{{ $coupon->coupon_des }}</p>
                                                </div>
                                            </div>
                                        </div>
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
                                                    </div>
                                                </div><!-- end row -->
                                            </div><!-- end coupon-area -->
                                        </div><!-- end modal-footer -->
                                    </div><!-- end mpdal-content -->
                                </div><!-- end modal-dialog -->
                            </div><!-- end modal -->
                        </div><!-- end coupon list -->
                    </div>
                @empty
                    <h4>No more recent coupon</h4>
                @endforelse
            </div>
            <div class="loadmorebutton text-center clearfix">
                <a href="{{ route('LandingPage.Deals') }}" class="btn btn-custom">Browse more Deals</a>
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
                    @foreach ($categorys as $category)
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="customlist">
                                <li><a
                                        href="{{ route('LandingPage.Single.Category', ['category_slug' => $category->category_slug]) }}">{{ $category->category_name }}</a>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div><!-- end row -->
            </div><!-- end ttmenu-content -->
        </div>
    </div>
@endsection
