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
                    <div class="card-header">Edit Division</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/updatedivision/'.$profileData->id)}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                                        <div class="form-group">
                                <label for="">Total Courses</label>
                                <input type="integer" name="total_courses" value="{{$profileData->total_courses}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="">Total Student</label>
                                <input type="integer" name="total_students" value="{{$profileData->total_students}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Total Instructor</label>
                                <input type="integer" name="total_instructors"  value="{{$profileData->total_instructors}}" class="form-control" required>
                            </div>
        
                            <div class="form-group">
                                <label for="">Satisfaction Rate</label>
                                <input type="float" name="satisfaction_rate" value="{{$profileData->satisfaction_rate}}" class="form-control" required>
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