<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s"
    style="margin-top:5rem; padding-top:3rem;">
    <div class="container" style="padding-top: 3rem; paddin-bottom:3rem;">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6" data-aos="fade-down">
                <h4 class="footer-title ff-secondary text-start footer-primary " style="margin-bottom: 1.5rem;">Home
                    Needs</h4>
                <a class="btn btn-link" href="/Electronic/services">Electronic</a>
                <a class="btn btn-link" href="/Electrician/services">Electrician</a>
                <a class="btn btn-link" href="/Carpenter/services">Carpenter</a>
                <a class="btn btn-link" href="/Plumber/services">Plumber</a>
                <a class="btn btn-link" href="/Painter/services">Painter</a>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-down">
                <h4 class="footer-title ff-secondary text-start footer-primary " style="margin-bottom: 1.5rem;">
                    Appliance</h4>
                <a class="btn btn-link" href="">TV Services</a>
                <a class="btn btn-link" href="">Refrigerator</a>
                <a class="btn btn-link" href="">Washing Machine</a>
                <a class="btn btn-link" href="">Water Purifier</a>
                <a class="btn btn-link" href="">Microwave Oven</a>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-down">
                <h4 class="footer-title ff-secondary text-start footer-primary " style="margin-bottom: 1.5rem;">
                    Ac-Services</h4>
                <a class="btn btn-link" href="/home-appliances/services">Installation</a>
                <a class="btn btn-link" href="/home-appliances/services">Uninstallation</a>
                <a class="btn btn-link" href="/home-appliances/services">Gas Refill</a>
                <a class="btn btn-link" href="/home-appliances/services">Wet Servicing</a>
                <a class="btn btn-link" href="/home-appliances/services">Dry Service</a>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-down">
                <h4 class="footer-title ff-secondary text-start footer-primary fw-normal">Contact</h4>
                <p class="mb-2" style="color:#fff;"><i class="fa fa-map-marker-alt "
                        style="margin-right:1rem;"></i>Lucknow , Uttar Pradesh, India</p>
                <p class="mb-2" style="color:#fff;"><i class="fa fa-phone-alt "
                        style="margin-right:1rem;"></i>+91-7071967998</p>
                <p class="mb-2" style="color:#fff;"><i class="fa fa-envelope "
                        style="margin-right:1rem;"></i>vshomeservices22@gmail.com</p>
                <div style="padding-top: 0.5rem; display:flex; margin-bottom:1rem;">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="/">Home</a>
                        <a href="{{ route('home.contact') }}">Contact Us</a>

                    </div>
                </div>
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0" style="color: #fff">
                    &copy; 2022 <a class="border-bottom" href="#">VS HOME SERVICES</a>, All Right Reserved.
                    Designed and Developed By <a class="border-bottom" href="#">IBM Avengers</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- loader -->

</div>
<script type="text/javascript" src="{{ url('assets/js/nav/jquery.sticky.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/totop/jquery.ui.totop.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/fancybox/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/carousel/carousel.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/filters/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/twitter/jquery.tweet.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/flickr/jflickrfeed.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/dtb/jquery.table2excel.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/bootstrap3-typeahead.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/main.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/purecounter.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution({
            dottedOverlay: "none",
            delay: 5000,
            startwidth: 1170,
            startheight: 480,
            minHeight: 250,
            navigationType: "none",
            navigationArrows: "solo",
            navigationStyle: "preview1"
        });
    });
</script>
<script>
    $(document).ready(function() {

        // YOUR CODE (NOT RELATED TO DIALOGFLOW MESSENGER)

        window.addEventListener('dfMessengerLoaded', function(event) {
            $r1 = document.querySelector("df-messenger");
            $r2 = $r1.shadowRoot.querySelector("df-messenger-chat");
            $r3 = $r2.shadowRoot.querySelector("df-messenger-user-input"); //for other mods

            var sheet = new CSSStyleSheet;
            sheet.replaceSync(`div.chat-wrapper[opened="true"] { height: 405px}`);
            $r2.shadowRoot.adoptedStyleSheets = [sheet];

            // MORE OF YOUR DIALOGFLOW MESSENGER CODE
        });
    });
</script>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"
type="text/javascript"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }

    function translateLanguage(lang) {
        googleTranslateElementInit();
        var $frame = $('.goog-te-menu-frame:first');
        if (!$frame.size()) {
            alert("Error: Could not find Google translate frame.");
            return false;
        }
        $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
        return false;
    }

    $(function() {
        $('.selectpicker').selectpicker();
    });
</script>
@livewireStyles
@stack('scripts')
@livewireScripts
</body>

</html>
