@extends('admin.layouts.app')
@section('home')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">Courses Table </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{url('/admin/createcourses/')}}" class="btn btn-primary btn-sm-2">Add Courses</a>
                            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Courses Name</th>
                                            <th>Courses Description</th>
                                            <th>Courses Requirements</th>
                                            <th>What You'll learn</th>
                                            <th>Courses Duration</th>
                                            <th>Resources</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Courses Name</th>
                                            <th>Courses Description</th>
                                            <th>Courses Requirements</th>
                                            <th>What You'll learn</th>
                                            <th>Courses Duration</th>
                                            <th>Resources</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    @foreach($profileData as $item)
                                    <tr>
                                        <td>{{$item->course_name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->requirements}}</td>
                                        <td>{{$item->learn}}</td>
                                        <td>{{$item->duration}}</td>
                                        <td>{{$item->resources}}</td>
                                        <td>
                                            <img src="{{asset('uploads/courses/'.$item->course_image)}}" width="70px" height="70px">
                                        </td>

                                        
                                        <td><a href="{{url('admin/editcourses/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                                        <td>
                                            <form action="{{url('admin/deletecourses/'.$item->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button></form>
                                        </td>

                                    </tr>
                                    @endforeach

                                    <tbody>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
@endsection