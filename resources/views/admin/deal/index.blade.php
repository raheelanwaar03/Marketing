@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">Admin Dashboard</h2>
                <a href="{{ route('Admin.Coupon.Deal') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <table class="table table-responsive table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Trending Status</th>
                                <th>Text</th>
                                <th>Code</th>
                                <th>Store</th>
                                <th>Expire Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Trending Status</th>
                                <th>Text</th>
                                <th>Code</th>
                                <th>Store</th>
                                <th>Expire Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{ $coupon->coupon_name }}</td>
                                    <td>{{ $coupon->coupon_type }}</td>
                                    <td>{{ $coupon->status == '1' ? 'ON':'OFF' }}</td>
                                    <td>{{ $coupon->coupon_text }}</td>
                                    <td>{{ $coupon->coupon_code ?? 'Not Required' }}</td>
                                    <td>{{ $coupon->coupon_store }}</td>
                                    <td>{{ $coupon->coupon_expire }}</td>
                                    <td>
                                        <a href="{{ route('Admin.Show.Coupon.Deals', ['id' => $coupon->id]) }}"
                                            class="btn btn-sm btn-primary">show</a>
                                        <a href="{{ route('Admin.Edit.Coupon', ['id' => $coupon->id]) }}"
                                            class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ route('Admin.Destroy.Coupon', ['id' => $coupon->id]) }}"
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
