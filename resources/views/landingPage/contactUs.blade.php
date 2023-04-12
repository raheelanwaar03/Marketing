@extends('auth.layout.app')

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
                                        <form action="#" method="post" id="cbx-contact-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" name="cbxname" placeholder="Name*"
                                                        class="form-control" required="" aria-required="true">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" name="cbxemail" placeholder="Email*"
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
                                                    <textarea cols="30" name="cbxmessage" rows="6" placeholder="Message*" class="form-control" required=""></textarea>
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
                                            <p>+94 3217 33221</p>
                                        </div>
                                        <div class="hotline-thumb">
                                            <img src="assets/img/contact/mr_helpline.jpg" alt=""
                                                class="img-responsive img-rounded" />
                                        </div>
                                    </div>

                                    <div class="contact-info-wrapper">
                                        <h6>Address:</h6>
                                        <p>Apartment 6H, Dilara Tower, Bir Uttam C.R. Dutta Road, Dhaka 1205, Bangladesh</p>
                                        <h6>Contact Info:</h6>
                                        <p><i class="fa fa-phone"></i>88017544-514154, <i class="fa fa-phone"></i>881475
                                            24456 55</p>
                                        <p><i class="fa fa-envelope"></i>info@couponzgmail.com, <i
                                                class="fa fa-globe"></i>www.domain.com</p>
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
