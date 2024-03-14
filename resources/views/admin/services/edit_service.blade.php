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
                    <div class="card-header">Edit Banner</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/updateservice/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Service Name</label>
                                <input type="text" name="service_name" value="{{$profileData->service_name}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" value="{{$profileData->description}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" name="service_image" class="form-control">
                                <img src="{{asset('uploads/services/'.$profileData->service_image)}}" width="70px" height="70px">
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