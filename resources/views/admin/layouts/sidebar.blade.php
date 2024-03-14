<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin/home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{Auth()->user()->name ?? ''}}<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

  

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Ratings</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('admin/rating')}}" >Add Ratings</a>
                <a class="collapse-item" href="{{url('admin/ratingtable')}}">Edit Ratings</a>
            </div>
        </div>
    </li>

<!-- Nav Item - Utilities Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseCourses"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Courses</span>
        </a>
        <div id="collapseCourses" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createcourses/')}}" >Add Courses</a>
                <a class="collapse-item" href="{{url('/admin/coursestable/')}}">Edit Courses</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->

      <!--destination  -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapsedestination"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Destination</span>
        </a>
        <div id="collapsedestination" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createdestination/')}}" >Add Destination</a>
                <a class="collapse-item" href="{{url('/admin/destinationtable/')}}">Edit Destination</a>
            </div>
        </div>
    </li>
     <!-- end destination -->


      <!--blog  -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseblog"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Blog</span>
        </a>
        <div id="collapseblog" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createblog/')}}" >Add Blogs</a>
                <a class="collapse-item" href="{{url('/admin/blogtable/')}}">Edit Blogs</a>
            </div>
        </div>
    </li>
     <!-- end blog -->



      <!--instructor  -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseinstructor"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Instructor</span>
        </a>
        <div id="collapseinstructor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createinstructor/')}}" >Add Instructor</a>
                <a class="collapse-item" href="{{url('/admin/instructortable/')}}">Edit Instructor</a>
            </div>
        </div>
    </li>
     <!-- end instructor -->


      <!--banner  -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapsebanner"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Banner</span>
        </a>
        <div id="collapsebanner" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createbanner/')}}" >Add Banner</a>
                <a class="collapse-item" href="{{url('/admin/bannertable/')}}">Edit Banner</a>
            </div>
        </div>
    </li>
     <!-- end banner -->


      <!--branch -->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapsebranch"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Branch</span>
        </a>
        <div id="collapsebranch" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createbranch/')}}" >Add Branch</a>
                <a class="collapse-item" href="{{url('/admin/branchtable/')}}">Edit Branch</a>
            </div>
        </div>
    </li>
     <!-- end branch -->


      <!--division-->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapsedivision"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Division</span>
        </a>
        <div id="collapsedivision" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createdivision/')}}" >Add Division</a>
                <a class="collapse-item" href="{{url('/admin/divisiontable/')}}">Edit Division</a>
            </div>
        </div>
    </li>
     <!-- end division-->

      <!--meta-->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapsemeta"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Meta</span>
        </a>
        <div id="collapsemeta" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/meta/')}}" >Add Meta</a>
                <a class="collapse-item" href="{{url('/admin/metatable')}}">Edit Meta</a>
            </div>
        </div>
    </li>
     <!-- end meta-->

       <!--service-->

    <li class="nav-item">
        <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseservice"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Service</span>
        </a>
        <div id="collapseservice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{url('/admin/createservice/')}}" >Add service</a>
                <a class="collapse-item" href="{{url('/admin/servicetable/')}}">Edit service</a>
            </div>
        </div>
    </li>
     <!-- end service-->






    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    


</ul>
<!-- End of Sidebar -->
