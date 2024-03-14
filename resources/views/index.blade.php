@extends('layout')
@section('title', 'Passion Foundation ')
@section('')

@section('main')
<div class ="margin-top:120px">
    <div class="margin-bottom:100px">
<div class="banner-area">
    <div class="banner-area">
        <div class="container-fluid">
        <div class="row align-items-center">
        <div class="col-lg-6">
        <div class="banner-content">
            {{-- <div class ="margin-top:0px"> --}}
        <span  >{{$banner->topheader ?? ''}}</span>
        <h1  >{{$banner->header ?? ''}}</h1>
        <p>{{$banner->paragraph ?? ''}}</p>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="banner-img" data-speed="0.05" data-revert="true">
        <img src="{{url('uploads/banners/'.($banner->banner_image ?? ''))}}" width="700px" height="750px"  alt="Man" />
        <div class="bg-shape">
        <img src="assets/images/home-one/home-one-shape.png"/>
        </div>
        <div class="top-content" >
        <i class="flaticon-student"></i>
        <div class="content">
        <h3>250K</h3>
        <p>Assisted student</p>
        </div>
        </div>
        <div class="right-content" >
        <i class="flaticon-checked"></i>
        <div class="content">
        <h3>Congratulations</h3>
        <p>Your admission completed</p>
        </div>
        </div>
        <div class="left-content" >
        <div class="content">
        <img src="assets/images/home-one/user-img.jpg" alt="User" />
        <h3>User experience class</h3>
        <p>Today at 12.00 PM</p>
        </div>
        <a href="signup.html" class="join-btn">Join now</a>
        </div>
        <div class="banner-img-shape">
        <div class="shape1" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
        <img src="assets/images/home-one/shape3.png" alt="Shape" />
        </div>
        <div class="shape2" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
        <img src="assets/images/home-one/shape2.png" alt="Shape" />
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="banner-shape">
        <div class="banner-shape1">
        <img src="assets/images/home-one/shape1.png" alt="Shape" />
        </div>
        </div>
        </div>
   
</div>
</div>
</div>
<div class="counter-area pt-100 pb-70">
    <div class="margin-top:30px">
    <div class="container">
    <div class="row">
    <div class="col-lg-3 col-6 col-md-3">
    <div class="counter-content">
    <i class="flaticon-online-course"></i>
    <h3><span class="odometer" data-count="15000">{{$division->total_courses ?? ''}}</span>+</h3>
    <p>Courses & videos</p>
    </div>
    </div>
    <div class="col-lg-3 col-6 col-md-3">
    <div class="counter-content">
    <i class="flaticon-student"></i>
    <h3><span class="odometer" data-count="145000">{{$division->total_students ?? ''}}</span>+</h3>
    <p>Students enrolled</p>
    </div>
    </div>
    <div class="col-lg-3 col-6 col-md-3">
    <div class="counter-content">
    <i class="flaticon-online-course-1"></i>
    <h3><span class="odometer" data-count="10000">{{$division->total_instructors?? ''}}</span>+</h3>
    <p>Courses instructors</p>
    </div>
    </div>
    <div class="col-lg-3 col-6 col-md-3">
    <div class="counter-content">
    <i class="flaticon-customer-satisfaction"></i>
    <h3><span class="odometer" data-count="100">{{$division->satisfaction_rate ?? ''}}</span>%</h3>
    <p>Satisfaction rate</p>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
        
        
    @include('edit.country')
    
  
     
    @include('edit.instructor')
   
    

    <div class="enrolled-area">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6">
    <div class="enrolled-content">
    <div class="section-title">
    <h2>We have the most qualified instructors in your hometown.</h2>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
    </p>
    </div>
    <div class="row">
    <div class="col-lg-8 col-9">
    <ul class="enrolled-list">
    <li><i class="flaticon-check"></i> Full lifetime access</li>
    <li><i class="flaticon-check"></i> Certificate of completion</li>
    </ul>
    </div>
    <div class="col-lg-6 col-6">
    <ul class="enrolled-list">
    <li><i class="flaticon-check"></i> 20+ downloadable resources</li>
    <li><i class="flaticon-check"></i> Free trial 7 days</li>
    </ul>
    </div>
    </div>
    <a  class="default-btn">Enrolled today</a>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="enrolled-img" data-speed="0.05" data-revert="true">
    <img src="assets/images/enrolled/enrolled-img.png" alt="Enrolled" />
    <div class="bg-shape">
    <img src="assets/images/enrolled/enrolled-shape.png" alt="Shape" />
    </div>
    <div class="top-content">
    <div class="enrolled-img-content">
    <i class="flaticon-mail-inbox-app"></i>
    <div class="content">
    <h3>Inbox</h3>
    <p>Work with us!</p>
    </div>
    </div>
    </div>
    <div class="right-content">
    <div class="enrolled-img-content">
    <i class="flaticon-discount"></i>
    <div class="content">
    <h3>Get 40% off</h3>
    <p>Every course</p>
    </div>
    </div>
    </div>
    <div class="left-content">
    <div class="enrolled-img-content">
    <i class="flaticon-reading-book active"></i>
    <div class="content">
    <h3>110k+ students</h3>
    <p>Learn daily</p>
    </div>
    </div>
    </div>
    <div class="enrolled-img-shape">
    <div class="shape1">
    <img src="assets/images/enrolled/enrolled-shape2.png" alt="Shape" />
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
   
    
    @include('edit.blog_layout')

    <div class="play-area ptb-100">
        <div class="container">
        <div class="title text-center mb-45">
        <h2> We worked with <span>250+ </span> leading universities and companies</h2>
        </div>
        <div class="brand-slider owl-carousel owl-theme pb-100">
        <div class="brand-item">
        <img src="assets/images/brand-logo/1.png" class="brand-item-logo1" alt="Images">
        <img src="assets/images/brand-logo/brand-logo1.png" class="brand-item-logo2" alt="Images">
        </div>
        <div class="brand-item">
        <img src="assets/images/brand-logo/2.png" class="brand-item-logo1" alt="Images">
        <img src="assets/images/brand-logo/brand-logo2.png" class="brand-item-logo2" alt="Images">
        </div>
        <div class="brand-item">
        <img src="assets/images/brand-logo/3.png" class="brand-item-logo1" alt="Images">
        <img src="assets/images/brand-logo/brand-logo3.png" class="brand-item-logo2" alt="Images">
        </div>
        <div class="brand-item">
        <img src="assets/images/brand-logo/4.png" class="brand-item-logo1" alt="Images">
        <img src="assets/images/brand-logo/brand-logo4.png" class="brand-item-logo2" alt="Images">
        </div>
        <div class="brand-item">
        <img src="assets/images/brand-logo/5.png" class="brand-item-logo1" alt="Images">
        <img src="assets/images/brand-logo/brand-logo5.png" class="brand-item-logo2" alt="Images">
        </div>
        <div class="brand-item">
        <img src="assets/images/brand-logo/6.png" class="brand-item-logo1" alt="Images">
        <img src="assets/images/brand-logo/brand-logo6.png" class="brand-item-logo2" alt="Images">
        </div>
        </div>
        <div class="play-btn-area">
        <a href={{$banner->link ?? ''}} class="play-btn">
        <i class="flaticon-play-button-arrowhead"></i>
        </a>
        </div>
        </div>
        </div>
        

    @include('edit.rating')

    </div>

   @endsection