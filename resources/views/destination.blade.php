
@extends('layout')
@section('title',$page->title ?? '') 
@section('meta_keywords',$page->meta_keywords ?? '')
@section('meta_descriptions',$page->meta_descriptions ?? '')
@section('top_header')
@include('layouts.topheader')
@endsection
@section('main')

<div style="margin-bottom: 60px;">
<div class="inner-banner inner-banner-bg">
<div class="container">
<div class="inner-title text-center">
<h3>Destination</h3>
<ul>
<li>
<a >Home</a>
</li>
<li>EXPLORE cOUNTRIES</li>
</ul>
</div>
</div>
</div>
</div>
</div>

@include('edit.country')
</div>
</div>
</div>
</div>


@endsection