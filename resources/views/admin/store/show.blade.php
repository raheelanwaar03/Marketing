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
                                        <h4 class="m-4">Title: {{ $store->store_name }}</h4>
                                        <p class="m-4">Description: {{ $store->store_des }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <img src="{{ asset('images/' . $store->store_img) }}" class="card-img"
                                            height="400px" width="400px" alt="{{ $store->store_img }}">
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
