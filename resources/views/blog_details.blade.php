@extends('layout')
@section('title', $profileData->meta->title ?? '')
@section('meta_keywords', $profileData->meta->meta_keywords ?? '')
@section('meta_descriptions', $profileData->meta->meta_descriptions ?? '')
@section('top_header')
@include('layouts.topheader')
@endsection
@section('main')
<div class="blog-details-area pt-100 pb-70">
  <div class="container">
  <div class="row">
  <div class="col-lg-8">
  <div class="blog-details-content pr-20">
  <div class="blog-preview-img">
  <img src="{{url('uploads/blogs/'.$profileData->blog_image)}}"  width="800px" height="500px" alt="Blog Details">
  </div>
  <ul class="tag-list">
  <li><i class="ri-calendar-todo-fill"></i>{{$profileData->date}}</li>
  
  </ul>
  <h2>{{$profileData->name}}</h2>
  <p>
  {{$profileData->description}}
  </p>
  
  
  </div>
  </div>
  <div class="col-lg-4">
  <div class="side-bar-area">
   
    <div class="col-lg-12">
      <div class="side-bar-area">
       
      <div class="side-bar-widget">
      <h3 class="title">Popular post</h3>
      
      <div class="widget-popular-post">
        @foreach($blogdata as $item)
      <article class="item d-flex justify-content">
        <a class="me-3">
          <img src="{{url('uploads/blogs/'.$item->blog_image)}}"  width="50px" height="50px">
      </a>
      <div class="info">
      <p>{{$item->date}}</p>
      <h4 class="title-text">
      <a href="{{url('blog/details/'.$item->id)}}">
      {{$item->name}}
      </a>
      </h4>
      </div>
      </article>
      @endforeach
      
      
      </div>
      </div>
     
      </div>
      </div>
  
  </div>
  </div>
  </div>
  </div>
  </div>
  
   
{{-- <div class="user-area pt-100 pb-70">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6">
          <div class="user-all-form">
            <div class="contact-form">
              <h3 class="user-title">Blog Details</h3>
              <div class="user-description">
                <h4>Date</h4>
                <p>
                    <li><i class="ri-calendar-todo-fill"></i> {{$profileData->date}} </li>
              </div>
              <div class="user-description">
                <h4>Description</h4>
                <p>
                  {{$profileData->description}}
              </div>
              <div class="user-requirements">
                <h4>Requirements</h4>
                <p>
                    {{$profileData->requirement}}
                
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="user-img">
            <img src="{{url('uploads/blogs/'.$profileData->blog_image)}}"  width="500px" height="400px" alt="Blog Details">
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  
  
@endsection