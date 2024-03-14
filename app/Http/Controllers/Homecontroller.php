<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Destination;
use App\Models\Blog;
use App\Models\Instructor;
use App\Models\Banner;
use App\Models\User;
use App\Models\Courses;
use App\Models\Branch;
use App\Models\Division;
use App\Models\Service;
use App\Models\Meta;




class Homecontroller extends BaseController
{
   public function index()
   {
      $division=Division::first();
      $profileData=Rating::all();
      $BlogData=Blog::all();
      $instructor=Instructor::all();
      $banner=Banner::first();
      $course=Courses::all();
     return view('index',compact('profileData','BlogData','instructor','banner','division'));
   }
   public function signup()
   {
    return view('signup');
   }
   public function contact()
   {
    return view('contact');
   }
   public function blog(Request $request)

   {
      $page=Meta::where('page','blog')->first();
   $BlogData=Blog::all();
    return view('blog',compact('BlogData','page'));
   }
   public function about(Request $request)
   {
      $page=Meta::where('page','about')->first();
      
      $instructor=Instructor::all();
    return view('about',compact('instructor','page'));
   }
   
   public function destination(Request $request)
   {
      $page=Meta::where('page','destination')->first();
      $destination=Destination::all();
  
    return view('destination',compact('destination','page'));
   }
   public function destinationdetail(Request $request,$id)
   {
      $dest=Destination::with('meta')->find($id);
      return view('destination_detail',compact('dest'));
   }

   public function blogdetail(Request $request,$id)
   {
      
      $blogdata=Blog::all();
      $profileData=Blog::with('meta')->find($id);
    return view('blog_details',compact('profileData','blogdata'));
   }
  
  public function storeuser(Request $request)
  {
   $validated=$request->validate([
      'name'=>'required',
      'email'=>'required|email',
      'password'=>'required',
      'address'=>'nullable',
   ]);
   User::create($validated);
 
 return back()->with('success', 'User created successfully.');
 }
   
 public function courses()
 {
   $page=Meta::where('page','course')->first();
  $courses=Courses::all();
   return view('courses',compact('courses','page'));
 }
  
 public function coursesdetail(Request $request,$id)
 {
    $courses=Courses::all();
    $profileData=Courses::find($id);
  return view('courses_detail',compact('profileData','courses'));
 }
   

 public function branchdetail(Request $request,$id)
 {
   
    $profileData=Branch::find($id);
  return view('contact_detail',compact('profileData'));
 }

 public function services()
 {
   $page=Meta::where('page','service')->first();
  $service=Service::all();
   return view('services',compact('service','page'));
 }
  
 public function servicedetail(Request $request,$id)
 {
    $services=Service::all();
    $profileData=Service::with('meta')->find($id);
  return view('service_detail',compact('profileData','services'));
 }
   

  }
  
  

