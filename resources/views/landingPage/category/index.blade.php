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
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')


<section class="pad100-50-top-bottom">
    <div class="container">
        <div class="row ">
           <div class="text-center">
            <h2 style="border: 1px solid red;color:red;margin-top:8px;margin-bottom:8px;">All Categories</h2>
           </div>
        </div>
    </div>
</section>

    <section class="pad100-50-top-bottom">
        <div class="container">
            <div class="row ">
                @forelse ($categorys as $category)
                    <div class="col-md-3 col-sm-3 col-xs-12 marbtm50 service-list-column">
                        <a href="{{ route('LandingPage.Single.Category', ['category_slug' => $category->category_slug]) }}">
                            <span class="image_hover"> <img src="{{ asset('images/' . $category->image) }}"
                                    class="img-responsive zoom_img_effect" alt="Kitchen Appliances-image"></span>
                            <div class="service-heading service-manufactureicon" style="min-height: 86px;">
                                <h5>{{ $category->category_name }}</h5>
                                <span class="read-more-link btn"><a
                                        href="{{ route('LandingPage.Single.Category', ['category_slug' => $category->category_slug]) }}">View
                                        Coupons</a></span>
                            </div>
                        </a>
                    </div>
                @empty
                    <h3>No category added Yet</h3>
                @endforelse
                <div class="">{{ $categorys->withQueryString()->links('pagination::bootstrap-5') }}</div>
            </div>
        </div>
    </section>
@endsection
