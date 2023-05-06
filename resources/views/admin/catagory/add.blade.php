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
                            <form action="{{ route('Admin.Store.Category') }}" method="POST">
                                @csrf
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Category Slug</label>
                                    <input type="text" name="category_slug" class="form-control" placeholder="Enter Category Slug">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Category Description</label>
                                    <textarea name="category_des" class="form-control" rows="5"></textarea>
                                </div>
                                <button class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
