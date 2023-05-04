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
                            <h3 class="text-center my-3 text-gradient">Edit Store</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Store',['id'=>$store->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Name</label>
                                    <input type="text" name="store_name" value="{{ $store->store_name }}" class="form-control"
                                        placeholder="Enter Store Name">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Slug</label>
                                    <input type="text" name="store_slug" value="{{ $store->store_name }}" class="form-control"
                                        placeholder="Enter Store Slug">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Description</label>
                                    <input type="text" name="store_des" value="{{ $store->store_des }}" class="form-control">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Country</label>
                                    <input type="text" name="store_country" value="{{ $store->store_country }}" class="form-control">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Network</label>
                                    <input type="text" name="store_network" value="{{ $store->store_network }}" class="form-control">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store link</label>
                                    <input type="text" name="store_link" value="{{ $store->store_link }}" class="form-control">
                                </div>
                                <div class="form-check my-3">
                                    <label for="" class="form-check-label mb-1 ml-2">Hide</label>
                                    <input type="checkbox" name="status" {{ $store->status == '1' ? 'checked':'' }} class="form-check-input">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Image</label>
                                    <input type="file" name="store_img" value="{{ $store->store_img }}" class="form-control">
                                </div>
                                <div class="my-3">
                                    <img src="{{ asset('images/'.$store->store_img) }}" alt="store img" height="80px" width="80px">
                                </div>
                                <button class="btn btn-primary">Update Store</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
