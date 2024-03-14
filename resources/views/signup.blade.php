@include('layouts.topheader')
@extends('layout')
@section('main')
<div class="inner-banner inner-banner-bg3">
<div class="container">
<div class="inner-title text-center">
<h3>Sign up</h3>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>Sign up</li>
</ul>
</div>
</div>
</div>


<div class="user-area pt-100 pb-70">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-lg-6">
<div class="user-all-form">
<div class="contact-form">
<h3 class="user-title"> Sign up </h3>
<form method="post" action={{url('/storeuser')}}>
    @csrf
    <div class="row">
    <div class="col-lg-12">
    <div class="form-group">
    <input type="text" class="form-control" required data-error="Username" name="name" placeholder="Username">
    </div>
    </div>
    <div class="col-lg-12 ">
    <div class="form-group">
    <input type="email" class="form-control" required data-error="Please enter Email" name="email" placeholder="Please Enter Email">
    </div>
    </div>
    <div class="col-12">
    <div class="form-group">
    <input class="form-control" type="password" name="password" placeholder="Password">
    </div>
    </div>
    <div class="col-lg-12 col-md-12">
    <button type="submit" class="default-btn">
    Register Now
    </button>
    </div>
    </div>
</form>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="user-img">
<img src="assets/images/faq-img.jpg" alt="faq" />
</div>
</div>
</div>
</div>
</div>




@endsection