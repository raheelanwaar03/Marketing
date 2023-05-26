<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h4>Email Newsletter</h4>
                    </div>

                    <div class="newsletter">
                        <p>Your email is safe with us and we hate spam as much as you do.</p>
                        <form class="">
                            <input type="text" class="form-control" placeholder="Enter your name..">
                            <input type="email" class="form-control" placeholder="Enter your email..">
                            <button type="submit" class="btn btn-primary">SUBSCRIBE</button>
                        </form>
                    </div>
                </div><!-- end widget -->
            </div><!-- end col -->
            <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h4>Company Info</h4>
                    </div>

                    <ul class="footer-links">
                        <li><a href="{{ route('LandingPage') }}">Home</a></li>
                        <li><a href="{{ route('LandingPage.ContactUs') }}">Contact us</a></li>
                        <li><a href="{{ route('LandingPage.All.Coupons') }}">All Coupons</a></li>
                        <li><a href="{{ route('LandingPage.All.Stores') }}">All Stores</a></li>
                        <li><a href="{{ route('LandingPage.Categorys') }}">All Categories</a></li>
                    </ul><!-- end links -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-md-2 col-sm-12 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h4>All Stores</h4>
                    </div>

                    <ul class="footer-links">

                        @forelse ($stores as $store)
                            <li><a
                                    href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}">{{ $store->store_name }}</a>
                            </li>
                        @empty
                            <h3>No Store Added yet!</h3>
                        @endforelse
                    </ul><!-- end links -->
                </div><!-- end widget -->
            </div><!-- end col -->


            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h4>Frequently Asked Questions</h4>
                    </div>

                    <div class="first_accordion withicon withcolorful panel-group" id="accordion5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion5" href="#collapse115">
                                        <i class="fa fa-angle-down"></i> What is voucher?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse115" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>
                                        It's a code which is in numbers and letters to offer some incetive that reduces
                                        the price of an order this SHIELD APPARELS Voucher Code is also known as
                                        promo,discount,voucher and coupon code.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion5" href="#collapse215">
                                        <i class="fa fa-angle-down"></i> Does offer Discount Codes?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse215" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Yes, there are currently some discount codes and deals in the above promotions
                                        list, if you are looking for the best Voucher Code, then simply click on the
                                        "GET CODES" or "GET DEALS" button for the amazing savings at
                                        {{ env('APP_NAME') }}.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion5" href="#collapse315">
                                        <i class="fa fa-angle-down"></i> How do I use a Voucher?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse315" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        If You like to save money on your Voucher, then follow these simple steps,
                                        First; Choose from the above available discount code that you can find on the
                                        {{ env('APP_NAME') }} Voucher page. Once you have selected the desired product
                                        in the cart, simply copy and paste the code at the checkout page or click on the
                                        active deal button. If they show the reduced amount of savings, then simply
                                        continue the checkout as normal and wait for your order to be processed.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end panel -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="copylinks">
                    <ul class="list-inline">
                        <li><a href="{{ route('LandingPage') }}">Home</a></li>
                        <li><a href="{{ route('LandingPage.ContactUs') }}">Contact</a></li>
                        <li><a href="{{ route('LandingPage.Categorys') }}">All Categories</a></li>
                        <li><a href="{{ route('LandingPage.All.Stores') }}">All Stores</a></li>
                        <li><a href="{{ route('LandingPage.All.Coupons') }}">All Coupons</a></li>
                    </ul><!-- end ul -->
                    <p>Disclaimer : The display of third-party trademarks and trade names on the site does not
                        necessarily indicate any affiliation or service on their website, we may be paid a fee by the
                        merchant.</a></p>
                </div><!-- end links -->
            </div><!-- end col -->

            <div class="col-md-6 col-sm-6">
                <div class="footer-social text-right">
                    <ul class="list-inline social-small">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end copyrights -->
</div><!-- end wrapper -->
<script src="{{ asset('assets/js/all.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

<!-- Mirrored from psdconverthtml.com/live/{{ env('APP_NAME') }}/coupon-v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 11:01:59 GMT -->

</html>
