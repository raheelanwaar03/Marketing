@extends('layout.app')

@section('title')
    <h3>All Coupons</h3>
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="content col-md-12">
                    <hr class="invis3">
                    @forelse ($coupons as $coupon)
                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center P-4" style="border: 1px solid rgb(0,187,211)">
                                            <h1 style="color:rgb(0,187,211);font-size:30px;padding:30px;">
                                                {{ $coupon->coupon_text }}</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="coupon-meta mt-2">
                                            <h3><a>{{ $coupon->coupon_name }}</a></h3>
                                            <p>{{ $coupon->coupon_des }}.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode" style="float-right">
                                            <a href="#" class="code-link" data-ex-link="{{ $coupon->coupon_link }}">
                                                <span class="show-code">Show Deal</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : {{ $coupon->coupon_expire }}</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

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
                                                            <h2 class="text-center mt-2" style="color:rgb(0,187,211)">
                                                                {{ $coupon->coupon_text }}</h2>
                                                        </div>
                                                        <div class="modal-button">
                                                            <a href="{{ $coupon->coupon_link }}" target="_blank"
                                                                title="" class="btn btn-default btn-block">Visit Store
                                                                <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>{{ $coupon->coupon_des }}</p>

                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class=" row">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            {{ $coupons->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    @empty
                        <h4>no store item</h4>
                    @endforelse
                </div>
            </div>
            <div class="footer-content">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Popular Categories</h4>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Popular Categories</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="customlist">
                                <li><a
                                        href="{{ route('LandingPage.Single.Category', ['category_slug' => $category->category_slug]) }}">{{ $category->category_name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end row -->

                    <hr class="">

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Popular Stores</h4>
                        </div>
                        <!-- end col -->
                    </div>

                    <div class="text-center store-list row">
                        @forelse ($stores as $store)
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="post-media">
                                    <a href="#"><img src="{{ asset('images/' . $store->store_img) }}"
                                            style="width:150px;height:150px;" class="img-responsive"></a>
                                    <small>{{ $store->store_name }}</small>
                                </div>
                            </div>
                        @empty
                            <h3>No store available</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
