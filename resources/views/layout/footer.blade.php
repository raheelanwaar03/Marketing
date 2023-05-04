<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h4>Email Newsletter</h4>
                    </div>

                    <div class="newsletter">
                        <p>Your email is safe with us and we hate spam as much as you do. Lorem ipsum dolor sit
                            amet et dolore.</p>
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

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h4>Frequently Asked Questions</h4>
                    </div>

                    <div class="first_accordion withicon withcolorful panel-group" id="accordion5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion5"
                                        href="#collapse115">
                                        <i class="fa fa-angle-down"></i> How to Use Coupon Codes?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse115" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore.
                                        consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion5"
                                        href="#collapse215">
                                        <i class="fa fa-angle-down"></i> Can I submit My Coupons?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse215" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore.
                                        consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion5"
                                        href="#collapse315">
                                        <i class="fa fa-angle-down"></i> Coupon Submission free?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse315" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiolore.
                                        consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolor.
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms of Usage</a></li>
                        <li><a href="#">Trademark</a></li>
                        <li><a href="#">License</a></li>
                    </ul><!-- end ul -->
                    <p>YourCoupon &copy; 2016 - Designed by {{ env('APP_NAME') }}</a></p>
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

<!-- Mirrored from psdconverthtml.com/live/yourcoupon/coupon-v2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2023 11:01:59 GMT -->

</html>
