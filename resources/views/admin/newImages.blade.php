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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('Admin.Store.Home.Image') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">First Image</label>
                                            <input type="file" name="home_img" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Secound Image</label>
                                            <input type="file" name="home_img1" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Third Image</label>
                                            <input type="file" name="home_img2" class="form-control" required>
                                        </div>
                                        <button class="btn btn-primary mt-3">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h3 class="my-3 mb-4 text-center">Images ON Home Page</h3>
            <div class="row">
                <div class="col-xl-12">
                    <table class="table table-responsive table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Image</th>
                                <th>Secound Image</th>
                                <th>Third Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($homeImages as $homeImage)
                                <tr>
                                    <td>{{ $homeImage->id }}</td>
                                    <td>
                                        <img src="{{ asset('images/'.$homeImage->home_img) }}" class="img-responsive" height="90px" width="90px">
                                    </td>
                                    <td>
                                        <img src="{{ asset('images/'.$homeImage->home_img1) }}" class="img-responsive" height="90px" width="90px">
                                    </td>
                                    <td>
                                        <img src="{{ asset('images/'.$homeImage->home_img2) }}" class="img-responsive" height="90px" width="90px">
                                    </td>
                                    <td>
                                        <a href="{{ route('Admin.Del.Home.Image',['id'=>$homeImage->id]) }}"
                                            class="btn btn-sm btn-danger">Delete</a>
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
