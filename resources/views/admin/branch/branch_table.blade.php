@extends('admin.layouts.app')
@section('destination_table')
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
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{url('/admin/createbranch/')}}" class="btn btn-primary btn-sm-2">Add Branch</a>
                            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Brach Name</th>
                                            <th>Branch Location</th>
                                            <th>Branch Email</th>
                                            <th>Branch Phone</th>
                                            <th>Brach Map</th>
                                            <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Brach Name</th>
                                            <th>Branch Location</th>
                                            <th>Branch Email</th>
                                            <th>Branch Phone</th>
                                            <th>Brach Map</th>
                                            <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    @foreach($profileData as $item)
                                    <tr>
                                        <td>{{$item->branch_name}}</td>
                                        <td>{{$item->location}}</td>
                                        <td>{{$item->email}}</td>
                                       <td>{{$item->phone}}</td>
                                       <td>{{$item->map}}</td>
                                        <td><a href="{{url('admin/editbranch/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                                        <td>
                                            <form action="{{url('admin/deletebranch/'.$item->id)}}" method="post">
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