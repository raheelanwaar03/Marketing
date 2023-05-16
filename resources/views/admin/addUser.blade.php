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
                            <h3 class="text-center my-3 text-gradient">Add New User</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter User Name">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter User Slug">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group my-3">
                                    <label for="" class="mb-1 ml-2">Role</label>
                                    <select name="role" class="form-control" id="">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary">Add User</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
