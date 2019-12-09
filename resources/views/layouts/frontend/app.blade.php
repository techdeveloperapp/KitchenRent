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
@include('layouts.frontend.header')
<div class="clearfix"></div>

@include('layouts.Admin.notification')
<!-- Header Container / End -->

@yield('content')

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->
@include('layouts.frontend.footer')

</body>
</html>