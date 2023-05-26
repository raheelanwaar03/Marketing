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
                            <h3 class="text-center my-3 text-gradient">Edit Category</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Category', ['id' => $category->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Category Name</label>
                                    <input type="text" name="category_name" value="{{ $category->category_name }}"
                                        class="form-control">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Category Slug</label>
                                    <input type="text" name="category_slug" value="{{ $category->category_slug }}"
                                        class="form-control">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Category Description</label>
                                    <textarea name="category_des" id="" cols="30" rows="10">{{ $category->category_des }}</textarea>
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Category image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="">
                                    <img src="{{ asset('images/113358.jpg') }}" height="75px" width="75px"
                                        alt="image">
                                </div>
                                <button class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
