<div style="margin-top: 60px;">
<div class="courses-area pb-70">
    <div class="container">
    <div class="section-title text-center mb-45">
    <h2>SELECT YOUR DREAM DESTINATION</h2>
    <p>
        Explore the best study destinations in the world! Learn all about the countries' top universities, scholarships, cost of living, post-study work rights and more
    </p>
    </div>
     
    <div class="row">
        @foreach($destination as $item)
    <div class="col-lg-4 col-md-6">
    <div class="courses-item">
    <a href="{{url('destination/details/'.$item->id)}}">
    <img src="{{url('uploads/countrys/'.$item->country_image)}}" width="500px" height="400px" alt="Courses" />
    </a>
    <div class="content">
    <h3><a href="{{url('destination/details/'.$item->id)}}">{{$item->name}}</a></h3>
    <div class="bottom-content">
    {{-- <a href="instructors-details.html" class="user-area">
    </a> --}}
    </div>
    </div>
    </div>
    </div>
    @endforeach