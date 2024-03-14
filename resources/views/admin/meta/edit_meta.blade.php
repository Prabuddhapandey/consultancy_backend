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
                    <div class="card-header">Create User/Admin</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/updatemeta/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="form-group">
                                    <label >Page type</label>
                                    <select name="page" class="form-control" required>
                                        <option value="service" {{ $profileData->page === 'service' ? 'selected' : '' }}>Service</option>
                                        <option value="destination" {{  $profileData->page=== 'destination' ? 'selected' : '' }}>Destination</option>
                                        <option value="blog" {{ $profileData->page  === 'blog' ? 'selected' : '' }}>Blog</option>
                                        <option value="course" {{ $profileData->page  === 'course' ? 'selected' : '' }}>Course</option>
                                    </select>
                                </div>

                            <div class="form-group">
                                <label for="name">Meta Title</label>
                                <input type="string" name="title"  value="{{$profileData->title}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Meta Keywords</label>
                                <input type="string" name="meta_keywords" value="{{$profileData->meta_keywords}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <input type="string" name="meta_descriptions" value="{{$profileData->meta_descriptions}}" class="form-control" required>
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