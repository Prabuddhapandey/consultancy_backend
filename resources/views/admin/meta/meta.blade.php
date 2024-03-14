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
                    <div class="card-header">Create Destination</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="post" action={{url('admin/storemeta')}} enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label >Page Name</label>
                                <select name="page" class="form-control" required>
                                    <option value="service">Service</option>
                                    <option value="destination">Destination</option>
                                    <option value="blog">Blog</option>
                                    <option value="course">Course</option>
                                </select>
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
                            <button type="submit" class="btn btn-primary">Create Destination</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection