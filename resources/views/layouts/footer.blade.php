<footer class="footer-area">
    <div class="container pt-70 pb-60">
        <div class="row">
        <div class="col-lg-3 col-sm-6">
        <div class="footer-widget">
        <div class="footer-logo">
            <a href="{{url('/home')}}">
            <img src="{{asset('assets/images/logos/logo.png')}}" alt="Images">
            </a>
        </div>
            <p>
            Lorem ipsum dolor sit amet, consec tetur
            adipiscing elit eiusmod tempor incididunt
            labore dolore magna aliqua consec tetur
            adipiscing elite sed do labor.
            </p>
        <ul class="social-link">
        <li class="social-title">Follow Us:</li>
        <li>
        <a href="https://www.facebook.com/" target="_blank">
        <i class="ri-facebook-fill"></i>
        </a>
        </li>
        <li>
        <a href="https://twitter.com/" target="_blank">
        <i class="ri-twitter-fill"></i>
        </a>
        </li>
        <li>
        <a href="https://www.pinterest.com/" target="_blank">
        <i class="ri-instagram-line"></i>
        </a>
        </li>
        </ul>
        </div>
        </div>
        <div class="col-lg-2 col-sm-6">
        <div class="footer-widget ps-5">
        <h3>About us</h3>
        <ul class="footer-list">
        <li>
        <a href="{{url('/about')}}">
        About Us
        </a>
        </li>
        {{-- <li>
        <a href="signup.html">
        Instructor registration
        </a>
        </li> --}}
        <li>
        <a href="instructors.html">
        Team
        </a>
        </li>
        {{-- <li>
        {{-- <a href="event.html">
        Our Event
        </a> --}} 
        </li>
        <li>
        <a href="{{url('courses')}}">
        Courses List
        </a>
        </li>
        </ul>
        </div>
        </div>
        <div class="col-lg-2 col-sm-6">
        <div class="footer-widget ps-5">
        <h3>Resources</h3>
        <ul class="footer-list">
        <li>
        <a href="{{url('/home')}}">
        Home
        </a>
        </li>
        <li>
        <a href="courses.html">
        Courses
        </a>
        </li>
        <li>
        <a href="{{(url('/blog'))}}">
        Our Blog
        </a>
        </li>
        {{-- <li>
        <a href="terms-condition.html">
        Terms & conditions
        </a>
        </li>
        <li>
        <a href="privacy-policy.html">
        Privacy Policy
        </a>
        </li> --}}
        </ul>
        </div>
        </div>

        <div class="col-lg-2 col-sm-6">
            <div class="footer-widget ps-5">
            <h3>Branch</h3>
         @foreach($branch as $item)
            <ul class="footer-list">
            <li>
            <a href="{{url('branch/detail/'.$item->id)}}">
            {{$item->branch_name}}
            </a>
            </li>
           </ul>
         @endforeach

            </div>
            </div>
           
        <div class="col-lg-2 col-sm-6">
        <div class="footer-widget ps-5">
        <h3>Official Info</h3>
        <ul class="footer-contact">
        <li>
        <i class="ri-map-pin-2-fill"></i>
        <div class="content">
        <h4>Location:</h4>
        <span>2976 Sunrise Road Las Vegas</span>
        </div>
        </li>
        <li>
        <i class="ri-mail-fill"></i>
        <div class="content">
        <h4>Email:</h4>
        <span><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#234b464f4f4c634f4647560d404c4e"><span class="__cf_email__" data-cfemail="1179747d7d7e517d7475643f727e7c">[email&#160;protected]</span></a></span>
        </div>
        </li>
        <li>
        <i class="ri-phone-fill"></i>
        <div class="content">
        <h4>Phone:</h4>
        <span><a href="tel:098765432150">098765432150</a></span>
        </div>
        </li>
        </ul>
        </div>
       </div>
       </div>
    </div>
    

    </footer>
    