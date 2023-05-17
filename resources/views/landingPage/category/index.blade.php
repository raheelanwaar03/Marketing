@extends('layout.app')

@section('content')
    <section class="section page-title-wrapper wb">
        <div class="container">
            <div class="page-title pull-left">
                <p>Here is all category</p>
                <h3>All Categorys</h3>
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
                        @forelse ($categorys as $category)
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        @if ($category->image != '')
                                        <a href="#"><img src="{{ asset('images/' . $category->image) }}"
                                            alt="" class="img-responsive"></a>
                                        @else
                                            <h3>{{ $category->category_name }}</h3>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="coupon-meta">
                                        <h3>{{ $category->category_name }}</h3>
                                        <p>{{ $category->category_des }}</p>
                                    </div>
                                    <div class="coupon-bottom clearfix">
                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="{{ route('LandingPage.Single.Category', ['category_slug' => $category->category_slug, 'id' => $category->id]) }}"
                                                        class="fb-button btn btn-primary"><span class="hidden-xs">See All
                                                            Coupons on this category</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h3>NO Category avaliable</h3>
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
                                    <a href="#"><img src="{{ asset('images/'.$store->store_img) }}" alt=""
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
