@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">Admin Dashboard</h2>
                <a href="{{ route('Admin.Add.Store') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Store Name</th>
                                <th>Store Description</th>
                                <th>Store Link</th>
                                <th>Showing Status</th>
                                <th>Store Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Store Name</th>
                                <th>Store Description</th>
                                <th>Store Link</th>
                                <th>Showing Status</th>
                                <th>Store Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($stores as $store)
                                <tr>
                                    <td>{{ $store->store_name }}</td>
                                    <td>{{ $store->store_des }}</td>
                                    <td>{{ $store->store_link }}</td>
                                    <td>{{ $store->status == '1' ? 'Hide':'Showing' }}</td>
                                    <td>
                                        <img src="{{ asset('images/' . $store->store_img) }}" height="90px" width="90px"
                                            class="img-fluid img-thumbnail" alt="{{ $store->store_img }}">
                                    </td>
                                    <td>{{ $store->created_at }}</td>
                                    <td>
                                        <a href="{{ route('Admin.Store.Show/', $store->store_slug) }}"
                                            class="btn btn-sm btn-primary">Details</a>
                                        <a href="{{ route('Admin.Edit.Store', ['id' => $store->id]) }}"
                                            class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ route('Admin.Delete.Store', ['id' => $store->id]) }}"
                                            class="btn btn-sm btn-danger">Delete</a>
                                        <a href="{{ route('Admin.Hide.Store',['id'=>$store->id]) }}" class="btn btn-sm btn-warning">Hide</a>
                                        <a href="{{ route('Admin.visible.Store',['id'=>$store->id]) }}" class="btn btn-sm btn-success">Show</a>
                                </tr>
                            @endforeach
                            {{ $stores->withQueryString()->links('pagination::bootstrap-4') }}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
