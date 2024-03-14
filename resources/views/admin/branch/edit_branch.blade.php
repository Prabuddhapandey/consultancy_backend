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

                        <form method="post" action={{url('admin/updatebranch/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Branch Name</label>
                                <input type="text" name="branch_name" value="{{$profileData->branch_name}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Branch Location</label>
                                <input type="string" name="location" value="{{$profileData->location}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Branch Email</label>
                                <input type="string" name="email" value="{{$profileData->email}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="string" name="phone" value="{{$profileData->phone}}" class="form-control" required>
                            </div>
                          

                            <div class="form-group">
                                <label for="">Map</label>
                                <input type="string" name="map" value="{{$profileData->map}}" class="form-control" required>
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