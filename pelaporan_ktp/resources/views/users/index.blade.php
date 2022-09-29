<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>User Profile</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong></i> Pelaporan KTP</strong></a>
                <div id="sideNav" href="">
                    <i class="fa fa-bars icon"></i>
                </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href={{ route('users.index') }}><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->

        <nav class="navbar-default navbar-side" role="navigation">

            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href={{ route('dashboard.index') }}><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a class="menu" href={{ route('pelaporan.create') }}><i class="fa fa-fw fa-file"></i>Registrasi
                            Pelaporan</a>
                    </li>
                    {{-- <li>
                        <a class="menu" href="pelaporanLD.html"><i class="fa fa-fw fa-file"></i>Pelaporan Luar Daerah</a>
                    </li> --}}
                    <li>
                        <a class="menu" href={{ route('pelaporan.index') }}><i class="fa fa-fw fa-table"></i>Data
                            Pencetakan</a>
                    </li>
                    <li>
                        <a class="menu" href={{ route('cari.index') }}><i class="fa fa-fw fa-search"></i>Pencarian Data
                            Pencetakan</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    User Profile
                </h1>
                <ol class="breadcrumb">
                    <li><a href={{ route('dashboard.index') }}>Dashboard</a></li>
                    <li class="active">User Profile</li>
                </ol>

                <div class="row">
                    <div class="col-xs-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Biodata Operator
                            </div>
                            <div class="panel-body">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif

                                <form>
                                    <div class="div class="col-md-12 mb-2">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationServer01">NIK</label>
                                            <input type="text" class="form-control is-valid" id="validationServer01"
                                                placeholder="NIK" value="Dummy" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationServer02">Nama</label>
                                            <input type="text" class="form-control is-valid" id="validationServer02"
                                                placeholder="Nama" value="Dummy" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationServer03">Jabatan</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer03"
                                                placeholder="Jabatan" value="Dummy" required>
                                        </div>
                                    </div>
                                </form>

                                <!--End Advanced Tables -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>