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
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Coupon Name</th>
                                <th>Coupon Category</th>
                                <th>Coupon Store</th>
                                <th>Coupon Image</th>
                                <th>Expire Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Coupon Name</th>
                                <th>Coupon Category</th>
                                <th>Coupon Store</th>
                                <th>Coupon Image</th>
                                <th>Expire Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{ $coupon->coupon_name }}</td>
                                    <td>{{ $coupon->coupon_category }}</td>
                                    <td>{{ $coupon->coupon_store }}</td>
                                    <td>
                                        <img src="{{ asset('images/' . $coupon->coupon_img) }}" height="90px" width="90px"
                                            class="img-fluid img-thumbnail" alt="{{ $coupon->coupon_img }}">
                                    </td>
                                    <td>{{ $coupon->coupon_expire }}</td>
                                    <td>
                                        {{-- <a href="{{ route('Admin.coupon.Show/',$coupon->coupon_slug) }}"
                                            class="btn btn-primary">show</a> --}}
                                        {{--   <a href="{{ route('coupon.edit', ['coupon' => $coupon->id]) }}"
                                            class="btn btn-info">Edit</a>
                                        <form action="{{ route('Admin.coupon.destroy', $coupon->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you really want to Delete this coupon?')"
                                                class="btn btn-danger">Delete</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
