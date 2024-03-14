
@extends('layout')
@section('title',$page->title)
@section('meta_keywords',$page->meta_keywords)
@section('meta_descriptions',$page->meta_descriptions)

@section('top_header')
@include('layouts.topheader')
@endsection

@section('main')

<div style="margin-bottom: 60px;">
<div class="inner-banner inner-banner-bg">
<div class="container">
<div class="inner-title text-center">
<h3>About us</h3>
<ul>
<li>
<a href="{{url('/home')}}">Home</a>
</li>
<li>About Us</li>
</ul>

</div>
</div>
</div>
</div>
</div>

@include('edit.instructor')



@endsection