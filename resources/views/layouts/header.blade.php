
<div class="desktop-nav nav-area">
  
  <div class="container-fluid">
  <nav class="navbar navbar-expand-md navbar-light ">
  <a class="navbar-brand" href="index.html">
  <img src="{{asset('assets/images/logos/logo.png')}}" class="logo-one" alt="Logo">
  <img src="assets/images/logos/logo-2.png" class="logo-two" alt="Logo">
  </a>
  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
  <ul class="navbar-nav">
  <li class="nav-item">
  <a href="{{url('/')}}">
  Home
  </a>
  
  </li>
  {{-- <li class="nav-item">
  <a href="{{url('/courses')}}">
  Courses
  </a> --}}

  <li class="nav-item">
    <a href="{{url('/services')}}">
    Services
    </a>
  
  </li>
   
  <li class="nav-item">
    <a href="{{url('/destination')}}" class="nav-link dropdown-toggle">
    Destination
    </a>
    <ul class="dropdown-menu">
      @foreach($destination as $item)
    <li class="nav-item">
    <a href="{{url('destination/details/'.$item->id)}}" class="nav-link">{{$item->name}}
    </a>
    </li>
    @endforeach
   </ul>
    </li>

    <li class="nav-item">
      <a href="{{url('/courses')}}" class="nav-link dropdown-toggle">
      Courses
      </a>
      <ul class="dropdown-menu">
        @foreach($course as $item)
      <li class="nav-item">
      <a href="{{url('courses/details/'.$item->id)}}" class="nav-link">{{$item->course_name}}
      </a>
      </li>
      @endforeach
     </ul>
      </li>

  
  
  <li class="nav-item">
  <a href="{{url('/blog')}}">
  Blog </a>
  
  </li>
  <li class="nav-item">
  <a href="{{url('/contact')}}">
  Contact Us
  </a>
  </li>

  
  </div>
  </nav>
  </div>

  </div>
  