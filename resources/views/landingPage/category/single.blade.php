@extends('user.layout.app')

@section('title')
    {{ $category->category_name }}
@endsection

@section('content')
    <section id="blog" class="container" style="margin-top: 20px;">
        <div id="leftpan">
            <a href=""><img src="{{ asset('images/' . $category->image) }}" width="100%"
                    alt="{{ $category->category_name }} logo" /></a>
            <fieldset id="about">
                <legend>{{ $category->category_name }}</legend>
                <legend style="margin-top: 10px;">About {{ env('APP_NAME') }}</legend>
                If you make a purchase using our coupon code on a {{ $category->category_name }}'s website may earn an
                commission from {{ $category->category_name }}. We do not guarantee the authenticity of any coupon or promo
                code. You should
                varify all promotions at the {{ $category->category_name }} website before making a purchase. </p>
            </fieldset>
        </div>
        <div id="middlepan">
            <h1 id="title_sm">{{ $category->category_name }}</h1>
        </div>
        <div id="rightpan">
            @forelse ($coupons as $coupon)
                <div class="offer">
                    <div class="store-logo">
                        <span class='price'>{{ $coupon->coupon_text }}</span>
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
                                <a href="#{{ $coupon->coupon_slug }}" class="prettyPhoto btn-code myBtn">
                                    <div>Get Coupon</div>
                                </a>
                            </div>
                        @elseif($coupon->coupon_type === 'Deal')
                            <a href="#{{ $coupon->coupon_slug }}" class="prettyPhoto btn-code myBtn">
                                <div>Get Deal</div>
                            </a>
                        @endif
                    </div>
                    <div class="clear"></div>
                </div>

                {{-- model --}}

                <div class="modal fade" id="{{ $coupon->coupon_slug }}" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title" id="getcodemodelLabel">{{ $coupon->coupon_name }}</h4>
                            </div>
                            @if ($coupon->coupon_type === 'Coupon')
                                <div class="modal-body" id="popup" style="width: 100%; margin:6px 0">
                                    <div id="popupoffer">{{ $coupon->coupon_name }}</div>
                                    <p>Copy and paste this code at <a target='_blank' href='{{ $coupon->coupon_link }}'
                                            id="newtab"
                                            style="font-size: 25px;text-transform: uppercase;">"{{ $coupon->coupon_store }}"</a>
                                    </p>
                                    <input type='text' id='dataToCopy' value="{{ $coupon->coupon_code }}" readonly
                                        style="color:brown" />
                                    <button class="btn btn-success btn-sm" id="copyButton">COPY</button>

                                    <input type='text' id='dataToCopy' value="{{ $coupon->coupon_link }}" readonly
                                        style="color:brown" />
                                    <a href="{{ $coupon->coupon_link }}" class="btn btn-success">GoTo Store</a>
                                </div>
                            @elseif ($coupon->coupon_type === 'Deal')
                                <div class="modal-body" id="popup" style="width: 100%; margin:6px 0">
                                    <div id="popupoffer">{{ $coupon->coupon_name }}</div>
                                    <p>Copy and paste this code at <a target='_blank' href='{{ $coupon->coupon_link }}'
                                            id="newtab"
                                            style="font-size: 25px;text-transform: uppercase;">"{{ $coupon->coupon_store }}"</a>
                                    </p>
                                    <input type='text' id='dataToCopy' value="{{ $coupon->coupon_code }}" readonly
                                        style="color:brown" />
                                    <button class="btn btn-success btn-sm" id="copyButton">COPY</button>

                                    <input type='text' id='dataToCopy' value="{{ $coupon->coupon_link }}" readonly
                                        style="color:brown" />
                                    <a href="{{ $coupon->coupon_link }}" class="btn btn-success">GoTo Store</a>
                                </div>
                            @endif
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                <h4>No Coupon added in this category yet</h4>
            @endforelse
        </div>
        <div class="clear"></div>
    </section>

    <section class="container">
        <fieldset id="about-store">
            <legend>About {{ $category->category_name }}</legend>
            <legend style="margin-top: 10px;">About {{ env('app') }}</legend>
            If you make a purchase using our coupon code on a {{ $category->category_name }}'s website. kartcoupon.com may
            earn an commission
            from {{ $category->category_name }}. We do not guarantee the authenticity of any coupon or promo code. You
            should fy all promotions
            at the {{ $category->category_name }} website before making a purchase. </p>
        </fieldset>
    </section>
@endsection

{{-- @extends('layout.app')




@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="content col-md-12">
                <div class="post-wrapper single-store">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="post-media text-center">
                                @if ($category->image != '')
                                    <a href="#"><img src="{{ asset('images/' . $category->image) }}"
                                            alt="" class="img-responsive"></a>
                                @else
                                    <div style="border:1px solid rgb(0,187,211);padding:40px;">
                                        <h3 style="color:rgb(0,187,211);">{{ $category->category_name }}</h3>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="coupon-meta">
                                <h3>All Coupons of {{ $category->category_name }}</h3>
                                <p>{{ $category->category_des }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="invis3">
                @forelse ($coupons as $coupon)
                    <div class="coupon-list list-wrapper">
                        <div class="coupon-wrapper">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post-media text-center">
                                        <div class="post-media text-center"
                                            style="border:1px solid rgb(0,187,211);margin-bottom:14px;">
                                            <h2 class="text-center mt-3" style="color:rgb(0,187,211);padding:50px;">
                                                {{ $coupon->coupon_text }}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="coupon-meta">
                                        <h3><a href="#">{{ $coupon->coupon_name }}</a></h3>
                                        <p>{{ $coupon->coupon_des }}.</p>
                                    </div><!-- end meta -->

                                    <div class="showcode">
                                        <a href="#" class="code-link" data-ex-link="{{ $coupon->coupon_link }}">
                                            <span class="coupon-code">{{ $coupon->coupon_code }}</span>
                                            <span class="show-code">Show Code</span>
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
                    <h3>NO Category item</h3>
                @endforelse
            </div>
        </div>
        <div class="footer-content">
            <div class="row">
                <div class="col-md-12">
                    <h4>Popular Categories</h4>
                </div>
            </div>
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
            </div>
        </div>
    </div>
</div>
@endsection --}}
