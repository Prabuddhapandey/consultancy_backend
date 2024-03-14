
@extends('layout')
@section('title', $dest->meta->title ?? '')
@section('meta_keywords', $dest->meta->meta_keywords ?? '')
@section('meta_descriptions', $dest->meta->meta_descriptions ?? '')

@section('top_header')
@include('layouts.topheader')
@endsection
@section('main')

<div class="inner-banner inner-banner-bg4">
  <div class="container">
  <div class="inner-title text-center">
  <h3>Destination Details</h3>
  <ul>
  <li>
  <a href="{{url('/home')}}">Home</a>
  </li>
  <li>Destination</li>
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
              <h3 class="user-title">Country Details</h3>
              <div class="user-description">
                <h4>Country Name</h4>
                <p>
                  {{$dest->name}}
              </div>
              <div class="user-description">
                <h4>Description</h4>
                <p>
                  {{$dest->description}}
              </div>
              <div class="user-requirements">
                <h4>Requirements</h4>
                <p>
                    {{$dest->requirement}}
                
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="user-img">
            <img src="{{url('uploads/countrys/'.$dest->country_image)}}" alt="faq" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
</div>

@endsection