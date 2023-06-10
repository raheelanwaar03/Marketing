@extends('layout.app')

@section('title')
    Contact Us
@endsection

@section('breadcrumb')
    <section class="section page-title-wrapper wb">
        <div class="container">
            <div class="page-title pull-left">
                <p>We are here to help you</p>
                <h3>Contact Us</h3>
            </div>
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('LandingPage') }}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="contact-wrapper">
        <div class="contact-wrapper-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-title">
                                        <h6>Contact Us</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="post-comment-form-group">
                                        <form action="{{ route('LandingPage.ContactUs.Form') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="name" placeholder="Name*"
                                                        class="form-control" required="" aria-required="true">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" name="email" placeholder="Email*"
                                                        class="form-control" required="" aria-required="true">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" name="subject" placeholder="Subject"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea cols="30" name="message" rows="6" placeholder="Message*" class="form-control" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" value="Send Your Message"
                                                        class="btn btn-block btn-primary btn-lg">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="contact-info-wrapper">
                                        <p><i class="fa fa-envelope"></i>{{ env('APP_EMAIL') }}, <i
                                                class="fa fa-globe"></i>{{ env('APP_URL') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
