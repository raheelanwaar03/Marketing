@extends('auth.layout.app')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="sidebar col-md-8">
                    <div class="widget clearfix">

                        <form href="{{ route('register') }}" method="POST" class="contact-form newsletter">
                            @csrf
                            <div class="row">
                                <div class="col-md-">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Your Name <small>Enter your company name</small></label>
                                        <input type="text" name="name" class="form-control" placeholder="Jenny Pelt">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Email <small>Enter offical email here</small></label>
                                        <input type="email" name="email" class="form-control" placeholder="info@gmail.com">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">New Password <small>Enter new password</small></label>
                                        <input type="password" name="password" class="form-control" placeholder="*********">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label class="control-label">Re-New Password <small>Re-Enter new
                                                password</small></label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            placeholder="*********">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end content -->
            </div><!-- end row -->
        @endsection
