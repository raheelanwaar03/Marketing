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
            <div class="row">

                @php
                    $groupStores = $stores->groupBy(function ($store) {
                        return strtoupper(substr($store->name, 0, 1));
                    });
                @endphp

                @forelse ($groupStores as $letter => $stores)
                    <h2>All Stores starting from {{ $letter }}</h2>
                    @foreach ($stores as $store)
                        <div class="col-md-1 col-sm-3 col-xs-12">
                            <a href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}">
                                <div class="service-heading service-manufactureicon" style="min-height: 86px;">
                                    <h5 style="background-color:rgb(224, 224, 224);padding:10px;">{{ $store->store_name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @empty
                    <h3>No store added Yet</h3>
                @endforelse
            </div>
        </div>
    </section>
@endsection
