<footer>
    <div class="ftr-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12  ftr-about-text">
                    <h6>About Us</h6>
                    <p class="marbtm20 line-height26">Figarodeals rated offers from all stores and brands which one you
                        more desire.We provides best offers on your specaildays and majour holiydays like Black Friday,
                        Mother's day, Father's day, Cyber Monday and others.</p>
                    <a class="ftr-read-more" href="https://www.figarodeals.com/about.php">Read More</a>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 ftr-sol-column">
                    <h6>Special Offers</h6>
                    <ul class="footer-link">
                        <li><a href="https://www.figarodeals.com/christmas.php">Christmax Coupons</a></li>
                        <li><a href="https://www.figarodeals.com/cyber-monday.php">Cyber Monday Coupons</a></li>
                        <li><a href="https://www.figarodeals.com/black-friday.php">Black Friday Coupons</a></li>
                        <li><a href="https://www.figarodeals.com/halloween.php">Halloween Coupons</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12 ftr-link-column">
                    <h6>Quick Links</h6>
                    <ul class="footer-link">
                        <li><a href="https://www.figarodeals.com/about.php">- About Us</a></li>
                        <li><a href="https://www.figarodeals.com/term_of_use.php">- Term of Use</a></li>
                        <li><a href="https://www.figarodeals.com/privacy_policy.php">- Privacy Policy</a></li>
                        <!-- <li><a href="https://www.figarodeals.com/faq.php">- FAQs</a></li> -->
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 ftr-follow-column pull-right">
                    <h6>Follow Us</h6>
                    <div class="header-socials footer-socials">
                        <a href="https://www.facebook.com/people/Figaro-Deals/100088404408846/"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/figarodeals"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/figarodeals/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/in/fagaro-deals-18757525a"><i class="fa fa-linkedin"
                                aria-hidden="true"></i></a>
                    </div>
                    <span class="ftr-logo" id="footer_img"><img src="https://www.figarodeals.com//images/logo-white.png"
                            class="img-responsive" alt="logo-image"></span>
                </div>
            </div>
            <div class="footer-btm">
                <div class="col-md-6 col-sm-6 col-xs-12 pad-left_zero pad-right_zero">
                    <p>Copyright © 23 Figarodeals.com. All Rights Reserved.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 pad-left_zero pad-right_zero pull-right">
                    <p class="text-right">Powered by: <a href="#">FigaroDeals.com</a></p>
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
</body>

</html>
