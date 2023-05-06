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
                        <div class="card-title">
                            <h3 class="text-center my-3 text-gradient">Add New Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Coupon.Deal') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Coupon Name</label>
                                    <input type="text" name="coupon_name" class="form-control"
                                        placeholder="Enter Coupon Name">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Coupon Slug</label>
                                    <input type="text" name="coupon_slug" class="form-control"
                                        placeholder="Enter Coupon Slug">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Coupon Description</label>
                                    <textarea name="coupon_des" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Coupon Type</label>
                                    <select name="coupon_type" class="form-control">
                                        <option value="Deal">Deal</option>
                                        <option value="Coupon">Coupon</option>
                                    </select>
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Coupon Link</label>
                                    <input type="text" name="coupon_link" class="form-control"
                                        placeholder="Enter Coupon Link">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Coupon Code</label>
                                    <input type="text" name="coupon_code" class="form-control"
                                        placeholder="Enter Coupon Code">
                                </div>
                                <div class="d-flex justify-content-center align-itmes-between">
                                    <div class="col-md-6 form-group my-3">
                                        <label for="" class="mb-1 ml-2">Coupon Category</label>
                                        <select name="coupon_category" class="form-control">
                                            @foreach ($categorys as $category)
                                                <option class="form-control"
                                                    value="{{ $category->id }}">
                                                    {{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group my-3">
                                        <label for="" class="mb-1 ml-2">Coupon Store</label>
                                        <select name="coupon_store" class="form-control">
                                            @foreach ($stores as $store)
                                                <option class="form-control" value="{{ $store->id }}">
                                                    {{ $store->store_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-check my-3">
                                    <label for="" class="form-check-label mb-1 ml-2">Trending</label>
                                    <input type="checkbox" name="status" class="form-check-input">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Coupon Image</label>
                                    <input type="file" name="coupon_img" class="form-control">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Coupon Expire</label>
                                    <input type="text" name="coupon_expire" class="form-control"
                                        placeholder="2023/01/25">
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

