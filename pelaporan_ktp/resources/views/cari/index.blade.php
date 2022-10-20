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
    <title>Cari Data Cetak KTP-EL</title>
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
                        <li><a href="login"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a class="menu" href={{ route('data_pelaporan.index') }}><i class="fa fa-fw fa-file"></i>Registrasi
                            Pelaporan</a>
                    </li>
                    <li>
                        <a class="menu" href={{ route('pelaporan.index') }}><i class="fa fa-fw fa-table"></i>Data
                            Pencetakan</a>
                    </li>
                    <li>
                        <a class="active-menu" href={{ route('cari.index') }}><i
                                class="fa fa-fw fa-search"></i>Pencarian Data
                            Pencetakan</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    Pencarian Data Pencetakan KTP EL
                </h1>
                <ol class="breadcrumb">
                    <li><a href={{ route('dashboard.index') }}>Dashboard</a></li>
                    <li class="active">Cari Data</li>
                </ol>

                <div class="row">
                    <div class="col-xs-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Cari Data Cetak KTP-EL
                            </div>
                            <div class="panel-body">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                <div class="nav navbar-top-links navbar-right">
                                    <form class="form-inline">
                                        <select class="form-control form-control-lg"
                                            aria-label=".form-select-lg example">
                                            <option selected disabled value="">Cari dengan...</option>
                                            <option value="nik">NIK</option>
                                            <option value="nama">Nama</option>
                                            <option value="nama">Kelurahan</option>
                                            <option value="tanggal">Kecamatan</option>
                                            <option value="tanggal">Kabupaten</opion>
                                            <option value="tanggal">Tgl_cetak</option>
                                        </select>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control" id="search" name="search"
                                                placeholder="Search...">
                                        </div>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <button type="submit" class="btn btn-primary mb-2"><i
                                                    class="fa fa-fw fa-search"></i></button>
                                        </div>
                                </div>
                                </form>
                                <div class="card">
                                    {{-- filter:end --}}
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>NIK</th>
                                            <th>Jenis Pelaporan</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Kabupaten/Kota</th>
                                            <th>Pengajuan</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal</th>
                                            <th width="280px">Action</th>
                                        </tr>

                                        @foreach ($pelapor as $Pelapor)
                                        <tr>
                                            <td>{{ $Pelapor->nik_pelapor }}</td>
                                            <td>{{ $Pelapor->jenis_pelaporan }}</td>
                                            <td>{{ $Pelapor->nama }}</td>
                                            <td>{{ $Pelapor->tanggal_lahir }}</td>
                                            <td>{{ $Pelapor->alamat }}</td>
                                            <td>{{ $Pelapor->kelurahan }}</td>
                                            <td>{{ $Pelapor->kecamatan }}</td>
                                            <td>{{ $Pelapor->kota }}</td>
                                            <td>{{ $Pelapor->pengajuan }}</td>
                                            <td>{{ $Pelapor->keterangan }}</td>
                                            <td>{{ $Pelapor->tanggal }}</td>
                                            <td>
                                                <form action="{{ route('pelaporan.destroy',$Pelapor->nik_pelapor) }}"
                                                    method="POST">
                                                    <a class="btn btn-info"
                                                        href="{{ route('pelaporan.show',$Pelapor->nik_pelapor) }}">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('pelaporan.edit',$Pelapor->nik_pelapor) }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    {{-- <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                                                    --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </table>
                                </div>

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