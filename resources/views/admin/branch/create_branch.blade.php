@extends('admin.layouts.app')
@section('home')
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
                    <div class="card-header">Create Branch</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/storebranch/')}} enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Branch</label>
                                <input type="text" name="branch_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for=""> Our Location</label>
                                <input type="string" name="location" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="string" name="email" class="form-control" required>
                            </div>
        
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="string" name="phone" class="form-control" required>
                            </div>
                           
                            <div class="form-group">
                                <label for="">Map</label>
                                <input type="string" name="map" class="form-control" required>
                            </div>
                          
                            <button type="submit" class="btn btn-primary">Create Banner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection