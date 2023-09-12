<footer>
    <div class="ftr-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12  ftr-about-text">
                    <h6>About Us</h6>
                    <p class="marbtm20 line-height26">{{ env('APP_NAME') }} rated offers from all stores and brands which
                        one you
                        more desire.We provides best offers on your specaildays and majour holiydays like Black Friday,
                        Mother's day, Father's day, Cyber Monday and others.</p>
                    <a class="ftr-read-more" href="#">Read More</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 ftr-sol-column">
                    <h6>Categories</h6>
                    <ul class="footer-link">
                        @forelse ($categorys as $category)
                            <li><a
                                    href="{{ route('LandingPage.Single.Category', ['category_slug' => $category->category_slug]) }}">{{ $category->category_name }}</a>
                            </li>
                        @empty
                        <h4>No more categories</h4>
                        @endforelse
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 ftr-link-column">
                    <h6>Stores</h6>
                    <ul class="footer-link">
                        @forelse ($stores as $store)
                            <li>
                                <a
                                    href="{{ route('LandingPage.Single.Store', ['store_slug' => $store->store_slug]) }}">{{ $store->store_name }}</a>
                            </li>
                        @empty
                            <h4>No store added yet</h4>
                        @endforelse
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 ftr-follow-column pull-right">
                    <h6>Follow Us</h6>
                    <div class="header-socials footer-socials">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <span class="ftr-logo" id="footer_img"><img src="{{ asset('assets/images/logo-white.png') }}"
                            class="img-responsive" alt="logo-image"></span>
                </div>
            </div>
            <div class="footer-btm">
                <div class="col-md-6 col-sm-6 col-xs-12 pad-left_zero pad-right_zero">
                    <p>Copyright © {{ env('APP_NAME') }}.com. All Rights Reserved.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 pad-left_zero pad-right_zero pull-right">
                    <p class="text-right">Powered by: <a href="#">{{ env('APP_NAME') }}.com</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Search</h3>
                <div class="search-form">
                    <input type="text" class="search_lightbox_input" placeholder="Search...">
                    <input type="text" class="search_lghtbox_btn">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('assets/js/responsive_bootstrap_carousel.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
</body>

</html>
