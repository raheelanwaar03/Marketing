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
                                <th>Store Id</th>
                                <th>Store Name</th>
                                <th>Store Description</th>
                                <th>Store Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Store Id</th>
                                <th>Store Name</th>
                                <th>Store Description</th>
                                <th>Store Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($stores as $store)
                                <tr>
                                    <td>{{ $store->id }}</td>
                                    <td>{{ $store->store_name }}</td>
                                    <td>{{ $store->store_des }}</td>
                                    <td>
                                        <img src="{{ asset('images/'.$store->store_img) }}" height="90px"
                                            width="90px" class="img-fluid img-thumbnail" alt="{{ $store->store_img }}">
                                    </td>
                                    <td>{{ $store->created_at }}</td>
                                    <td>
                                        <a href="{{ route('Admin.Store.Show/',$store->store_slug) }}"
                                            class="btn btn-primary">show</a>
                                        <a href="{{ route('Admin.Edit.Store',['id' => $store->id]) }}"
                                            class="btn btn-info">Edit</a>
                                        {{-- <form action="{{ route('Admin.store.destroy', $store->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you really want to Delete this Store?')"
                                                class="btn btn-danger">Delete</button>
                                        </form>
                                    </td> --}}
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
