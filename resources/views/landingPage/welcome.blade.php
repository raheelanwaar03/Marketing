@extends('layout.app')

@section('title')
    NewCouponsBook
@endsection

@section('content')
    <div id="minimal-bootstrap-carousel" class="home4 carousel slide carousel-fade shop-slider full_width"
        data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active slide-1">
                <div class="carousel-caption">
                    <div class="thm-container">
                        <div class="box valign-middle">
                            <div class="content text-left">
                                <h1 data-animation="animated fadeInUp">Best Online Coupons</h1>
                                <p data-animation="animated fadeInDown">Find best coupons offers available on popoular
                                    brands in all categories like Clothing, Jewellery, Shoes, Electronics and baby
                                    products ...</p>
                                <a data-animation="animated fadeInUp" href="coupon_brands.html"
                                    class="header-requestbtn learn-more hvr-bounce-to-right">Visit Brands</a>
                                <a data-animation="animated fadeInUp" href="category-list.html"
                                    class="header-requestbtn learn-more our-solution hvr-bounce-to-right">Categories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-2">
                <div class="carousel-caption">
                    <div class="thm-container">
                        <div class="box valign-middle">
                            <div class="content home1-slide3 text-center">
                                <h1 data-animation="animated fadeInUp">Innovation In Online Shopping </h1>
                                <p data-animation="animated fadeInDown">Shopping and coupons deals at one place help
                                    you find everything you want from anywhere</p>
                                <a data-animation="animated fadeInUp" href="coupon_brands.html"
                                    class="header-requestbtn learn-more hvr-bounce-to-right btn-center">Coupon
                                    Brands</a>
                                <a data-animation="animated fadeInUp" href="category-list.html"
                                    class="header-requestbtn learn-more our-solution hvr-bounce-to-right btn-center">Coupon
                                    Categories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-3">
                <div class="carousel-caption">
                    <div class="thm-container">
                        <div class="box valign-middle">
                            <div class="content home1-slide3 text-center">
                                <h1 data-animation="animated fadeInUp">Variety in Coupons </h1>
                                <p data-animation="animated fadeInDown">All brands and stores are available in USA, UK,
                                    Australia and Dubai</p>
                                <a data-animation="animated fadeInUp" href="coupon_brands.html"
                                    class="header-requestbtn learn-more hvr-bounce-to-right btn-center">Stores</a>
                                <a data-animation="animated fadeInUp" href="category-list.html"
                                    class="header-requestbtn learn-more our-solution hvr-bounce-to-right btn-center">Categories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev"> <i
                class="fa fa-angle-left"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control"
            href="#minimal-bootstrap-carousel" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> <span
                class="sr-only">Next</span> </a>
    </div>
    <section class="certifield-section yellow-background">
        <div class="container">
            <h3 style="text-align: center; margin-bottom:20px">Top Best Brands used online on figarodeals</h3>
            <!-- <a href=""><img src="{{ asset('assets/admin/assets/logo/4patriots_250.jpg') }}" width="80" height="80"> </a> -->
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/pottery-barn.html"><img
                        src="{{ asset('assets/admin/assets/logo/pottery-barn_250.jpg') }}" width="80" height="80">
                </a></div>
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/muji.html"><img
                        src="{{ asset('assets/admin/assets/logo/muji_250.jpg') }}" width="80" height="80">
                </a></div>
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/mothercare.html"><img
                        src="{{ asset('assets/admin/assets/logo/mothercare_250.jpg') }}" width="80" height="80"> </a>
            </div>
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/american-eagle.html"><img
                        src="{{ asset('assets/admin/assets/logo/american-eagle_250.jpg') }}" width="80" height="80">
                </a></div>
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/dickies-life.html"><img
                        src="{{ asset('assets/admin/assets/logo/dickies-life_250.png') }}" width="80" height="80">
                </a></div>
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/lorna-jane.html"><img
                        src="{{ asset('assets/admin/assets/logo/lorna-jane_250.jpg') }}" width="80" height="80"> </a>
            </div>
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/sephra.html"><img
                        src="{{ asset('assets/admin/assets/logo/sephra_250.jpg') }}" width="80" height="80">
                </a></div>
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/melinda-maria.html"><img
                        src="{{ asset('assets/admin/assets/logo/melinda-maria_250.jpg') }}" width="80"
                        height="80"> </a></div>
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/kendra-scott.html"><img
                        src="{{ asset('assets/admin/assets/logo/kendra-scott_250.jpg') }}" width="80" height="80">
                </a></div>
            <div style="margin: 15px; display:inline-block"><a href="coupon-codes/the-body-shop.html"><img
                        src="{{ asset('assets/admin/assets/logo/thebodyshop_250.jpg') }}" width="80" height="80">
                </a></div>
        </div>
    </section>
    <section class="" style="padding: 30px 0;">
        <div class="container">
            <div class="row ">
                <div class="head-section wdt-100">
                    <div class="col-lg-5 col-md-6 col-sm-4 col-xs-12">
                        <h3>Coupons & Deals</h3>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12">
                        <p class="fnt-18">Find Thousand of Coupons codes, bargains and moving offers. These coupons can
                            save you in your purchases you made web-based on any store. Thousand of stores are
                            accessible in every Classes including design, jewellery , Garments and electronic</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/light-in-the-box_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>£15 off orders over £99</h5>
                            <p class="line-height26 marbtm20">Apply this voucher code and save £15 off orders over £99
                            </p>
                            <a href="coupon-codes/light-in-the-box.html"> <span class="read-more-link">GET
                                    DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/vans_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>30% Off All Sale Styles</h5>
                            <p class="line-height26 marbtm20">Click on this deal and get 30% Off All Sale Styles</p>
                            <a href="coupon-codes/vans.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/best-buy_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>Free Shipping on Orders Over $35</h5>
                            <p class="line-height26 marbtm20">Click on this deal and get Free Shipping on Orders Over
                                $35</p>
                            <a href="coupon-codes/best-buy.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/olivias_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>20% Off Selected Garden Furniture</h5>
                            <p class="line-height26 marbtm20">Apply this voucher code and save 20% Off Selected Garden
                                Furniture</p>
                            <a href="coupon-codes/olivias.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/cat_250.png') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>Extra 25% Off Intruder Shoes</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save Extra 25% Off Intruder
                                Shoes</p>
                            <a href="coupon-codes/cat.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/jd-sports_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>Free Delivery on Orders Over $150</h5>
                            <p class="line-height26 marbtm20">Click on this deal and get Free delivery on orders over
                                $150</p>
                            <a href="coupon-codes/jd-sports.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/gilt_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>$60 Off on Orders $600+ Store Wide</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save $60 Off on Orders $600+
                                Store-Wide</p>
                            <a href="coupon-codes/gilt.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/stayz_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>Private Beach Cottage AU$94avg/night</h5>
                            <p class="line-height26 marbtm20">Click on this deal and get Private Beach Cottage
                                AU$94avg/night</p>
                            <a href="coupon-codes/stayz.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/kipling_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>15% Off Your Order + Free Shipping</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save15% Off Your Order + Free
                                Shipping</p>
                            <a href="coupon-codes/kipling.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/coldwater-creek_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>20% Off Entire Store</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save 20% Off Entire Store</p>
                            <a href="coupon-codes/coldwater-creek.html"> <span class="read-more-link">GET
                                    DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/timepiece_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>$20 Off $300+ Orders</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save $20 Off $300+ Orders</p>
                            <a href="coupon-codes/timepiece.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/steve-madden_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>25% Off $125+ Orders</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save 25% Off $125+ Orders</p>
                            <a href="coupon-codes/steve-madden-us.html"> <span class="read-more-link">GET
                                    DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/steve-madden_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>20% Off Your Order</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save 20% Off Your Order</p>
                            <a href="coupon-codes/steve-madden-us.html"> <span class="read-more-link">GET
                                    DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/steve-madden_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>$20 Off Orders Over $100</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save $20 Off Orders Over $100
                            </p>
                            <a href="coupon-codes/steve-madden-us.html"> <span class="read-more-link">GET
                                    DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/lorna-jane_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>$30 Off Storewide</h5>
                            <p class="line-height26 marbtm20">Apply this discount code and save $30 Off Storewide</p>
                            <a href="coupon-codes/lorna-jane.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/pottery-barn_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>15% Off Your First Order</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save 15% Off Your First Order
                            </p>
                            <a href="coupon-codes/pottery-barn.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/pottery-barn-kids_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>15% Off On First Order Sitewide</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save 15% Off On First Order
                                Sitewide</p>
                            <a href="coupon-codes/pottery-barn-kids.html"> <span class="read-more-link">GET
                                    DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/west-elm_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>5% Off On All Items</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save 5% Off On All Items</p>
                            <a href="coupon-codes/west-elm.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/dickies-life_250.png') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>10% off orders at Dickies Life</h5>
                            <p class="line-height26 marbtm20">Apply this voucher code and save 10% off orders at
                                Dickies Life</p>
                            <a href="coupon-codes/dickies-life.html"> <span class="read-more-link">GET DEAL</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                        <span class="service4-icons icons"
                            style=" background:url({{ asset('assets/admin/assets/logo/american-eagle_250.jpg') }}) no-repeat 0px 0px; background-size: cover"></span>
                        <div class="service4-desc" style="min-height: 200px;">
                            <h5>Extra 8% Off on Everything</h5>
                            <p class="line-height26 marbtm20">Apply this coupon code and save Extra 8% Off on
                                Everything</p>
                            <a href="coupon-codes/american-eagle.html"> <span class="read-more-link">GET
                                    DEAL</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pad95-100-top-bottom faq_04" style="margin-bottom: 5px;">
        <div class="container">
            <div class="row">
                <!--=========Faq Left Column Start============-->
                <!--=========Faq Left Column end============-->
                <!--=========Faq Right Column Start============-->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="marbtm30">who are we?</h3>
                    <span class="image_hover wdt-100 img marbtm30">
                        <img src="{{ asset('assets/images/about.jpg') }}" class="img-responsive zoom_img_effect"
                            alt="whoare-image">
                    </span>
                    <p class="fnt-17">Our group find the super assessed offers from all stores and brands which you
                        want the most .We give best proposition on your unique days and significant occasions like the
                        shopping extravaganza and a lot following Thanksgiving, Mother's day, Father's day, The Monday
                        following Thanksgiving and others .We have the best web based word wide plans and limits. We in
                        like center on quality things which carry more solace with us and it definitly saves your cash
                        and time.</p>
                    <a data-animation="animated fadeInUp" class="header-requestbtn more-infobtn hvr-bounce-to-right"
                        href="#">more info</a>
                </div>
                <!--=========Faq Right Column end============-->
                <div class="col-md-6 col-sm-12 col-xs-12 faq-mobile-margin">
                    <h3 class="marbtm30">Frequently Asked Questions?</h3>
                    <div class="accordion-first accordion-second clearfix acord_mar_non">
                        <div class="accordion" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading"> <a class="accordion-toggle active" data-toggle="collapse"
                                        data-parent="#accordion2" href="#collapseOne"> <em
                                            class="icon-fixed-width fa fa-plus"></em>What are Coupon Codes?</a> </div>
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>It is a special string/phrase that you can use to buy on online purchases. It
                                            can be only used on spefic brand where it will work </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading"> <a class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> <em
                                            class="icon-fixed-width fa fa-plus"></em>How to Use Coupon Codes?</a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>To use a coupon, click on the offer, and a window will appear where you can
                                            copy the code. When you check out on the store's website, paste the code in
                                            the promo code field. Stores sometimes call this a promo code, but it is
                                            also known as a promotional code, coupon code or, discount code.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading"> <a class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> <em
                                            class="icon-fixed-width fa fa-plus"></em>How to find best
                                        Stores/Brands?</a> </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                            molestias excepturi sint cupiditate</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end accordion -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @extends('layout.app')

@section('title')
    NewCouponsBook
@endsection

@section('content')
    <div class="section wb">
        <div class="container">
            <div class="section-title m30 text-center">
                <h1>4.000+ Stores Publishes 20.000+ <span class="element"></span></h1>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="{{ route('LandingPage.Search.items') }}" method="GET" class="well">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                @csrf
                                <input name="search" value="" type="text" class="form-control"
                                    placeholder="Search for stores..." autocomplete="off" data-provide="typeahead">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="invis1">

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="promobox">
                        <div class="post-media">
                            @forelse ($homeImages as $homeImage)
                                <a href="{{ route('LandingPage.Categorys') }}"><img
                                        src="{{ asset('images/' . $homeImage->home_img) }}"
                                        style="height:300px;width:400px;" class="img-responsive"></a>
                                <div class="promo-desc">
                                    <img src="{{ asset('images/' . $homeImage->home_img) }}"
                                        class="alignleft img-thumbnail">
                                    <h4><a href="#">Shop for LifeStyle</a></h4>
                                    <small>128 Available Coupons</small>
                                </div><!-- end desc -->
                        </div><!-- end media -->

                    </div><!-- end box -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="promobox">
                        <div class="post-media">
                            <a href="{{ route('LandingPage.Categorys') }}"><img
                                    src="{{ asset('images/' . $homeImage->home_img1) }}" style="height:300px;width:400px;"
                                    class="img-responsive"></a>

                            <div class="promo-desc">
                                <img src="{{ asset('images/' . $homeImage->home_img1) }}" class="align-left img-thumbnail">
                                <h4><a href="#">Shop for Kids</a></h4>
                                <small>44 Available Coupons</small>
                            </div><!-- end desc -->
                        </div><!-- end media -->

                    </div><!-- end box -->
                </div><!-- end col -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="promobox">
                        <div class="post-media">
                            <a href="{{ route('LandingPage.Categorys') }}"><img
                                    src="{{ asset('images/' . $homeImage->home_img2) }}" style="height:300px;width:400px;"
                                    class="img-responsive"></a>

                            <div class="promo-desc">
                                <img src="{{ asset('images/' . $homeImage->home_img2) }}" alt=""
                                    class="alignleft img-thumbnail">
                                <h4><a href="#">Shop for Pets</a></h4>
                                <small>55 Available Coupons</small>
                            </div><!-- end desc -->
                        </div><!-- end media -->
                    </div><!-- end box -->
                </div><!-- end col -->
            @empty
                No Images yet
                @endforelse
            </div><!-- end row -->

            <hr class="invis3">

            <div class="row">
                <div class="col-md-12">
                    <h4 class="">Popular Stores</h4>
                </div>
                <!-- end col -->
            </div>
            <div class="text-center store-list row">
                @foreach ($stores as $store)
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="post-media">
                            <a href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}"><img
                                    src="{{ asset('images/' . $store->store_img) }}" style="width:150px;height:150px;"
                                    class="img-responsive"></a>
                            <small>{{ $store->store_name }}</small>
                        </div>
                    </div>
                @endforeach
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Featured Coupons</h2>
                    <hr>
                    <p class="lead">Recent discount coupon codes from hundreds of stores. With our codes take a
                        few seconds you can earn unlimited discounts.</p>
                </div>
            </div><!-- end title -->

            <div class="row">
                @forelse ($coupons as $coupon)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="coupon-list">
                            <div class="coupon-wrapper">
                                <div class="post-media min-vh-50" style="border:1px solid rgb(0,187,211);">
                                    <h2 class="text-center mt-3" style="color:rgb(0,187,211);padding:20px;">
                                        {{ $coupon->coupon_text }}
                                    </h2>
                                </div>
                                <!-- end media -->

                                <div class="coupon-meta">
                                    <div class="coupon-top clearfix">
                                    </div>
                                    <!-- end coupon-top -->
                                    <h3><a href="#">{{ $coupon->coupon_name }}</a></h3>
                                    <p>{{ $coupon->coupon_des }}</p>
                                </div>
                                <!-- end meta -->

                                <div class="showcode">
                                    <a href="#" class="code-link" data-ex-link="{{ $coupon->coupon_link }}">
                                        <span class="coupon-code">{{ $coupon->coupon_code }}</span>
                                        <span class="show-code">Show Code</span>
                                    </a>
                                </div>
                                <!-- end showcode -->

                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : {{ $coupon->coupon_expire }}</small>
                                </div>
                                <!-- end coupon-top -->
                            </div>
                            <!-- end coupon-wrapper -->

                            <!-- Modal -->
                            <div id="{{ $coupon->coupon_slug }}" class="modal fade code-modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4><a href="#">{{ $coupon->coupon_name }}</a>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div style="border: 1px solid rgb(0,187,211)">
                                                        <h2 class="text-center mt-2" style="color:rgb(0,187,211)">
                                                            {{ $coupon->coupon_text }}</h2>
                                                    </div>
                                                    <div class="modal-button">
                                                        <a href="{{ $coupon->coupon_link }}" target="_blank"
                                                            title="" class="btn btn-default btn-block">Visit
                                                            Store <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                                <div class="col-md-8">
                                                    <p>{{ $coupon->coupon_des }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal-body -->
                                        <div class="modal-footer">
                                            <div class="coupon-area">
                                                <div class="showcode row">
                                                    <div class="col-md-4 text-left">
                                                        <div class="coupon-vote">
                                                            <a href="#" data-toggle="tooltip"
                                                                data-placement="bottom" title="Work!"><i
                                                                    class="fa fa-smile-o"></i></a>
                                                            <a href="#" data-toggle="tooltip"
                                                                data-placement="bottom" title="Poor!"><i
                                                                    class="fa fa-frown-o"></i></a>
                                                        </div>
                                                        <!-- end coupon-meta -->
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-md-8 text-center">
                                                        <button data-clipboard-text="{{ $coupon->coupon_code }}"
                                                            class="coupon-code btn btn-primary btn-block" type="submit"
                                                            title="Click to Copy">{{ $coupon->coupon_code }}</button>
                                                        <small>Click to Copy</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4>No Featured coupons</h4>
                @endforelse
            </div>
            <div class="loadmorebutton text-center clearfix">
                <a href="{{ route('LandingPage.All.Coupons') }}" class="btn btn-custom">Browse More Coupons</a>
            </div><!-- end loadmore -->
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>New Deals</h2>
                    <hr>
                    <p class="lead">These are our new deals from hundreds of stores. With our codes take a
                        few seconds you can earn unlimited discounts.</p>
                </div>
            </div><!-- end title -->

            <div class="row grid-coupons">
                @forelse ($trending_coupons as $coupon)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="coupon-list">
                            <div class="coupon-wrapper">
                                <div class="post-media min-vh-50" style="border:1px solid rgb(0,187,211);">
                                    <h2 class="text-center mt-3" style="color:rgb(0,187,211);padding:20px;">
                                        {{ $coupon->coupon_text }}
                                    </h2>
                                </div>
                                <div class="coupon-meta">
                                    <h3><a href="#">{{ $coupon->coupon_name }}</a></h3>
                                    <p>{{ $coupon->coupon_des }}</p>
                                </div><!-- end meta -->

                                <div class="showcode p-3">
                                    <a href="#" class="code-link" data-ex-link="{{ $coupon->coupon_link }}">
                                        <span class="show-code">Show Deal</span>
                                    </a>
                                </div>
                                <div class="coupon-bottom clearfix">
                                    <small class="pull-left">Expire : {{ $coupon->coupon_expire }}</small>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div id="{{ $coupon->coupon_slug }}" class="modal fade code-modal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4><a href="#">{{ $coupon->coupon_name }}</a></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div style="border: 1px solid rgb(0,187,211)">
                                                        <h2 class="text-center" style="color:rgb(0,187,211);padding:20px">
                                                            {{ $coupon->coupon_text }}</h2>
                                                    </div>
                                                    <div class="modal-button">
                                                        <a href="{{ $coupon->coupon_link }}" target="_blank"
                                                            title="" class="btn btn-default btn-block">Visit
                                                            Store <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="coupon-meta">
                                                        <div class="coupon-top clearfix">
                                                        </div>
                                                    </div>
                                                    <p>{{ $coupon->coupon_des }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="coupon-area">
                                                <div class="showcode row">
                                                    <div class="col-md-4 text-left">
                                                        <div class="coupon-vote">
                                                            <a href="#" data-toggle="tooltip"
                                                                data-placement="bottom" title="Work!"><i
                                                                    class="fa fa-smile-o"></i></a>
                                                            <a href="#" data-toggle="tooltip"
                                                                data-placement="bottom" title="Poor!"><i
                                                                    class="fa fa-frown-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                            </div><!-- end coupon-area -->
                                        </div><!-- end modal-footer -->
                                    </div><!-- end mpdal-content -->
                                </div><!-- end modal-dialog -->
                            </div><!-- end modal -->
                        </div><!-- end coupon list -->
                    </div>
                @empty
                    <h4>No more recent coupon</h4>
                @endforelse
            </div>
            <div class="loadmorebutton text-center clearfix">
                <a href="{{ route('LandingPage.Deals') }}" class="btn btn-custom">Browse more Deals</a>
            </div><!-- end loadmore -->

            <hr class="invis1">

            <div class="footer-content">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Popular Categories</h4>
                    </div>
                    <!-- end col -->
                </div>

                <div class="row">
                    @foreach ($categorys as $category)
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <ul class="customlist">
                                <li><a
                                        href="{{ route('LandingPage.Single.Category', ['category_slug' => $category->category_slug]) }}">{{ $category->category_name }}</a>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div><!-- end row -->
            </div><!-- end ttmenu-content -->
        </div>
    </div>
@endsection --}}
