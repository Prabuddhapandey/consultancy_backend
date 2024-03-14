<div class="instructors-area pb-70">
    <div class="container">
    <div class="row align-items-center mb-45">
        <div class="col-lg-8 col-md-9">
            <div class="section-title mt-rs-20">
                <h2>Meet our People</h2>
                <p>
                    "Welcome to our vibrant community where passion meets purpose</p>
            
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach($instructor as $item)
        <div class="col-lg-3 col-md-6">
            <div class="instructors-item">
                <div class="instructors-img">
               
                <img src="{{asset('uploads/instructors/'.$item->instructor_image)}}" alt="Team Images">
                </a>
                <ul class="instructors-social">
                <li>
                <a href="{{$item->fb}}" target="_blank">
                <i class="ri-facebook-fill"></i>
                </a>
                </li>
                <li>
                <a href="{{$item->insta}}" target="_blank">
                <i class="ri-instagram-line"></i>
                </a>
                </li>
                </ul>
            </div>
                <h3 class="text-center">{{$item->name}}</h3>
                <h5 class="text-center text-primary">{{$item->position}}</h5>
                {{-- <div class="content">
                    <span>{{$item->position}}</span>
                </div> --}}
            </div>
        </div>
        @endforeach
    </div>
    
    
    </div>
    </div>
</div>
    
</div>
    