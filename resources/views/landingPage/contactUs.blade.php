@extends('layout.app')

@section('title')
    Contact Us
@endsection
@section('content')
    <div class="container">
        <div class="row my-5">
            <h3>Contact Us</h3>
            <div class="col-md-7 mb-5">
                <div class="post-comment-form-group">
                    <form action="{{ route('LandingPage.ContactUs.Form') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Name*" class="form-control" required=""
                                    aria-required="true">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Email*" class="form-control"
                                    required="" aria-required="true">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="subject" placeholder="Subject" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea cols="30" name="message" rows="6" placeholder="Message*" class="form-control" required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Send Your Message" class="btn btn-block btn-primary btn-lg">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-info-wrapper">
                    <p><i class="fa fa-envelope"></i>{{ env('APP_EMAIL') }}
                        <br>
                        <i class="fa fa-globe"></i>{{ env('APP_URL') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
