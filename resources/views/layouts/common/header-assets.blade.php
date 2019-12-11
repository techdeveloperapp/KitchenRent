<title>@yield('title','Homepage')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- favicon ================================================== -->
<link rel="shortcut icon" href="{{url('frontend/images/icon.png')}}">
<!-- Apple iPhone Icon -->
<link rel="apple-touch-icon-precomposed" href="{{url('frontend/images/icon.png')}}">
<!-- Apple iPhone Retina Icon -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('frontend/images/icon.png')}}">
<!-- Apple iPhone Icon -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('frontend/images/icon.png')}}">
<!-- CSS ================================================== -->
<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('frontend/css/main-color.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('frontend/css/custom.css')}}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{url('frontend/')}}/scripts/jquery-3.4.1.min.js"></script>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">