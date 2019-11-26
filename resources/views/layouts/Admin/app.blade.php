<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			Metronic | Dashboard
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
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
		<link href="{{url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors -->
		<link href="{{url('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('assets/demo/demo6/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link href="{{url('assets/custom.css')}}" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="{{url('assets/demo/demo6/media/img/logo/favicon.ico')}}" />
	</head>
	<!-- end::Head -->
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- end::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			@include('layouts.admin.header')
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			@include('layouts.admin.sidebar')
			<div class="m-grid__item m-grid__item--fluid m-wrapper">
				@include('layouts.admin.breadcrumb')
				@yield('content')
			</div>
			</div>
			<!-- end:: Body -->
			@include('layouts.admin.footer')
		</div>
		<!-- end:: Page -->
			@include('layouts.admin.commonpopbox')
		<!--begin::Base Scripts -->
		<script src="{{url('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/demo/demo6/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
		<script src="{{url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
		<!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
		<script src="{{url('assets/app/js/dashboard.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/custom.js')}}" type="text/javascript"></script>
		<!--end::Page Snippets -->
		<!--begin::Page Vendors -->
		<script src="{{url('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
		<!--end::Page Vendors -->  
		<!--begin::Page Resources -->
		<script src="{{url('assets/demo/default/custom/crud/datatables/basic/basic.js')}}" type="text/javascript"></script>
		<!--end::Page Resources -->
	</body>
	<!-- end::Body -->
</html>	
