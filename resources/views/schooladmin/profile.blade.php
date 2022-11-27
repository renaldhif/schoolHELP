<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School HELP - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Sweet Alert -->
    @include('sweetalert::alert')
    
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('schooladmin_dashboard')}}">
                <img src="{{ asset('img\logo.png') }}" alt="school help logo" height="64" width="64">
                <div class="sidebar-brand-text mx-2">SchoolHELP</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('schooladmin_dashboard')}}">
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
                <a class="nav-link collapsed" href="{{ route('schooladmin_submitrequest')}}">
                    <i class="fas fa-fw fa-solid fa-file-upload"></i>
                    <span>Submit Request</span>
                </a>
            </li>

            <!-- Nav Item - Add School -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('schooladmin_reviewoffers')}}">
                    <i class="fas fa-fw fa-solid fa-scroll"></i>
                    <span>Review Offers</span>
                </a>
            </li>

            <!-- Nav Item - Add School -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('schooladmin_viewallrequest')}}">
                    <i class="fas fa-fw fa-solid fa-database"></i>
                    <span>View All Request</span>
                </a>
            </li>

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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('sbadmin/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- Profile -->
                                <a class="dropdown-item" href="{{ Route('schooladmin_profile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <!-- Change password -->
                                <a class="dropdown-item" href="{{ route('changepassword') }}">
                                    <i class="fas fa-solid fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <!-- Logout -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">School Administrator Profile</h1>

                    <div class="card text-center">
                        <!-- Card Header started here -->
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" id="myTab">
                                <li class="nav-item">
                                    <a href="#adminprofile" class="nav-link active" data-bs-toggle="tab">Admin Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#updateprofile" class="nav-link" data-bs-toggle="tab">Update Admin Profile</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Card Header ended here -->

                        <!-- Card Body started here -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Admin Profile Tab started here -->
                                <div class="tab-pane fade show active" id="adminprofile">
                                    <div class="row text-left">
                                        <div class="col-md-2">
                                            <img class="img-profile rounded-circle" src="{{asset('sbadmin/img/undraw_profile.svg')}}">
                                        </div>
                                        <div class="col-md-10">
                                            <h3>{{ Auth::user()->name }}</h3>
                                            <p>{{ Auth::user()->position}}</p>
                                            <hr>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>School ID</td>
                                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                        <td>{{Auth::user()->school_id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>School Name</td>
                                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                        <td>
                                                            {{(Auth::user()->school->school_name)}}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Full Name</td>
                                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                        <td>{{Auth::user()->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                        <td>
                                                            {{(Auth::user()->email)}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                        <td>
                                                            0{{(Auth::user()->phone_number)}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Staff ID</td>
                                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                        <td>
                                                            {{(Auth::user()->staff_id)}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Position</td>
                                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                        <td>
                                                            {{(Auth::user()->position)}}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Admin Profile Tab ended here -->

                                <!-- Update Admin profile Tab started here -->
                                <div class="tab-pane fade text-left" id="updateprofile">
                                    
                                        <form name="updateprofile" method="post" action="{{ route('schooladmin_editprofile') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" id="name" name="name" class="form-control" required="" placeholder="Full Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Email</label>
                                                <input type="text" id="email" name="email" class="form-control" required="" placeholder="admin@gmail.com">
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Phone Number</label>
                                                <input type="text" id="phone_number" name="phone_number" class="form-control" required="" placeholder="081234567890">
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Staff ID</label>
                                                <input type="text" id="staff_id" name="staff_id" class="form-control" required="" placeholder="SA-1">
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Position</label>
                                                <input type="text" id="position" name="position" class="form-control" required="" placeholder="IT Staff Manager">
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-block" value="update">Update</button>
                                        </form>    

                                </div>
                                <!-- Update Admin Profile Tab ended here -->
                            </div>
                        </div>
                        <!-- Card Body ended here -->
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
    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 

</body>

</html>
