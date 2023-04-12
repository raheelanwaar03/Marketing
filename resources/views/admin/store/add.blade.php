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
                            <h3 class="text-center my-3 text-gradient">Add New Store</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Name</label>
                                    <input type="text" name="store_name" class="form-control"
                                        placeholder="Enter Store Name">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Slug</label>
                                    <input type="text" name="store_slug" class="form-control"
                                        placeholder="Enter Store Slug">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Description</label>
                                    <textarea name="store_des" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Store Image</label>
                                    <input type="file" name="store_img" class="form-control">
                                </div>
                                <button class="btn btn-primary">Add Store</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
