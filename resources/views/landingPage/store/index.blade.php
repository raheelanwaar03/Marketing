@extends('layout.app')

@section('content')
    <section class="section page-title-wrapper wb">
        <div class="container">
            <div class="page-title pull-left">
                <p>Here is all stores</p>
                <h3>All Stores</h3>
            </div><!-- end title -->
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('LandingPage') }}">Home</a></li>
                        <li class="active">Stores</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->
        </div>
    </section><!-- end section -->

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="content col-md-12">
                    <div class="post-wrapper single-store">
                        @forelse ($stores as $store)
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <a href="#"><img src="{{ asset('images/' . $store->store_img) }}"
                                                alt="" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="coupon-meta">
                                        <h3>{{ $store->store_name }}</h3>
                                        <p>{{ $store->store_des }}</p>
                                    </div>
                                    <div class="coupon-bottom clearfix">
                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug, 'id' => $store->id]) }}"
                                                        class="fb-button btn btn-primary"><span class="hidden-xs">See All
                                                            Coupons on this store</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h3>NO store avaliable</h3>
                        @endforelse
                    </div>
                    <hr class="invis3">
                    <div class="">
                    </div>
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
                                    <a href="#"><img src="{{ $store->store_img }}" alt=""
                                            class="img-responsive"></a>
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
    @endsection
