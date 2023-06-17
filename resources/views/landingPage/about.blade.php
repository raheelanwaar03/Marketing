@extends('layout.app')

@section('title')
    About Us
@endsection

@section('breadcrum')
    <section class="section page-title-wrapper wb">
        <div class="container">
            <div class="page-title pull-left">
                <p>Who we are</p>
                <h3>About Us</h3>
            </div>
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('LandingPage') }}">Home</a></li>
                        <li class="active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="contact-wrapper">
        <div class="contact-wrapper-inner">
            <div class="container mb-4">
                <div class="row">
                    <div class="col-md-12">
                        Welcome to {{ env('APP_NAME') }}, your one-stop online shopping destination for all things fashionable and
                        trendy. At {{ env('APP_NAME') }}, we are committed to providing you with the latest and most stylish products
                        at competitive prices. Our online store offers a wide range of products, from clothing and
                        accessories to home decor and electronics, all designed to enhance your lifestyle. These terms and
                        conditions have been put in place to ensure that both you and {{ env('APP_NAME') }} have a clear understanding
                        of the expectations and responsibilities when shopping on our platform. By accessing and using our
                        website, you agree to abide by these terms and conditions. Our goal is to make your shopping
                        experience with us as easy and seamless as possible, while ensuring your safety and satisfaction.
                        Please take the time to carefully read through our terms and conditions, which outline our policies
                        and procedures on various aspects of shopping with us, such as ordering, payment, shipping, returns,
                        and exchanges. If you have any questions or concerns, please do not hesitate to contact our customer
                        service team for assistance. Thank you for choosing {{ env('APP_NAME') }}, we appreciate your business and
                        hope you enjoy your shopping experience with us.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
