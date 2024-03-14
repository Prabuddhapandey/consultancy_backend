
@extends('layout')
@section('title', 'Ab ')
@section('top_header')
@include('layouts.topheader')
@endsection
@section('main')
<div class="inner-banner inner-banner-bg2">
<div class="container">
<div class="inner-title text-center">
<h3>Testimonials</h3>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>Testimonials</li>
</ul>
</div>
</div>
</div>
@include('edit.rating')
<div class="col-lg-7">
    <form class="newsletter-form" data-toggle="validator" method="POST">
    <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required autocomplete="off">
    <button class="subscribe-btn" type="submit">
    Subscribe Now <i class="flaticon-paper-plane"></i>
    </button>
    <div id="validator-newsletter" class="form-result"></div>
    </form>
    </div>
@endsection