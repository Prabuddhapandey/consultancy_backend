@extends('admin.layouts.app')
@section('destination')
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
                    <div class="card-header">Create Courses</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/storecourses/')}} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Course Name</label>
                                <input type="text" name="course_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Course Description</label>
                                <input type="text" name="description" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Requirements</label>
                                <input type="text" name="requirements" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">What You'll learn</label>
                                <input type="text" name="learn" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Courses Duration</label>
                                <input type="string" name="duration" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Resources</label>
                                <input type="text" name="resources" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="course_image" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Meta Title</label>
                                <input type="string" name="title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Meta Keywords</label>
                                <input type="string" name="meta_keywords" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input type="string" name="meta_descriptions" class="form-control" required>
                            </div>
                          

                          
                            <button type="submit" class="btn btn-primary">Create Courses</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection