<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/ledu/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 03:17:27 GMT -->
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/iconplugins.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/theme-dark.css')}}">

    <title>@yield('title', 'Passion Foundation')</title>
    <meta name="keywords",content="@yield('meta_keywords','')">
    <meta name="description",content="@yield('meta_descriptions','')">


<link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
</head>
<body>

<!-- <div id="preloader">
<div id="preloader-area">
<div class="spinner"></div>
<div class="spinner"></div>
<div class="spinner"></div>
<div class="spinner"></div>
<div class="spinner"></div>
<div class="spinner"></div>
<div class="spinner"></div>
<div class="spinner"></div>
</div>
<div class="preloader-section preloader-left"></div>
<div class="preloader-section preloader-right"></div>
</div> -->

@yield('top_header')
 @include('layouts.header')
 @yield('main')
 {{-- {{-- @yield('signup') --}}
 {{-- @yield('blog')
 @yield('event')
 @yield('about')
 @yield('testimonials') --}}

@yield('destination_detail')

@include('layouts.footer')

<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<script src="{{asset('assets/js/plugins.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/ledu/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 03:18:23 GMT -->
</html>