<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 5.0.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			@section('title')
				Metronic | Dashboard
			@show
		</title>

		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->

		@section('styles')
			<!--begin::Base Styles -->  
			<!--begin::Page Vendors -->
			<link href="{{ asset('metronic_5.05/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
			<!--end::Page Vendors -->
			<link href="{{ asset('metronic_5.05/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('metronic_5.05/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
			<!--end::Base Styles -->
			<link rel="shortcut icon" href="{{ asset('metronic_5.05/assets/demo/default/media/img/logo/favicon.ico') }}" />

			<!-- begin:: Custom Style -->
			<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
			<!-- end:: Custom Style -->
		@show

		

	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- begin::Header -->
			@include('partials/_header-base')
			<!-- end::Header -->
					
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				
				<!-- begin:: Aside-left -->
				@include('partials/_aside-left')
				<!-- end:: Aside-left -->		
				
				<!-- begin: Wrapper -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					@include('partials/_subheader')
					<!-- END: Subheader -->

					<!-- begin: Content-->
					{{-- @include('partials/_layout-content') --}}
					@yield('content')
					<!-- end: Content -->
				</div>
				<!-- end: Wrapper -->
			</div>
			<!-- end:: Body -->

			<!-- begin::Footer -->
			@include('partials/_footer')
			<!-- end::Footer -->

		</div>
		<!-- end:: Page -->

    	<!-- begin::Quick Sidebar -->
    	@include('partials/_layout-quick-sidebar')
		<!-- end::Quick Sidebar -->

	    <!-- begin::Scroll Top -->
		@include('partials/_layout-scroll-top')
		<!-- end::Scroll Top -->

		<!-- begin::Quick Nav -->
		{{-- @include('partials/_layout-tooltips') --}}
		<!-- begin::Quick Nav -->

		@section('scripts')
			<!--begin::Base Scripts -->
			<script src="{{ asset('metronic_5.05/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
			<script src="{{ asset('metronic_5.05/assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
			<!--end::Base Scripts -->   
			<!--begin::Page Vendors -->
			<script src="{{ asset('metronic_5.05/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
			<!--end::Page Vendors -->  
			<!--begin::Page Snippets -->
			<script src="{{ asset('metronic_5.05/assets/app/js/dashboard.js') }}" type="text/javascript"></script>
			<!--end::Page Snippets -->
		@show
	</body>
	<!-- end::Body -->
</html>
