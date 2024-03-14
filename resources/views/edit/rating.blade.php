        
    <div class="testimonials-area pt-100 pb-70">
    <div class="container">
    <div class="section-title mb-45 text-center">
    <h2>What our happy student say</h2>
    </div>
    <div class="row">
        @foreach($profileData as $item)
    <div class="col-lg-4 col-md-6">
    <div class="testimonials-item">
    <img src="{{url('uploads/ratings/'.$item->profile_image)}}" alt="testimonials" />
    <div class="rating">

    @for($i=1;$i<=$item->rating;$i++)
    <i class="ri-star-fill"></i>
    @endfor
    </div>
    <p>{{$item->description}}</p>
    <h3>{{$item->name}}</h3>
    <span>Student</span>
    <div class="quote"> <i class="flaticon-quote"></i></div>
    </div>
    </div>
    @endforeach
    <div class="col-lg-12 col-md-12 text-center">
    <div class="pagination-area">
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
    
    
    
    