@extends('layout.app')

@section('title')
    Terms & Conditions
@endsection

@section('breadcrum')
    <section class="section page-title-wrapper wb">
        <div class="container">
            <div class="page-title pull-left">
                <p>Our Policy</p>
                <h3>Terms & Conditions</h3>
            </div>
            <div class="pull-right hidden-xs">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('LandingPage') }}">Home</a></li>
                        <li class="active">Terms & Conditions</li>
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
                        To use {{ env('APP_NAME') }}, our online shopping and affiliate marketing website, you must meet certain
                        eligibility criteria, including but not limited to: Age: You must be at least 18 years of age or
                        older to use our website. If you are under 18, you may only use our website under the supervision of
                        a parent or legal guardian. Residency: You must be a resident of a country where {{ env('APP_NAME') }}
                        operates and where the use of our website is legal. Personal Information: You must provide accurate
                        and complete personal information during the registration and checkout process, including your name,
                        address, phone number, and email address. Payment Information: You must provide valid payment
                        information, such as a credit or debit card, to complete your purchase or receive commission
                        payments as an affiliate. Compliance with Terms and Conditions: You must agree to and abide by our
                        terms and conditions, which outline our policies and procedures related to ordering, payment,
                        shipping, returns, and exchanges as well as affiliate marketing guidelines. Prohibited Activities:
                        You must not use {{ env('APP_NAME') }} for any illegal, fraudulent, or unauthorized purpose, or engage in any
                        prohibited activities as an affiliate, such as spamming, false advertising, or misrepresenting our
                        products or services. Affiliate Program: To participate in our affiliate program, you must apply and
                        be approved by our team, which may require you to meet additional eligibility criteria and comply
                        with our affiliate terms and conditions. We reserve the right to refuse service to anyone for any
                        reason at any time. If we discover that you do not meet our eligibility criteria or that you have
                        violated our terms and conditions or affiliate program guidelines, we may suspend or terminate your
                        account and access to our website and affiliate program. Creating an account on {{ env('APP_NAME') }}, our
                        online shopping and affiliate marketing website, is a simple and straightforward process that
                        requires you to follow these steps: Click on the "Sign In" or "Register" button on the top right
                        corner of the homepage. Fill out the registration form with your personal information, such as your
                        name, email address, and password. Check the box to agree to our terms and conditions and privacy
                        policy. Click on the "Create Account" button to complete the registration process. Once you have
                        created an account, you will have access to various features and benefits, such as: Personalized
                        Shopping Experience: You can save your shipping and payment information for faster and more
                        convenient checkout, view your order history, and track your orders. Affiliate Program
                        Participation: If you have applied and been approved for our affiliate program, you can access your
                        affiliate dashboard to view your commissions, generate affiliate links, and track your referrals.
                        Newsletter Subscription: You can opt-in to receive our email newsletter with exclusive offers,
                        promotions, and updates on new products. By creating an account, you are also responsible for
                        maintaining the confidentiality and security of your login credentials, including your username and
                        password. You are also responsible for any activity that occurs under your account, whether
                        authorized or unauthorized. If you suspect that your account has been compromised, you must notify
                        us immediately and change your password. Please note that we reserve the right to suspend or
                        terminate your account at any time, for any reason, if we determine that you have violated our terms
                        and conditions or engaged in any prohibited activities
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
