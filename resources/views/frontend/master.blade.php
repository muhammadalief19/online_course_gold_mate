<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gold Mate - Online Courses & Toefl</title>
    <meta name="description" content="SkillGro - Online Courses & Education Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/instructor/gold_icon.jpg">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.8/css/tooltipster.bundle.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/flaticon-skillgro.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/flaticon-skillgro-new.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/default-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/odometer.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/aos.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/plyr.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/spacing.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/tg-cursor.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/main.css">
</head>
<body>
        <div id="preloader">
            <div id="loader" class="loader">
                <div class="loader-container">
                </div>
            </div>
        </div>

        @include('frontend.body.header')

        <main class="main-area fix">
            @yield('home')
        </main>

        @include('frontend.body.footer')


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.8/js/tooltipster.bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    SVGInject(document.querySelectorAll("img.injectable"));
</script>
<script>
    var player = new Plyr('#player');
</script>




<script type="text/javscript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const tabContent = document.querySelectorAll('.tab-pane');
    tabContent.forEach((tab) => {
        const swiperContainer = tab.querySelector('.swiper');
        if (swiperContainer) {
            new Swiper(swiperContainer, {
                slidesPerView: 1,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.courses-button-next',
                    prevEl: '.courses-button-prev',
                },
                loop: true,
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                },
            });
        }
    });
});
</script>

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
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@include('frontend.body.script')
</body>
</html>
