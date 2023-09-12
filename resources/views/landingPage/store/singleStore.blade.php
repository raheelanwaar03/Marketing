@extends('user.layout.app')

@section('title')
    {{ $store->store_name }}
@endsection

@section('content')
    <section style="width: 100%;">
        <div id="mainContainer" style="margin-top: 20px; margin:0 auto;">
            <div id="leftpan">
                <div id="slogo">
                    <a href=""><img src="{{ asset('images/' . $store->store_img) }}" width="100%"
                            alt="{{ $store->store_name }} logo" /></a>
                </div>
                <p id="count-coupon"></p>
                <fieldset id="about" style="padding: 10px;">
                    <legend>About {{ $store->store_name }}</legend>
                    <h5 style='text-align:center'>Go to </h5>
                    <h6
                        style='text-align:center; border:1px solid black; border-radius:6px; padding:8px 0; margin-top:10px'>
                        <a style='text-transform:lowercase; margin: 8px 0;'
                            href='{{ $store->store_link }}'>{{ $store->store_link }}</a>
                    </h6>
                    <p>{{ $store->store_name }}&rsquo;s motto of &ldquo;Smart Home Simplified&rdquo; is what drives us to
                        build easy-to-use
                        smart home devices and appliances that are designed to enhance your life.</p>

                    <p>From laser-guided robotic vacuum cleaners to wireless security systems, every
                        {{ $store->store_name }} product is
                        developed using cutting-edge technologies and is designed for your convenience.</p>

                    <p>&nbsp;</p>

                    <p>{{ $store->store_name }} is developing a new generation of connected devices and appliances that work
                        seamlessly together
                        to simplify the complete smart home experience.</p>

                    <p>{{ $store->store_name }} is part of Anker Innovations, one of the leading and most trusted consumer
                        electronics brands in
                        America.</p>
                </fieldset>
            </div>
            <div id="middlepan">
                <div id="mobile_logo" style="margin-bottom: 10px; border:1px dotted gray;">
                    <div style="float:left; width:25%; padding:1%">
                    <a href="{{ $store->store_link }}"><img
                                src="{{ asset('images/' . $store->store_img) }}" width="100%"
                                style="border:1px solid black" alt="{{ $store->store_name }} logo" /></a>
                    </div>
                    <div style="float:left; width:72%; padding:1%">
                        <h1 id="title_sm">{{ $store->store_name }} Discount Codes</h1>
                        <h5 style='text-align:center; border:1px solid black; border-radius:2px; padding:4px 0'><a
                                href='{{ $store->store_link }}' target="_blank">VISIT
                                STORE</a></h5>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
            <div id="rightpan">
                <h1 id="title_md">{{ $store->store_name }} Discount Codes</h1>

                @forelse ($coupons as $coupon)
                    <div class="offer">
                        <div class="store-logo">
                            <span class='price' style="overflow:inherit">{{ $coupon->coupon_text }}</span>
                        </div>
                        <div class="store-right">
                            <div class="store-text">
                                <h3 class="coptext"><a title="" href="#{{ $coupon->coupon_slug }}"
                                        class="prettyPhoto btn-code"
                                        onclick="fun('Allstar Signings','',">{{ $coupon->coupon_name }}</a>
                                </h3>
                                <p class='coupondetail'>
                                    {{ $coupon->coupon_des }}
                                </p>
                            </div>
                            @if ($coupon->coupon_type === 'Coupon')
                                <div class="store-btn">
                                    <a href="#{{ $coupon->coupon_slug }}" onclick="window.open('{{ $coupon->coupon_link }}')" class="btn btn-success {{ $coupon->id }}">
                                        <div>Get Coupon</div>
                                    </a>
                                </div>
                            @elseif($coupon->coupon_type === 'Deal')
                                <div class="store-btn">
                                    <a href="#{{ $coupon->coupon_slug }}" onclick="window.open('{{ $coupon->coupon_link }}')" class="prettyPhoto btn-code {{ $coupon->id }}">
                                        <div>Get Deal</div>
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="modal fade" id="{{ $coupon->coupon_slug }}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                    <h4 class="modal-title" id="getcodemodelLabel">{{ $coupon->coupon_name }}</h4>
                                </div>
                                @if ($coupon->coupon_type === 'Coupon')
                                    <div class="modal-body" id="popup" style="width: 100%; margin:6px 0">
                                        <div id="popupoffer" style="border: 1px solid powderblue">{{ $coupon->coupon_text }}</div>
                                        <p>Open store to avail this offer <a target='_blank'
                                                href='{{ $coupon->coupon_link }}' id="newtab"
                                                style="font-size: 25px;text-transform: uppercase;">"{{ $coupon->coupon_store }}"</a>
                                        </p>
                                        <input type='text' id='dataToCopy' value="{{ $coupon->coupon_code }}"
                                            readonly style="color:brown" />
                                        <button class="btn btn-success btn-sm" id="copyButton">COPY</button>
                                    </div>
                                @elseif ($coupon->coupon_type === 'Deal')
                                    <div class="modal-body" id="popup" style="width: 100%; margin:6px 0">
                                        <div id="popupoffer">{{ $coupon->coupon_text }}</div>
                                        <p>
                                            Tip: No code needed!
                                        </p>
                                        <a href="{{ $coupon->coupon_link }}" target="_blank"
                                            class="btn btn-lg btn-success">GoTo Store</a>
                                    </div>
                                @endif
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
                                        $(".{{ $coupon->id }}").click(function() {
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
                    <h4>No Coupon added in this category yet</h4>
                @endforelse
                <div class="">
                    {{ $coupons->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="container">
        <fieldset id="about-store">
            <legend>About {{ $store->store_name }}</legend>
            <p>{{ $store->store_name }}&rsquo;s motto of &ldquo;Smart Home Simplified&rdquo; is what drives us to build
                easy-to-use smart home
                devices and appliances that are designed to enhance your life.</p>

            <p>From laser-guided robotic vacuum cleaners to wireless security systems, every {{ $store->store_name }}
                product is developed using
                cutting-edge technologies and is designed for your convenience.</p>

            <p>&nbsp;</p>

            <p>{{ $store->store_name }} is developing a new generation of connected devices and appliances that work
                seamlessly together to
                simplify the complete smart home experience.</p>

            <p>{{ $store->store_name }} is part of Anker Innovations, one of the leading and most trusted consumer
                electronics brands in
                America.</p>
        </fieldset>
    </section>
@endsection





{{-- @extends('layout.app')

@section('title')
    {{ $store->store_name }}
@endsection

@section('link')
<link rel="canonical" href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}" />
@endsection

@section('breadcrum')
<section class="section page-title-wrapper wb">
    <div class="container">
        <div class="page-title pull-left">
            <p>Here is all store data</p>
            <h3>Stores</h3>
        </div><!-- end title -->
        <div class="pull-right hidden-xs">
            <div class="bread">
                <ol class="breadcrumb">
                    <li><a href="{{ route('LandingPage') }}">Home</a></li>
                    <li class="active"><b>Store</b> / {{ $store->store_name }}</li>
                </ol>
            </div><!-- end bread -->
        </div><!-- /.pull-right -->
    </div>
</section><!-- end section -->

@endsection


@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="content col-md-12">
                    <div class="post-wrapper single-store">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="post-media text-center">
                                    <a href="#"><img src="{{ asset('images/' . $store->store_img) }}" alt="img"
                                            height="72px" width="72px" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="coupon-meta">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <h3>{{ $store->store_name }}</h3>
                                        <h4>Country: {{ $store->store_country }}</h4>
                                    </div>
                                    <p>{{ $store->store_des }}</p>
                                </div>
                                <div class="">
                                    <a href="{{ $store->store_link }}" target="_blank" class="btn btn-primary">Go To
                                        Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="invis3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="">
                                    <h1 class="text-center">All Coupons</h1>
                                </div>
                                <div class="text-center mb-3">
                                    <a href="#deals" class="btn btn-primary">See Deals in this Store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @forelse ($coupons as $coupon)
                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center"
                                            style="border:1px solid rgb(0,187,211);margin-bottom:14px;">
                                            <h2 class="text-center mt-3" style="color:rgb(0,187,211);padding:40px;">
                                                {{ $coupon->coupon_text }}
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="d-flex jusitfy-content-center align-items-center">
                                            <div class="coupon-meta">
                                                <h3><a href="#">{{ $coupon->coupon_name }}</a></h3>
                                                <p>{{ $coupon->coupon_des }}.</p>
                                            </div>

                                            <div class="showcode">
                                                <a href="#" style="float: right;" class="code-link"
                                                    data-ex-link="{{ $coupon->coupon_link }}">
                                                    <span class="coupon-code">{{ $coupon->coupon_code }}</span>
                                                    <span class="show-code">Show Code</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : {{ $coupon->coupon_expire }}</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

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
                                                        <a href="#"><img
                                                                src="{{ asset('images/' . $coupon->coupon_img) }}"
                                                                alt="" class="img-responsive"></a>
                                                        <div class="modal-button">
                                                            <a href="{{ $coupon->coupon_link }}" target="_blank"
                                                                title="" class="btn btn-default btn-block">Visit Store
                                                                <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>{{ $coupon->coupon_des }}</p>

                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class=" row">
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
                        <div class="col-md-12">
                            {{ $coupons->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    @empty
                        <h4>No Coupon In this Store</h4>
                    @endforelse
                    <h1 class="text-center" id="deals">All Deals</h1>
                    @forelse ($trending_coupons as $coupon)
                        <div class="coupon-list list-wrapper">
                            <div class="coupon-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="post-media text-center"
                                            style="border:1px solid rgb(0,187,211);margin-bottom:14px;">
                                            <h2 class="text-center mt-3" style="color:rgb(0,187,211);padding:40px;">
                                                {{ $coupon->coupon_text }}
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="coupon-meta">
                                            <h3><a href="#">{{ $coupon->coupon_name }}</a></h3>
                                            <p>{{ $coupon->coupon_des }}.</p>
                                        </div><!-- end meta -->

                                        <div class="showcode">
                                            <a href="#" class="code-link"
                                                data-ex-link="{{ $coupon->coupon_link }}">
                                                <span class="coupon-code">{{ $coupon->coupon_code }}</span>
                                                <span class="show-code">Show Deal</span>
                                            </a>
                                        </div><!-- end showcode -->

                                        <div class="coupon-bottom clearfix">
                                            <small class="pull-left">Expire : {{ $coupon->coupon_expire }}</small>
                                        </div><!-- end coupon-top -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

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
                                                            <h2 class="text-center"
                                                                style="color:rgb(0,187,211);padding:20px">
                                                                {{ $coupon->coupon_text }}</h2>
                                                        </div>
                                                        <div class="modal-button">
                                                            <a href="{{ $coupon->coupon_link }}" target="_blank"
                                                                title="" class="btn btn-default btn-block">Visit
                                                                Store
                                                                <i class="fa fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>{{ $coupon->coupon_des }}</p>

                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div><!-- end modal-body -->

                                            <div class="modal-footer">
                                                <div class="coupon-area">
                                                    <div class=" row">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            {{ $trending_coupons->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    @empty
                        <h4>no store item</h4>
                    @endforelse
                </div>
            </div>
            <div class="footer-content">
                <div class="row">
                    <div class="col-md-12">
                        <h4>We have coupon on all type of Categories</h4>
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
                </div>
                <!-- end row -->

                <hr class="">

                <div class="row">
                    <div class="col-md-12">
                        <h4>Popular Stores</h4>
                    </div>
                    <!-- end col -->
                </div>
                <div class="text-center store-list row">
                    @forelse ($stores as $store)
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <div class="post-media">
                                <a href="#"><img src="{{ asset('images/' . $store->store_img) }}" alt=""
                                    style="width:150px;height:150px;" class="img-thumbnail img-responsive"></a>
                                <small>{{ $store->store_name }}</small>
                            </div>
                        </div>
                    @empty
                        <h3>NO Store Avaliable</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection --}}
