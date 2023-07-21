@extends('layout.app')

@section('title')
    All Categorys
@endsection

@section('breadcrum')
    <section class="section page-title-wrapper wb">
        <div class="container">
            <div class="page-title pull-left">
                <h3>Categories</h3>
            </div><!-- end title -->
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('LandingPage') }}">Home</a></li>
                        <li class="active">All Categories</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->
        </div>
    </section>
@endsection


@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="content col-md-12">
                    <div class="container">
                        <div class="row">
                            @forelse ($stores as $store)
                                <a href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}">
                                    <div class="col-md-2">
                                        <img src="{{ asset('images/' . $store->store_img) }}" class="img-responsive"
                                            style="width:150px;height:150px;" alt="image">
                                    </div>
                                </a>
                            @empty
                                <h4>No Store</h4>
                            @endforelse
                        </div>
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
            </div>
        </div>
    @endsection
