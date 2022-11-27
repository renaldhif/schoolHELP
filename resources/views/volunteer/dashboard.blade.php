<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School HELP</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Data Tables CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <img src="{{ asset('img\logo.png') }}" alt="school help logo" height="64" width="64">
                <div class="sidebar-brand-text mx-2">SchoolHELP</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-solid fa-home"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading mt-3">
                Menu
            </div>

            <!-- Nav Item - Add School -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-solid fa-school"></i>
                    <span>View Request History</span>
                </a>
            </li>

            {{-- <!-- Nav Item - Add School -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-solid fa-user-plus"></i>
                    <span>Add School Administrator</span>
                </a>
            </li>

            <!-- Nav Item - Add School -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-solid fa-scroll"></i>
                    <span>View All Registered School</span>
                </a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('sbadmin/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Welcome, {{ Auth::user()->name }}!</h1>

                    <!-- Data Table of Request -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Request Lists</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="mb-4">Filter</h4>
                            <div class="row">
                                <!-- Select School Filter -->
                                <div class="col-md-4">
                                    <label>
                                        <strong> School </strong>
                                    </label>
                                    <select class="form-control mb-4" id="selectschool" name="school_id">
                                        <option value=""></option>
                                        @foreach ($schools as $school)
                                        <option value="{{ $school->school_name }}">{{ $school->school_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- End of Select School Filter -->

                                <!-- Select City Filter -->
                                <div class="col-md-4">
                                    <label>
                                        <strong> City </strong>
                                    </label>
                                    <select class="form-control mb-4" id="selectcity" name="school_city">
                                        <option value=""></option>
                                        @foreach ($schools as $school)
                                        <option value="{{ $school->school_city }}">{{ $school->school_city }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- End of Select City Filter -->

                                <!-- Select Request Date Filter -->
                                {{-- <!-- Pickdate -->
                                <div class="col-md-4">
                                    <label>
                                        <strong> Request Date </strong>
                                    </label>
                                    <input type="date" class="form-control mb-4" id="selectdate" name="request_date">
                                </div> --}}

                                <!-- By Available Request Date -->
                                <!-- *UPDATE: Multiple date, dont use this method -->
                                <div class="col-md-4">
                                    <label>
                                        <strong> Request Date </strong>
                                    </label>
                                    <select class="form-control mb-4" id="selectdate" name="request_date">
                                        <option value=""></option>
                                        @foreach ($requests as $request)
                                        <option value="{{ $request->request_date }}">{{ $request->request_date }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <!-- End of Select Request Date Filter -->
                                </div>

                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Status</th>
                                                <th>Request Date</th>
                                                <th>Description</th>
                                                <th>School Name</th>
                                                <th>School City</th>
                                                <th>View More</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <th>ID</th>
                                            <th>Status</th>
                                            <th>Request Date</th>
                                            <th>Description</th>
                                            <th>School Name</th>
                                            <th>School City</th>
                                            <th>View More</th>
                                        </tfoot>
                                        <tbody>
                                            @foreach($requests as $data)
                                            <tr class="item{{ $data->id }}">
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->request_status }}</td>
                                                <td>{{ $data->request_date }}</td>
                                                <td>{{ $data->description }}</td>
                                                <td>{{ $data->school->school_name}}</td>
                                                <td>{{ $data->school->school_city }}</td>
                                                <td>
                                                    <button class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#modalViewDetailRquest{{ $data->id }}"><i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>Detail</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; 2022 | All Rights Reserved
                                <br>
                                Developed with ❤️ for BIT216 - Software Engineering Principles HELP University
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- view detail request modal -->
        @foreach($requests as $data)
        <div class="modal fade" id="modalViewDetailRquest{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="modalViewDetailRquest{{ $data->id }}Label" aria-hidden="true">
            <div class="modal-dialog col-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalViewDetailRquest{{ $data->id }}Label">Request Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-left">
                        <table>
                            <tbody>
                                <tr>
                                    <td style="vertical-align: top">Request ID</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->id }}</td>
                                </tr>

                                <tr>
                                    <td style="vertical-align: top">Request Date</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->request_date }}</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top">Request Status</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->request_status }}</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top">School Name</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->school->school_name }}</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top">School City</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->school->school_city }}</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top">Request Description</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->description }}</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top">Request Type</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{$request->resource_category ? "Resource" : "Tutorial"}}</td>
                                </tr>
                                @if($data->student_level != null)
                                <tr>
                                    <td style="vertical-align: top">Proposed Date</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->proposed_date }}</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top">Student Level</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->student_level }}</td>
                                </td>
                                <tr>
                                    <td style="vertical-align: top">Student Number</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->student_number }}</td>
                                </tr>
                                @else
                                <tr>
                                    <td style="vertical-align: top">Resource Category</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->resource_category }}</td>
                                </tr>

                                <tr>
                                    <td style="vertical-align: top">Resource Quantity</td>
                                    <td style="vertical-align: top">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td style="vertical-align: top">{{ $data->resource_quantity }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-block">Make an Offer</button>
                      </div>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="/login">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{('sbadmin/js/sb-admin-2.min.js')}}"></script>

        <!-- Data Tables JS CDN -->
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <!-- Data Tables Bootstrap -->
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Importing the JS file -->
        <script src="{{asset('js/script.js')}}"></script>
</body>

</html>
