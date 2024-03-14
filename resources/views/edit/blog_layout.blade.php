 
    <div class="blog-area pt-100 pb-70">
        <div class="container">
        <div class="row align-items-center mb-45">
        <div class="col-lg-8 col-md-9">
        <div class="section-title mt-rs-20">
        <h2>Latest from our blogs</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
        </p>
        </div>
        </div>
        <div class="col-lg-4 col-md-3 text-end">
        
        </div>
        </div>
        <div class="row justify-content-center">
            @foreach($BlogData as $item)
        <div class="col-lg-4 col-md-6">
            <div class="blog-card">
            <a href="{{url('blog/details/'.$item->id)}}">
            <img src="{{url('uploads/blogs/'.$item->blog_image)}}" width="500px" height="400px" alt="Blog">
            </a>
            <div class="content">
            <ul>
            <li><i class="ri-calendar-todo-fill"></i> {{$item->date}}</li>
        
            </ul>
            <h3><a href="{{url('blog/details/'.$item->id)}}">{{$item->name}}</a></h3>
        
            
            </div>
            </div>
        </div>
        @endforeach
        </div>
        </div>
   
        </div>
        </div>
    </div>
        

