@extends('admin.layout.app')

@section('content')
    <div class="page order-2 flex-grow-1">
        <!--[ Start:: page header link ]-->
        <header class="page-header sticky-top">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <a class="me-4 d-lg-inline-flex d-none menu-toggle" href="#" title="Sidebar Toggle">
                        <svg width="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill="var(--accent-color)"
                                d="M14.7071 7.29289C15.0976 7.68342 15.0976 8.31658 14.7071 8.70711L12.4142 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H12.4142L14.7071 15.2929C15.0976 15.6834 15.0976 16.3166 14.7071 16.7071C14.3166 17.0976 13.6834 17.0976 13.2929 16.7071L9.29289 12.7071C8.90237 12.3166 8.90237 11.6834 9.29289 11.2929L13.2929 7.29289C13.6834 6.90237 14.3166 6.90237 14.7071 7.29289Z" />
                            <path fill="var(--accent-color)" fill-opacity="0.3"
                                d="M4 3C4.55228 3 5 3.44772 5 4V20C5 20.5523 4.55228 21 4 21C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3Z" />
                        </svg>
                    </a>
                    <ul class="header-menu flex-grow-1">
                        <li class="w-100 d-none d-md-inline-flex">
                            <!--[ Start:: main search ]-->
                            <div class="search">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-muted"
                                        d="M10.2742 9.051C11.1215 7.89485 11.501 6.46142 11.3368 5.0375C11.1725 3.61358 10.4767 2.30417 9.38854 1.37124C8.30034 0.438302 6.90002 -0.0493505 5.46772 0.0058385C4.03543 0.0610275 2.67678 0.654988 1.6636 1.66889C0.650425 2.68279 0.0574364 4.04186 0.00327226 5.4742C-0.0508918 6.90654 0.437763 8.30651 1.37147 9.39404C2.30519 10.4816 3.61509 11.1764 5.03913 11.3396C6.46317 11.5028 7.89633 11.1223 9.05187 10.2742H9.05099C9.07724 10.3092 9.10524 10.3425 9.13674 10.3749L12.5055 13.7436C12.6696 13.9078 12.8921 14.0001 13.1242 14.0002C13.3564 14.0003 13.579 13.9081 13.7432 13.7441C13.9074 13.58 13.9997 13.3574 13.9997 13.1253C13.9998 12.8932 13.9077 12.6706 13.7436 12.5064L10.3749 9.13762C10.3436 9.10596 10.3099 9.0767 10.2742 9.05012V9.051ZM10.5 5.6875C10.5 6.31948 10.3755 6.94528 10.1337 7.52916C9.89181 8.11304 9.53733 8.64357 9.09044 9.09045C8.64356 9.53733 8.11304 9.89182 7.52916 10.1337C6.94528 10.3755 6.31948 10.5 5.68749 10.5C5.05551 10.5 4.42971 10.3755 3.84583 10.1337C3.26195 9.89182 2.73142 9.53733 2.28454 9.09045C1.83766 8.64357 1.48317 8.11304 1.24132 7.52916C0.999471 6.94528 0.874992 6.31948 0.874992 5.6875C0.874992 4.41114 1.38202 3.18706 2.28454 2.28455C3.18706 1.38203 4.41114 0.874997 5.68749 0.874997C6.96385 0.874997 8.18793 1.38203 9.09044 2.28455C9.99296 3.18706 10.5 4.41114 10.5 5.6875Z" />
                                </svg>
                                <input class="form-control rounded-pill" type="search" placeholder="Search"
                                    aria-label="Search">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="page-title mb-lg-4">
            <div class="container-fluid">
                <ol class="breadcrumb bg-transparent w-100 li_animate mb-3 mb-md-1">
                    <li class="breadcrumb-item"><a href="{{ route('Admin.Dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Categories</li>
                </ol>
                <h1 class="mb-0 text-gradient font-heading">Hello, {{ auth()->user()->name }}!</h1>
                <div class="ms-sm-auto mt-2 mt-sm-0">
                </div>
            </div>
        </div>
        <!--[ Start:: page body area ]-->
        <main class="page-body">
            <div class="container-fluid">
                <!--[ Start:: My Dashboard ]-->

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Catagory Id</th>
                                            <th>Catagory Name</th>
                                            <th>Catagory Description</th>
                                            <th>Catagory Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Catagory Id</th>
                                            <th>Catagory Name</th>
                                            <th>Catagory Description</th>
                                            <th>Catagory Image</th>
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
                                                    <img src="{{ asset('images/' . $store->store_img) }}" height="90px"
                                                        width="90px" class="img-fluid img-thumbnail" alt="store_img">
                                                </td>
                                                <td>{{ $store->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Store.Show/',$store->store_slug) }}"
                                                        class="btn btn-primary">show</a>
                                                  {{--   <a href="{{ route('store.edit', ['store' => $store->id]) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <form action="{{ route('Admin.store.destroy', $store->id) }}" method="POST"
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
        </main>
        <!--[ Start:: page footer link copywrite ]-->
        <footer class="page-footer py-4 mt-4 static">
            <div class="container-fluid">
                <p class="col-md-4 mb-0 text-muted">© 2022 <a  target="_blank" class="underline"
                        title="{{ env('APP_NAME') }}">{{ env('APP_NAME') }}</a>, All Rights Reserved.</p>
            </div>
        </footer>
    </div>
    <!--[ Start modal:: Full screen grid menu ]-->
    <script>
        $("span.pie").peity("pie", {
            fill: ["var(--primary-color)", "var(--border-color)"]
        })
    </script>
@endsection


@section('editor')
<script>
    ClassicEditor
        .create( document.querySelector( '#textEditor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
