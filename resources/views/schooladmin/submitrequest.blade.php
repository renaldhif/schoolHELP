<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School HELP - Submit Request</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

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
                                <a class="dropdown-item" href="{{ Route('schooladmin_profile') }}">
                                    <i
                                        class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"
                                    ></i>
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
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 md-2 text-gray-800">Submit Request</h1>
                    </div>
                    <!-- Yellow Alert -->
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Please read this message before submitting a request!</h4>
                        <hr>
                        <p class="mb-0">- If {{ Auth::user()->name }} want to request for a tutorial, please select <strong>Request for Tutorial Tab</strong> in the tabs panel of the card below</p>
                        <p class="mb-0">- If {{ Auth::user()->name }} want to request for a resource, please select <strong>Request for Resource Tab</strong> in the tabs panel of the card below</p>
                    </div>

                    <!-- Card with navigation started here -->
                    <div class="card text-center">
                        <div class="card text-center">
                            <!-- Card Header started here -->
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" id="myTab">
                                    <li class="nav-item">
                                        <a href="#tutorialrequest" class="nav-link active" data-bs-toggle="tab">Request for Tutorial</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#resourcerequest" class="nav-link" data-bs-toggle="tab">Request for Resource</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Card Header ended here -->

                            <!-- Card Body started here -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- Tutorial Request Tab started here -->
                                    <div class="tab-pane fade show active" id="tutorialrequest">
                                        <form method="POST" action="{{ route('schooladmin_submittutorrequest') }}">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="tutorialdescription" class="col-md-3 col-form-label text-md-left">{{ __('Description') }}</label>
                                                <div class="col">
                                                    <textarea id="tutorialdescription" class="form-control @error('tutorialdescription') is-invalid @enderror" name="tutorialdescription" value="{{ old('tutorialdescription') }}" required autocomplete="tutorialdescription" autofocus placeholder="Input the description of the request here..." maxlength="255"></textarea>
                                                    @error('tutorialdescription')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="proposeddatetime" class="col-md-3 col-form-label text-md-left">{{ __('Proposed Date and Time') }}</label>
                                                <div class="col">
                                                    <input id="proposeddatetime" type="datetime-local" class="form-control @error('proposeddatetime') is-invalid @enderror" name="proposeddatetime" value="{{ old('proposeddatetime') }}" required autocomplete="proposeddatetime">
                                                    @error('proposeddate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="studentlevel" class="col-md-3 col-form-label text-md-left">{{ __('Student Level') }}</label>
                                                <div class="col">
                                                    <select id="studentlevel" class="form-control @error('studentlevel') is-invalid @enderror" name="studentlevel" value="{{ old('studentlevel') }}" required autocomplete="studentlevel">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Elementary School</option>
                                                        <option value="2">Junior High School</option>
                                                        <option value="3">Senior High School</option>
                                                    </select>
                                                    @error('studentlevel')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="numberofexpectedstudent" class="col-md-3 col-form-label text-md-left">{{ __('Number of Expected Students') }}</label>
                                                <div class="col">
                                                    <input id="numberofexpectedstudent" type="number" class="form-control @error('numberofexpectedstudent') is-invalid @enderror" name="numberofexpectedstudent" value="{{ old('numberofexpectedstudent') }}" required autocomplete="numberofexpectedstudent" autofocus placeholder="Input the number of expected students...">
                                                    @error('numberofexpectedstudent')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Submit Request') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Tutorial Request Tab ended here -->

                                    <!-- Resource Request Tab started here -->
                                    <div class="tab-pane fade" id="resourcerequest">
                                        <form method="POST" action="{{ route('schooladmin_submitresourceresquest') }}">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="resourcedescription" class="col-md-3 col-form-label text-md-left">{{ __('Description') }}</label>
                                                <div class="col">
                                                    <textarea id="resourcedescription" type="text" class="form-control @error('resourcedescription') is-invalid @enderror" name="resourcedescription" value="{{ old('Resource Description') }}" required autocomplete="Resource Description" autofocus placeholder="Input the description of the request here..." maxlength="255"></textarea>
                                                    @error('resourcedescription')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="resourcetype" class="col-md-3 col-form-label text-md-left">{{ __('Resource Type') }}</label>
                                                <div class="col">
                                                    <select id="resourcetype" class="form-control @error('resourcetype') is-invalid @enderror" name="resourcetype" value="{{ old('resourcetype') }}" required autocomplete="resourcetype">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Mobile Device</option>
                                                        <option value="2">Personal Computer</option>
                                                        <option value="3">Networking Equipment</option>
                                                    </select>
                                                    @error('resourcetype')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="numberrequired" class="col-md-3 col-form-label text-md-left">{{ __('Number of Required Resource') }}</label>
                                                <div class="col">
                                                    <input id="numberrequired" type="number" class="form-control @error('numberrequired') is-invalid @enderror" name="numberrequired" value="{{ old('numberrequired') }}" required autocomplete="numberrequired" autofocus placeholder="Input the number of required resource...">
                                                    @error('numberrequired')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </form>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-3">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Submit Request') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Resource Request Tab ended here -->
                                </div>
                            </div>
                            <!-- Card Body ended here -->

                        </div>
                    </div>
                    <!-- Card with navigation ended here -->


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
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
