<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Registrasi Pelaporan</title>
</head>

<body>


    <div class="container mt-5">

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <strong>Pelaporan KTP</strong>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href={{ route('dashboard.index') }}>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href={{ route('pelaporan.create') }}>Registrasi Pelaporan </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{ route('pelaporan.index') }}>Data Pencetakan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href={{ route('cari.index') }}>Pencarian Data</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="card">
            <div class="card-header text-center">
                <h3>Tambah Data</h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if ($message = Session::get('success')) 
                    <div class="alert alert-success"> 
                    <p>{{ $message }}</p> 
                    </div> 
                @endif
                <form method="post" action="{{ route('pelaporan.store') }}" id="myForm">
                    @csrf

                    <div class="col-md-3 mb-2">
                        <label for="jenis_pelaporan">Jenis Pelaporan</label>
                        <select type="jenis_pelaporan" name="jenis_pelaporan" class="form-control" id="jenis_pelaporan"
                            aria-describedby="jenis_pelaporan" required value="{{old('jenis_pelaporan')}}">
                            <option selected disabled value="">Pilih Jenis Pelaporan...</option>
                            <option>Dalam Daerah</option>
                            <option>Luar Daerah</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="nik_pelapor">NIK</label>
                        @error('nik_pelapor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text" name="nik_pelapor"
                            class="form-control @error('nik_pelapor') is-invalid @enderror" id="nik_pelapor"
                            aria-describedby="nik_pelapor" placeholder="Masukkan NIK">
                    </div>

                    <div class="col-md-3 mb-2">
                        <label for="nama">Nama</label>
                        <input type="Nama" name="nama" class="form-control" id="nama" aria-describedby="nama"
                            placeholder="Masukan Nama" required value="{{old('nama')}}">
                    </div>

                    <div class="col-md-3 mb-2">
                        <label for="tanggal_lahir">Tanggal Tahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                            aria-describedby="tanggal_lahir" required>
                    </div>

                    <div class="col-md-3 mb-2">
                        <label for="alamat">Alamat</label>
                        <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat"
                            placeholder="Jl. Sesama" required value="{{old('alamat')}}">
                    </div>

                    <div class="col-md-3 mb-2">
                        <label for="kelurahan">Desa / Kelurahan</label>
                        <input type="kelurahan" name="kelurahan" class="form-control" id="kelurahan"
                            aria-describedby="kelurahan" placeholder="Masukkan Kelurahan" required value="{{old('kelurahan')}}">
                    </div>

                    <div class="col-md-3 mb-2">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="kecamatan" name="kecamatan" class="form-control" id="kecamatan"
                            aria-describedby="kecamatan" placeholder="Masukkan Kecamatan" required value="{{old('kecamatan')}}">
                    </div>

                    <div class="col-md-3 mb-2">
                        <label for="kota">Kabupaten / Kota</label>
                        <input type="kota" name="kota" class="form-control" id="kota" aria-describedby="kota"
                            placeholder="Masukkan Kabupaten/Kota" required value="{{old('kota')}}">
                    </div>

                    <div class="col-md-3 mb-2">
                        <label for="pengajuan">Jenis Pengajuan</label>
                        <select type="pengajuan" name="pengajuan" class="form-control" id="pengajuan"
                            aria-describedby="pengajuan" value="{{old('pengajuan')}}">
                            <option selected disabled value="">Pilih Jenis Pengajuan...</option>
                            <option value="Online">Online</option>
                            <option value="Dinas">Dinas</option>
                            <option value="Kelurahan">Kelurahan</option>
                            <option value="MPP">MPP</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-2">
                        <label for="keterangan">Keterangan</label>
                        <select type="keterangan" name="keterangan" class="form-control" id="keterangan"
                            aria-describedby="keterangan" value="{{old('keterangan')}}">
                            <option selected disabled value="">Pilih Keterangan...</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Kehilangan">Kehilangan</option>
                            <option value="Pemula">Pemula</option>
                            <option value="Perubahan Data">Perubahan data</option>
                            <option value="Paket">Paket</option>
                            <option value="Surat Keterangan">Surat Keterangan</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>