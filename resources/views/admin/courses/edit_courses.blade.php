@extends('admin.layouts.app')
@section('rating')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Blogs</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/updatecourses/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Course Name</label>
                                <input type="text" name="course_name" value="{{$profileData->course_name}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Course Description</label>
                                <input type="text" name="description" value="{{$profileData->description}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Requirements</label>
                                <input type="text" name="requirements" value="{{$profileData->requirements}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">What You'll Learn</label>
                                <input type="text" name="learn" value="{{$profileData->learn}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Courses Duration</label>
                                <input type="string" name="duration" value="{{$profileData->duration}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Resources</label>
                                <input type="text" name="resources" value="{{$profileData->resources}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="course_image" class="form-control">
                                <img src="{{asset('uploads/courses/'.$profileData->course_image)}}" width="70px" height="70px">
                            </div>
                              

                            <div class="form-group">
                                <label for="name">Meta Title</label>
                                <input type="string" name="title"  value="{{$profileData->meta->title}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Meta Keywords</label>
                                <input type="string" name="meta_keywords" value="{{$profileData->meta->meta_keywords}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input type="string" name="meta_descriptions" value="{{$profileData->meta->meta_descriptions}}" class="form-control" required>
                            </div>

                          
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection