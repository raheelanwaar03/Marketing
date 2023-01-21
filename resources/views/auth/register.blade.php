@extends('auth.layout.app')

@section('content')
    <section class="section page-title-wrapper wb">
        <div class="container">
            <div class="page-title pull-left">
                <p>You can take best deals with us.</p>
                <h3>Register</h3>
            </div><!-- end title -->
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('LandingPage') }}">Home</a></li>
                        <li class="active">Authentication</li>
                        <li class="active">Register</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->
        </div>
    </section><!-- end section -->

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="content col-md-7">
                    <div class="post-wrapper">
                        <div class="widget-title">
                            <h4 class="text-center"><span>Register New Account</span></h4>
                        </div>
                        <!-- end widget-title -->

                        <hr class="invis3">

                        <form id="submit" class="comment-form newsletter">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Your Name</label>
                                    <input type="name" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Your Email</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Confirm Password</label>
                                    <input type="confirmation_password" class="form-control" placeholder="">
                                </div>
                            </div>
                            <!-- end row -->

                            <!-- end row -->

                            <button class="btn btn-custom">Register</button>
                        </form>

                    </div><!-- end coupon-wrapper -->
                </div><!-- end content -->

                <div class="sidebar col-md-5">
                    <img src="{{ asset('assets/images/auth.png') }}" height="450px" width="450px" alt="img">
                </div>
            </div><!-- end row -->

            <!-- end ttmenu-content -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection
