

@extends('layout')
@section('title',$profileData->title ?? '')
@section('meta_keywords',$profileData->meta_keywords ?? '')
@section('meta_descriptions',$profileData->meta_descriptions ?? '')
@section('top_header')
@include('layouts.topheader')
@endsection
@section('main')

<div class="navbar-area">
    <div class="mobile-responsive-nav">
    <div class="container">
    <div class="mobile-responsive-menu">
    <div class="logo">
    <a href="index.html">
    <img src="assets/images/logos/logo-small.png" class="logo-one" alt="logo">
    <img src="assets/images/logos/logo-small-white.png" class="logo-two" alt="logo">
    </a>
    </div>
    </div>
    </div>
    </div>
    
    
    
    
    <div class="inner-banner inner-banner-bg9">
    <div class="container">
    <div class="inner-title">
    <h3>Passion Foundation Services</h3>
    
    <ul>
    <li>
    <a href="index.html">Home</a>
    </li>
    <li>Services</li>
    </ul>
    </div>
    </div>
    </div>
    
    
    <div class="courses-details-area pt-100 pb-70">
    <div class="container">
    <div class="row">
    <div class="col-lg-8">
    <div class="courses-details-contact">
    <div class="tab courses-details-tab">
    
    <div class="tab_content current active">
    <div class="tabs_item current">
    <div class="courses-details-tab-content">
      
        <div class="courses-details-into">

            <h3>Service Name</h3>
            <p>
                {{$profileData->service_name}}
            </p>
            <p>
            </div>

   

    <div class="courses-details-into">

    <h3>Description</h3>
    <p>
        {{$profileData->description}}
    </p>
    <p>
    Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet
    et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor felis porttitor volutpat.
    Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Vivamus suscipit tortor eget.
    </p>
    </div>
    </div>
    </div>
    
    
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="courses-details-sidebar">
    <img src={{url('uploads/services/'.$profileData->service_image)}} alt="Courses" />
    <div class="content">
        <span>Service</span>
        <ul class="courses-details-list">
            <li>{{$profileData->service_name}}</li>
        </ul>

    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection    

