<!-- template js files -->
{{-- <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.js') }}"></script>
<script src="{{ asset('frontend/js/waypoint.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/fancybox.js') }}"></script>
<script src="{{ asset('frontend/js/plyr.js') }}"></script>
<script src="{{ asset('frontend/js/datedropper.min.js') }}"></script>
<script src="{{ asset('frontend/js/emojionearea.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-te-1.4.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.MultiFile.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script>
    var player = new Plyr('#player');
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break;
 }
 @endif
</script> --}}
<!-- footer-area -->
<footer class="footer__area">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer__widget">
                        <div class="logo mb-35">
                            <a href="index.html"><img src="assets/img/logo/secondary_logo.svg" alt="img"></a>
                        </div>
                        <div class="footer__content">
                            <p>when an unknown printer took galley of type and scrambled it to make pspecimen bookt has.</p>
                            <ul class="list-wrap">
                                <li>463 7th Ave, NY 10018, USA</li>
                                <li>+123 88 9900 456</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Useful Links</h4>
                        <div class="footer__link">
                            <ul class="list-wrap">
                                <li><a href="events-details.html">Our values</a></li>
                                <li><a href="events-details.html">Our advisory board</a></li>
                                <li><a href="events-details.html">Our partners</a></li>
                                <li><a href="events-details.html">Become a partner</a></li>
                                <li><a href="events-details.html">Work at Future Learn</a></li>
                                <li><a href="events-details.html">Quizlet Plus</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Our Company</h4>
                        <div class="footer__link">
                            <ul class="list-wrap">
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="instructor-details.html">Become Teacher</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="instructor-details.html">Instructor</a></li>
                                <li><a href="events-details.html">Events</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Get In Touch</h4>
                        <div class="footer__contact-content">
                            <p>when an unknown printer took <br> galley type and scrambled</p>
                            <ul class="list-wrap footer__social">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <img src="assets/img/icons/facebook.svg" alt="img" class="injectable">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <img src="assets/img/icons/twitter.svg" alt="img" class="injectable">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <img src="assets/img/icons/whatsapp.svg" alt="img" class="injectable">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <img src="assets/img/icons/instagram.svg" alt="img" class="injectable">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <img src="assets/img/icons/youtube.svg" alt="img" class="injectable">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="app-download">
                            <a href="#"><img src="assets/img/others/google-play.svg" alt="img"></a>
                            <a href="#"><img src="assets/img/others/apple-store.svg" alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="copy-right-text">
                        <p>© 2010-2024 skillgro.com. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="footer__bottom-menu">
                        <ul class="list-wrap">
                            <li><a href="contact.html">Term of Use</a></li>
                            <li><a href="contact.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->

<script src="{{ asset('') }}assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ asset('') }}assets/js/bootstrap.min.js"></script>
<script src="{{ asset('') }}assets/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('') }}assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('') }}assets/js/jquery.odometer.min.js"></script>
<script src="{{ asset('') }}assets/js/jquery.appear.js"></script>
<script src="{{ asset('') }}assets/js/tween-max.min.js"></script>
<script src="{{ asset('') }}assets/js/select2.min.js"></script>
<script src="{{ asset('') }}assets/js/swiper-bundle.min.js"></script>
<script src="{{ asset('') }}assets/js/jquery.marquee.min.js"></script>
<script src="{{ asset('') }}assets/js/tg-cursor.min.js"></script>
<script src="{{ asset('') }}assets/js/vivus.min.js"></script>
<script src="{{ asset('') }}assets/js/ajax-form.js"></script>
<script src="{{ asset('') }}assets/js/svg-inject.min.js"></script>
<script src="{{ asset('') }}assets/js/jquery.circleType.js"></script>
<script src="{{ asset('') }}assets/js/jquery.lettering.min.js"></script>
<script src="{{ asset('') }}assets/js/plyr.min.js"></script>
<script src="{{ asset('') }}assets/js/wow.min.js"></script>
<script src="{{ asset('') }}assets/js/aos.js"></script>
<script src="{{ asset('') }}assets/js/main.js"></script>
<script>
    SVGInject(document.querySelectorAll("img.injectable"));
</script>

<script>
    var player = new Plyr('#player');
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break;
 }
 @endif
</script>
</body>
</html>
