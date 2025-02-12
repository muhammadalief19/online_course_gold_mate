@php
    $setting = App\Models\SiteSetting::find(1);
@endphp
<footer class="footer__area">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer__widget">
                        <div class="logo mb-35 ">
                            <a href="index.html"><img src="{{ asset($setting->logo) }}"  alt="img"></a>
                        </div>
                        <div class="footer__content">
                            <p>{{ $setting->email }}</p>
                            <ul class="list-wrap">
                                <li>{{ $setting->address }}</li>
                                <li>{{ $setting->phone }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Useful Links</h4>
                        <div class="footer__link">
                            <ul class="list-wrap">
                                <li><a href="#">Our values</a></li>
                                <li><a href="#">Our advisory board</a></li>
                                <li><a href="#">Our partners</a></li>
                                <li><a href="#">Become a partner</a></li>
                                <li><a href="#">Work at Future Learn</a></li>
                                <li><a href="#">Quizlet Plus</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h4 class="footer__widget-title">Our Company</h4>
                        <div class="footer__link">
                            <ul class="list-wrap">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="{{ route('become.instructor') }}">Become Teacher</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="#">Instructor</a></li>
                                <li><a href="#">Events</a></li>
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
                                    <a href="{{ asset('') }}#" target="_blank" class="fab fa-youtube">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('') }}#" target="_blank" class="fab fa-whatsapp">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $setting->facebook }}" target="_blank" class="fab fa-facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $setting->twitter }}" target="_blank" class="fab fa-twitter">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" class="fab fa-instagram">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="app-download">
                            <a href="#"><img src="{{ asset('') }}assets/img/others/google-play.svg" alt="img"></a>
                            <a href="#"><img src="{{ asset('') }}assets/img/others/apple-store.svg" alt="img"></a>
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
                        <p>{{ $setting->copyright }}</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="footer__bottom-menu">
                        <ul class="list-wrap">
                            <li><a href="#">Term of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
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
