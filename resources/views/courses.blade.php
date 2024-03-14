
@extends('layout')
@section('title',$page->title ?? '')
@section('meta_keywords',$page->meta_keywords ?? '')
@section('meta_descriptions',$page->meta_descriptions ?? '')
@section('top_header')
@include('layouts.topheader')
@endsection
@section('main')
<div class="inner-banner inner-banner-bg4">
    <div class="container">
    <div class="inner-title text-center">
    <h3>Courses</h3>
    <ul>
    <li>
    <a href="index.html">Home</a>
    </li>
    <li>Courses Details</li>
    </ul>
    </div>
    </div>
    </div>
     
    
    <div class="blog-area pt-100 pb-70">
        <div class="container">
        <div class="row align-items-center mb-45">
        <div class="col-lg-8 col-md-9">
        <div class="section-title mt-rs-20">
        <h2>Dive Into Our Courses Detail</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
        </p>
        </div>
        </div>
        <div class="col-lg-4 col-md-3 text-end">
        
        </div>
        </div>
        <div class="row justify-content-center">
            @foreach($courses as $item)
        <div class="col-lg-4 col-md-6">
            <div class="blog-card">
            <a href="{{url('courses/details/'.$item->id)}}">
            <img src="{{url('uploads/courses/'.$item->course_image)}}" width="500px" height="400px" alt="Blog">
            </a>
            <div class="content">
            <h3><a href="{{url('courses/details/'.$item->id)}}">{{$item->course_name}}</a></h3>
        
            
            </div>
            </div>
        </div>
        @endforeach
        </div>
        </div>
   
        </div>
        </div>
        </div>
        

    @endsection