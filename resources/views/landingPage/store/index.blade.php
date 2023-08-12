@extends('layout.app')

@section('title')
    All Stores
@endsection

@section('breadcrum')
    <section class="section page-title-wrapper wb">
        <div class="container">
            <div class="page-title pull-left">
                <h3>Stores</h3>
            </div>
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('LandingPage') }}">Home</a></li>
                        <li class="active">All Stores</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('content')
    <section class="pad100-50-top-bottom">
        <div class="container">
            <div class="row ">
                @forelse ($stores as $store)
                <div class="col-md-3 col-sm-3 col-xs-12 marbtm50 service-list-column">
                    <a href="{{ route('LandingPage.Single.Store',['store_slug'=>$store->store_slug]) }}">
                        <span class="image_hover"> <img src="{{ asset('images/'. $store->store_img) }}"
                                class="img-responsive zoom_img_effect" alt="Kitchen Appliances-image"></span>
                        <div class="service-heading service-manufactureicon" style="min-height: 86px;">
                            <h5>{{ $store->store_name }}</h5>
                            <span class="read-more-link btn"><a href="{{ route('LandingPage.Single.Store',['store_slug'=>$store->store_slug]) }}">View Coupons</a></span>
                        </div>
                    </a>
                </div>
                @empty
                <h3>No store added Yet</h3>
                @endforelse
            </div>
        </div>
    </section>
@endsection



