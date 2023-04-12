@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">Admin Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="row">
                            <div class="d-flex">
                                <div class="col-lg-6">
                                    <div class="card-title m-4">
                                        <h2 class="m-4">Title: {{ $coupon->coupon_name }}</h2>
                                        <p class="m-4">Description: {{ $coupon->coupon_des }}</p>
                                        <h4>Expire: {{ $coupon->coupon_expire }}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <img src="{{ asset('images/' . $coupon->coupon_img) }}" class="card-img"
                                            height="400px" width="400px" alt="{{ $coupon->coupon_img }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
