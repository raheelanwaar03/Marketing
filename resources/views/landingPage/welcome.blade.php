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
                                    brands in all categories like Clothing, Jewellery, Shoes, Electronics and baby products
                                    ...</p>
                                <a data-animation="animated fadeInUp" href="{{ route('LandingPage.All.Stores') }}"
                                    class="header-requestbtn learn-more hvr-bounce-to-right">Visit Stores</a>
                                <a data-animation="animated fadeInUp" href="{{ route('LandingPage.Categorys') }}"
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
                                <p data-animation="animated fadeInDown">Shopping and coupons deals at one place help you
                                    find everything you want from anywhere</p>
                                <a data-animation="animated fadeInUp" href="{{ route('LandingPage.All.Stores') }}"
                                    class="header-requestbtn learn-more hvr-bounce-to-right btn-center">Stores</a>
                                <a data-animation="animated fadeInUp" href="{{ route('LandingPage.Categorys') }}"
                                    class="header-requestbtn learn-more our-solution hvr-bounce-to-right btn-center">
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
                                <a data-animation="animated fadeInUp" href="{{ route('LandingPage.All.Stores') }}"
                                    class="header-requestbtn learn-more hvr-bounce-to-right btn-center">Stores</a>
                                <a data-animation="animated fadeInUp" href="{{ route('LandingPage.Categorys') }}"
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
    <!--=========home banner end============-->
    <!--=========Certificate Start============-->
    <section class="certifield-section yellow-background">
        <div class="container">
            <h3 style="text-align: center; margin-bottom:20px">Top Best Stores used online on {{ env('APP_NAME') }}</h3>
            @forelse ($stores as $store)
                <div style="margin: 15px; display:inline-block"><a
                        href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}"><img
                            src="{{ asset('images/' . $store->store_img) }}" width="80" height="80"> </a>
                </div>
            @empty
                <h4>No store added yet!</h4>
            @endforelse
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
                            save you in your purchases you made web-based on any store. Thousand of stores are accessible in
                            every Classes including design, jewellery , Garments and electronic</p>
                    </div>
                </div>

                <div class="col-md-12">
                    @forelse ($coupons as $coupon)
                        <div class="col-md-6 col-sm-6 col-xs-12 service-column service4-column">
                            <span class="service4-icons icons" style="height:200px;font-size:35px;margin-top:-1px;">
                                <strong>
                                    {{ $coupon->coupon_text }}
                                </strong>
                            </span>
                            <div class="service4-desc" style="min-height: 200px;">
                                <h5>{{ $coupon->coupon_name }}</h5>
                                <p class="line-height26 marbtm20">{{ $coupon->coupon_des }}</p>
                                @if ($coupon->coupon_type === 'Coupon')
                                    <a href="#{{ $coupon->coupon_slug }}" class="myBtn"> <span class="read-more-link">GET
                                            Coupon</span></a>
                                @elseif ($coupon->coupon_type === 'Deal')
                                    <a href="#{{ $coupon->coupon_slug }}" class="myBtn"> <span class="read-more-link">GET
                                            Deal</span></a>
                                @endif
                            </div>
                        </div>
                        {{-- Model --}}

                        <div class="modal fade" id="{{ $coupon->coupon_slug }}" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                        <h4 class="modal-title" id="getcodemodelLabel">{{ $coupon->coupon_name }}</h4>
                                    </div>
                                    <div class="modal-body" id="popup" style="width: 100%; margin:6px 0">
                                        <div id="popupoffer">{{ $coupon->coupon_name }}</div>
                                        <p>Open store to avail this offer <a target='_blank'
                                                href='{{ $coupon->coupon_link }}' id="newtab"
                                                style="font-size: 25px;text-transform: uppercase;">"{{ $coupon->coupon_store }}"</a>
                                        </p>
                                        @if ($coupon->coupon_type === 'Coupon')
                                            <input type='text' id='dataToCopy' value="{{ $coupon->coupon_code }}"
                                                readonly style="color:brown" />
                                            <button class="btn btn-success btn-sm" id="copyButton">COPY</button>
                                        @elseif ($coupon->coupon_type === 'Deal')
                                            <input type='text' id='dataToCopy' value="{{ $coupon->coupon_link }}"
                                                readonly style="color:brown" />
                                            <a href="{{ $coupon->coupon_link }}" class="btn btn-success">GoTo Store</a>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                    <script>
                                        document.getElementById("copyButton").addEventListener("click", function() {
                                            var inputElement = document.getElementById("dataToCopy");
                                            inputElement.select();
                                            document.execCommand("copy");
                                            window.getSelection().removeAllRanges();
                                            alert("Copied: " + inputElement.value);
                                        });
                                    </script>
                                    {{-- second script --}}
                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                            $(".myBtn").click(function() {
                                                $('#{{ $coupon->coupon_slug }}').modal({
                                                    show: true
                                                });
                                            });
                                        });
                                        popid = 0;
                                        poplink = "";
                                        popstore = "";

                                        function redirect2() {
                                            window.open(poplink);
                                        }

                                        function redirect(e) {
                                            var copyText = document.getElementById("ccode");
                                            copyText.select();
                                            document.execCommand("copy");
                                            $("#popup button").html("Go to Site");
                                            $("#popup input").css("background", "grey");
                                            $("#popup p").html("Code Copied. Paste the code at <a target='_blank' id='newtab' href='" + poplink + "'>" +
                                                popstore + "</a>");
                                            $("#popup button").attr("onclick", "redirect2()");
                                        }

                                        function fun(store, c, link, text, id, logo) {
                                            popid = id;
                                            poplink = link;
                                            popstore = store;
                                            $("#popup button").show();
                                            $("#popup button + span").hide();
                                            $("#popupoffer").html(text);
                                            $("#getcodemodelLabel").html(store);
                                            $("#popup > p").css({
                                                "padding": "12px 0",
                                                "font-size": "18px"
                                            });
                                            $("#popup img").attr("src", "{{ asset('adminimages/logo.png') }}" + logo);

                                            if (c.trim() == "") // GET Deal
                                            {
                                                $("#popup button").html("Continue to Store");
                                                $("#popup button").attr("onclick", "redirect2()");
                                                $("#popup button + span").html("<a style='color:white;' href='couponstoredetail.php?id=" + 3 +
                                                    "'>Continue to Store</a>");
                                                $("#ccode").hide();
                                                $("#popup > button").css({
                                                    "background": "rgb(72,16,100)",
                                                    "padding": "10px 50px",
                                                    "font-size": "20px"
                                                });
                                                $("#popup p").html("Tip: No Code Needed!");
                                                window.open(link);
                                            } else // GET CODE
                                            {
                                                var x = "txt_" + id;
                                                var copyText = document.getElementById(x);
                                                copyText.select();
                                                document.execCommand("copy");
                                                window.open("{{ $coupon->coupon_link }}" + id, "_blank");
                                                $("#popup button").attr("onclick", "redirect()");
                                                $("#popup input").css("background", "white");
                                                $("#popup button").html("COPY");
                                                $("#ccode").show();
                                                $("#ccode").attr('value', c);
                                                // $("#popup p").html("Copy the code below <a target='_blank' id='newtab' href='"+link+"'>"+store+"</a>");
                                                $("#popup p").html("Copy the code below");
                                                $("#popup > button").css({
                                                    "background": "rgb(72,16,100)",
                                                    "font-size": "14px"
                                                });
                                            }
                                        }

                                        function showall(detail, d) {
                                            $("#d_" + d).html(detail);
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3>NO coupon added yet</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <section class="pad95-100-top-bottom faq_04" style="margin-bottom: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="marbtm30">who are we?</h3>
                    <span class="image_hover wdt-100 img marbtm30">
                        <img src="{{ asset('assets/images/newPic.jpeg') }}" class="img-responsive zoom_img_effect"
                            alt="whoare-image">
                    </span>
                    <p class="fnt-17">Our group find the super assessed offers from all stores and brands which you want
                        the most .We give best proposition on your unique days and significant occasions like the shopping
                        extravaganza and a lot following Thanksgiving, Mother's day, Father's day, The Monday following
                        Thanksgiving and others .We have the best web based word wide plans and limits. We in like center on
                        quality things which carry more solace with us and it definitly saves your cash and time.</p>
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
                                        <p>It is a special string/phrase that you can use to buy on online purchases. It can
                                            be only used on spefic brand where it will work </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading"> <a class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> <em
                                            class="icon-fixed-width fa fa-plus"></em>How to Use Coupon Codes?</a> </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>To use a coupon, click on the offer, and a window will appear where you can copy
                                            the code. When you check out on the store's website, paste the code in the promo
                                            code field. Stores sometimes call this a promo code, but it is also known as a
                                            promotional code, coupon code or, discount code.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group">
                                <div class="accordion-heading"> <a class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> <em
                                            class="icon-fixed-width fa fa-plus"></em>How to find best Stores/Brands?</a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi sint cupiditate</p>
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
