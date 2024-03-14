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

                        <form method="post" action={{url('admin/updateinstructor/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Person Name</label>
                                <input type="text" name="name" value="{{$profileData->name}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Position</label>
                                <input type="text" name="position" value="{{$profileData->position}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Facebook</label>
                                <input type="string" name="fb" value="{{$profileData->fb}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Facebook</label>
                                <input type="string" name="insta" value="{{$profileData->insta}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="instructor_image" class="form-control">
                                <img src="{{asset('uploads/instructors/'.$profileData->instructor_image)}}" width="70px" height="70px">
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