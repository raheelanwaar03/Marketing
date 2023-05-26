@extends('layout.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="content col-md-12">
                    <div class="post-wrapper single-store">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="#"><img src="{{ asset('images/' . $store->store_img) }}" alt="img"
                                            height="70px" width="70px" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h3>{{ $store->store_name }}</h3>
                                        <h4>Country: {{ $store->store_country }}</h4>
                                    </div>
                                    <p>{{ $store->store_des }}</p>
                                </div>
                                <div class="">
                                    <a href="{{ $store->store_link }}" target="_blank" class="btn btn-primary">Go To
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="invis3">
                    @forelse ($coupons as $coupon)
                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center">
                                            <a href="coupon-single.html"><img
                                                    src="{{ asset('images/' . $coupon->coupon_img) }}" alt="img"
                                                    class="img-responsive"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="coupon-meta">
                                            <h3><a href="coupon-single.html">{{ $coupon->coupon_name }}</a></h3>
                                            <p>{{ $coupon->coupon_des }}.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link" data-ex-link="{{ $coupon->coupon_link }}">
                                                <span class="coupon-code">{{ $coupon->coupon_code }}</span>
                                                <span class="show-code">Show Code</span>
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
                                                        <a href="#"><img
                                                                src="{{ asset('images/' . $coupon->coupon_img) }}"
                                                                alt="" class="img-responsive"></a>
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
                        <h4>We have coupon on all type of Categories</h4>
                    </div>
                    <!-- end col -->
                </div>

                <div class="row">
                    @foreach ($categorys as $category)
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <ul class="customlist">
                            <li><a href="{{ route('LandingPage.Single.Category',['category_slug'=>$category->category_slug]) }}">{{ $category->category_name }}</a></li>
                        </ul>
                    </div>
                    @endforeach
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
                                <a href="coupon-single.html"><img src="{{ asset('images/' . $store->store_img) }}"
                                        alt="" height="100px" width="100px" class="img-thumbnail img-responsive"></a>
                                <small>{{ $store->store_name }}</small>
                            </div>
                        </div>
                    @empty
                        <h3>NO Store Avaliable</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
