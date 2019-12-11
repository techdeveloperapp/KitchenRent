<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
@include('layouts.common.header-assets')
</head>

<body>
<script>
var active_lang = "{{ app()->getLocale() }}";
var base_url = "{{url('/')}}";
</script>
<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
@include('layouts.frontadmin.header')
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Dashboard -->
<div id="dashboard">
	@include('layouts.frontadmin.sidebar')
	<!-- Content ================================================== -->
		<div class="dashboard-content">
			@include('layouts.frontadmin.notification')
			@yield('content')
		</div>
	<!-- Content / End -->	
</div>
<!-- Dashboard / End -->

</div>
<!-- Wrapper / End -->
@include('layouts.frontadmin.footer')

</body>
</html>