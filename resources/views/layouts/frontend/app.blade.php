<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Homepage</title>
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
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
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
<!-- Header Container / End -->

@yield('content')

@extends('layouts.frontend.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>