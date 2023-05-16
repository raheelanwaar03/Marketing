@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">Admin Dashboard</h2>
                <a href="{{ route('Admin.All.Categories') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Catagory Name</th>
                                <th>Catagory Description</th>
                                <th>Catagory Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Catagory Name</th>
                                <th>Catagory Description</th>
                                <th>Catagory image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categorys as $category)
                                <tr>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->category_des }}</td>
                                    <td>
                                        @if ($category->image != null)
                                            <img src="{{ asset('images/' . $category->image) }}" class="img-thumbnail"
                                                height="75px" width="75px" alt="image">
                                        @else
                                            <p>No Image for this category</p>
                                        @endif
                                    </td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        <a href="{{ route('Admin.Category.Show/', $category->category_slug) }}"
                                            class="btn btn-sm btn-primary">show</a>
                                        <a href="{{ route('Admin.Edit.Category', ['id' => $category->id]) }}"
                                            class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ route('Admin.Delete.Category', ['id' => $category->id]) }}"
                                            onclick="return confirm('Are you really want to Delete this Category?')"
                                            class="btn btn-sm btn-danger">Delete Category</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
