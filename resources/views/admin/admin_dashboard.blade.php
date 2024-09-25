{{-- <!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png"/>

	<meta name="csrf-token" content="{{ csrf_token() }}">

<!--tagsinput-->
	<link href="{{ asset('backend/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
<!--tagsinput-->

	<!--plugins-->
	<link href="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
	<link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet"/>
	<!-- loader-->
	<link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet"/>
	<script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('backend/assets/css/dark-theme.css') }}"/>
	<link rel="stylesheet" href="{{ asset('backend/assets/css/semi-dark.css') }}"/>
	<link rel="stylesheet" href="{{ asset('backend/assets/css/header-colors.css') }}"/>
	<!-- Datatable -->
	<link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<!-- End Datatable -->


	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


	<title>Admin Dashboard </title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('admin.body.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('admin.body.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('admin')
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('admin.body.footer')
	</div>
	<!--end wrapper-->


	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/chartjs/js/chart.js') }}"></script>
	<script src="{{ asset('backend/assets/js/index.js') }}"></script>
	<!--tagsinput-->
	<script src="{{ asset('backend/assets/plugins/input-tags/js/tagsinput.js') }}"></script>
	<!--tagsinput-->

	<!--app JS-->
	<script src="{{ asset('backend/assets/js/app.js') }}"></script>

	<script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="{{ asset('backend/assets/js/code.js') }}"></script>

	<script>
		new PerfectScrollbar(".app-container")
	</script>

	<!--Datatable-->
<script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<!--End Datatable-->

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

<script src="https://cdn.tiny.cloud/1/231fc9eqs7rdulanfwnhpak978gbs7gqcttnrl7kukftg5hx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
	   tinymce.init({
		 selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
		 plugins: 'powerpaste advcode table lists checklist',
		 toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'
	   });
	</script>


</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignLab">
    <meta name="robots" content="">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="3x3" href="{{ asset('') }}admin-toefl/assets/images/logo/Icon.png">
    <title>@yield('title')</title>
    {{-- <title>Dashboard</title> --}}
    <!-- Stylesheets -->
    <link href="{{ asset('') }}admin-toefl/assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="{{ asset('') }}admin-toefl/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('') }}admin-toefl/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    @stack('link-template')
    @stack('styles')
</head>

<body>
    <div id="preloader" class="primary_bg">
        <div class="loader">
            <div class="dots">
                  <div class="dot mainDot"></div>
                  <div class="dot"></div>
                  <div class="dot"></div>
                  <div class="dot"></div>
                  <div class="dot"></div>
            </div>
        </div>
    </div>
    <div id="main-wrapper">
        <!--sidebar wrapper -->
		@include('admin.body.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('admin.body.header')
		<!--end header -->
		<!--start page wrapper -->
    </div>
    @yield('admin')

    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('') }}admin-toefl/assets/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}admin-toefl/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('') }}admin-toefl/assets/js/custom.js"></script>
    <script src="{{ asset('') }}admin-toefl/assets/js/dlabnav-init.js"></script>
    <script src="{{ asset('') }}admin-toefl/assets/js/demo.js"></script>
    <script src="{{ asset('') }}admin-toefl/assets/js/styleSwitcher.js"></script>
    @stack('scripts')
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
       <script src="https://cdn.tiny.cloud/1/j1hfe3jjl8v3xen47yistseyi4s1rdkfjr2uiqsj4nmypp61/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
       <script>
          tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'powerpaste advcode table lists checklist',
            toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table'
          });
       </script>
</body>

</html>
