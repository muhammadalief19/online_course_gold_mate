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
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@include('frontend.body.script')
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') </title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset('frontend/images/favicon.png') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/tooltipster.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- end inject -->



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
  @include('frontend.body.header')
<!--======================================
        END HEADER AREA
======================================-->

 @yield('home')

<!-- ================================
         END FOOTER AREA
================================= -->
   @include('frontend.body.footer')
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->



<!-- template js files -->
<script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.js') }}"></script>
<script src="{{ asset('frontend/js/waypoint.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/fancybox.js') }}"></script>
<script src="{{ asset('frontend/js/datedropper.min.js') }}"></script>
<script src="{{ asset('frontend/js/emojionearea.min.js') }}"></script>
<script src="{{ asset('frontend/js/tooltipster.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/plyr.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.lazy.min.js') }}"></script>
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
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@include('frontend.body.script')

</body>
</html> --}}
