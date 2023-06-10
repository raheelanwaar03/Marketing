@extends('layout.app')

@section('title')
    All Stores
@endsection

@section('breadcrumb')
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

@endsection

@section('content')

    <div class="section">
        <div class="container">
            <div class="row">
                @forelse ($stores as $store)
                    <a href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}">
                        <div class="col-md-2">
                            <img src="{{ asset('images/' . $store->store_img) }}" class="img-responsive" style="width:150px;height:150px;" alt="image">
                        </div>
                    </a>
                @empty
                    <h4>No Store</h4>
                @endforelse
            </div>
        </div>
        <div class="container">

            <div class="footer-content">
                <div class="row">
                    <div class="col-md-12">
                        <h4>All Stores</h4>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Store Names</h4>
                        </div>
                    </div>
                    <div class="row">
                        @forelse ($stores as $store)
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <ul class="customlist">
                                    <li><a
                                            href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}">{{ $store->store_name }}</a>
                                    </li>
                                </ul>
                            </div>
                        @empty
                            <h4>No Store Avaliable</h4>
                        @endforelse
                    </div>

                    <hr class="">
                </div>
            </div>
        </div>
    @endsection
