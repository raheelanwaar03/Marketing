@extends('layout.app')

@section('title')
    Contact Us
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
                                                        class="btn btn-block btn-brand btn-lg">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="contact-hotline">
                                        <div class="hotline-content">
                                            <p>HOTLINE</p>
                                            <p>{{ env('APP_NUM') }}</p>
                                        </div>
                                        <div class="hotline-thumb">
                                            <img src="assets/img/contact/mr_helpline.jpg" alt=""
                                                class="img-responsive img-rounded" />
                                        </div>
                                    </div>

                                    <div class="contact-info-wrapper">
                                        <h6>Address:</h6>
                                        <p>{{ env('APP_ADDRESS') }}</p>
                                        <h6>Contact Info:</h6>
                                        <p><i class="fa fa-phone"></i>{{ env('APP_NUM') }}</p>
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
