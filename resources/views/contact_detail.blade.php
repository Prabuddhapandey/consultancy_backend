@extends('layout')
@section('title', 'Contact Details ')
@section('top_header')
@include('layouts.topheader')
@endsection
@section('main')

<div class="inner-banner inner-banner-bg4">
    <div class="container">
    <div class="inner-title text-center">
    <h3>Contact Us</h3>
    <ul>
    <li>
    <a href="index.html">Home</a>
    </li>
    <li>Contact us</li>
    </ul>
    </div>
    </div>
    </div>

<div class="contact-info-area pt-100 pb-70">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-4  col-12 col-sm-8">
    <div class="contact-info-card">
    <i class="ri-map-pin-fill"></i>
    <h3>Our location </h3>
    <p>{{$profileData->location}}</p>
    </div>
    </div>
    <div class="col-lg-4 col-6">
    <div class="contact-info-card">
    <i class="ri-mail-fill"></i>
    <h3>{{$profileData->email}}</h3>
    <p><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#4a222f2626250a262f2e3f64292527"><span class="__cf_email__" data-cfemail="660e030a0a09260a0302134805090b">[email&#160;protected]</span></a></p>
    <p><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#b4dddad2dbf4d8d1d0c19ad7dbd9"><span class="__cf_email__" data-cfemail="e881868e87a8848d8c9dc68b8785">[email&#160;protected]</span></a></p>
    </div>
    </div>
    <div class="col-lg-4 col-6">
    <div class="contact-info-card">
    <i class="ri-phone-fill"></i>
    <h3>Phone</h3>
    <p><a href="tel:+44587154756">{{$profileData->phone}}</a></p>
   
    </div>
    </div>
    </div>
    </div>
    </div>
    


    <div class="contact-map-area pb-100">
    <div class="container">
    <div class="contact-map">
    <iframe src="{{$profileData->map}}"></iframe>
    </div>
    </div>
    </div>


</div>



<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/plugins.js"></script>

<script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/ledu/default/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jan 2024 03:18:56 GMT -->
</html>
@endsection