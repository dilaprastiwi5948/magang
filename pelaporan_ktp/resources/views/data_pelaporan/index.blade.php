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
    <title>Data Pelaporan</title>
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
                        <li><a href="{{ route('users.index') }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                        <a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li>
                        <a class="active-menu" href="{{ route('data_pelaporan.index') }}"><i
                                class="fa fa-fw fa-file"></i>Registrasi
                            Pelaporan</a>
                    </li>
                    <li>
                        <a class="menu" href="{{ route('pelaporan.index') }}"><i class="fa fa-fw fa-table"></i>Data
                            Pencetakan</a>
                    </li>
                    <li>
                        <a class="menu" href="{{ route('cari.index') }}"><i class="fa fa-fw fa-search"></i>Pencarian
                            Data
                            Pencetakan</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    Registrasi Pelaporan KTP Oleh Operator
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="active">Registrasi Pelaporan</li>
                </ol>

                <div class="row">
                    <div class="col-xs-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Registrasi Pelapor
                            </div>
                            <div class="panel-body">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                <div class="table-responsive">
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                    <form method="POST" action="{{ route('pelaporan.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12 mb-2">
                                            <label for="jenis_pelaporan">Jenis Pelaporan</label>
                                            @error('jenis_pelaporan')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <select type="jenis_pelaporan" name="jenis_pelaporan" class="form-control"
                                                id="jenis_pelaporan" aria-describedby="jenis_pelaporan"
                                                value="{{old('jenis_pelaporan')}}">
                                                <option selected disabled value="">Pilih Jenis Pelaporan...
                                                </option>
                                                <option value="Dalam Daerah">Dalam Daerah</option>
                                                <option value="Luar Daerah">Luar Daerah</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="nik_pelapor">NIK</label>
                                            @error('nik_pelapor')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <input type="text" name="nik_pelapor"
                                                class="form-control @error('nik_pelapor') is-invalid @enderror"
                                                id="nik_pelapor" aria-describedby="nik_pelapor"
                                                placeholder="Masukkan NIK">
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="nama">Nama</label>
                                            @error('nama')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <input type="Nama" name="nama"
                                                class="form-control  @error('nama') is-invalid @enderror"" id=" nama"
                                                aria-describedby="nama" placeholder="Masukkan Nama"
                                                value="{{old('nama')}}">
                                        </div>


                                        <div class="col-md-6 mb-2">
                                            <label for="tanggal_lahir">Tanggal Tahir</label>
                                            @error('tanggal_lahir')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <input type="date" name="tanggal_lahir"
                                                class="form-control  @error('tanggal_lahir') is-invalid @enderror"
                                                id="tanggal_lahir" aria-describedby="tanggal_lahir">
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="alamat">Alamat</label>
                                            @error('alamat')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <input type="alamat" name="alamat"
                                                class="form-control  @error('alamat') is-invalid @enderror" id="alamat"
                                                aria-describedby="alamat" placeholder="Masukkan Alamat"
                                                value="{{old('alamat')}}">
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="kelurahan">Desa / Kelurahan</label>
                                            @error('kelurahan')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <input type="kelurahan" name="kelurahan"
                                                class="form-control  @error('kelurahan') is-invalid @enderror"
                                                id="kelurahan" aria-describedby="kelurahan"
                                                placeholder="Masukkan Kelurahan" value="{{old('kelurahan')}}">
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="kecamatan">Kecamatan</label>
                                            @error('kecamatan')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <input type="kecamatan" name="kecamatan"
                                                class="form-control  @error('kecamatan') is-invalid @enderror"" id="
                                                kecamatan" aria-describedby="kecamatan" placeholder="Masukkan Kecamatan"
                                                value="{{old('kecamatan')}}">
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="kota">Kabupaten / Kota</label>
                                            @error('kota')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <input type="kota" name="kota"
                                                class="form-control  @error('kota') is-invalid @enderror"" id=" kota"
                                                aria-describedby="kota" placeholder="Masukkan Kabupaten/Kota"
                                                value="{{old('kota')}}">
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <label for="pengajuan">Jenis Pengajuan</label>
                                            @error('pengajuan')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <select type="pengajuan" name="pengajuan"
                                                class="form-control  @error('pengajuan') is-invalid @enderror"
                                                id="pengajuan" aria-describedby="pengajuan"
                                                value="{{old('pengajuan')}}">
                                                <option selected disabled value="">Pilih Jenis Pengajuan...
                                                </option>
                                                <option>Online</option>
                                                <option>Dinas</option>
                                                <option>Kelurahan</option>
                                                <option>MPP</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <label for="keterangan">Keterangan</label>
                                            @error('keterangan')
                                            <div class="text text-danger mt-2">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <select type="keterangan" name="keterangan"
                                                class="form-control  @error('keterangan') is-invalid @enderror""
                                                id=" keterangan" aria-describedby="keterangan"
                                                value="{{old('keterangan')}}">
                                                <option selected disabled value="">Pilih Keterangan...</option>
                                                <option value="Rusak">Rusak</option>
                                                <option value="Kehilangan">Kehilangan</option>
                                                <option value="Pemula">Pemula</option>
                                                <option value="Perubahan Data">Perubahan data</option>
                                                <option value="Paket">Paket</option>
                                                <option value="Surat Keterangan">Surat Keterangan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <br>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> |
                                                Simpan</button>
                                        </div>
                                    </form>
                                    {{$pelapor->onEachSide(1)->links()}}
                                </div>

                            </div>
                            </table>
                        </div>
                        <!--End Advanced Tables -->
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