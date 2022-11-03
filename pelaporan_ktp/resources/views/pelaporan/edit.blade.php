@extends('pelaporan.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 60rem;">
            <div class="card-header text-center">
                <h3>Edit Data Pegawai</h3>
            </div>
            <div class="card-body"> @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('pelaporan.update', $Pelapor->nik_pelapor) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group col-md-12 mb-2">
                        <label for="jenis_pelaporan">Jenis Pelaporan</label>
                        @error('jenis_pelaporan')
                        <div class="text text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <select class="form-control" type="jenis_pelaporan" name="jenis_pelaporan" class="form-control"
                            id="jenis_pelaporan" aria-describedby="jenis_pelaporan">
                            <option disabled value="">Pilih Jenis Pelaporan...</option>
                            <option>Dalam Daerah </option>
                            <option>Luar Daerah</option>
                        </select>
                    </div>
                    <div class="form-row col-md-12 mb-2">
                        <div class="form-group col-md-6 mb-2">
                            <label for="nik_pelapor">NIK</label>
                            @error('nik_pelapor')
                            <div class="text text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="text" name="nik_pelapor" class="form-control" id="nik_pelapor"
                                value="{{ $Pelapor->nik_pelapor}}" aria-describedby="nik_pelapor">
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label for="nama">Nama</label>
                            @error('nama')
                            <div class="text text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $Pelapor->nama }}"
                                aria-describedby="nama">
                        </div>
                    </div>
                    <div class="form-row col-md-12 mb-2">
                        <div class="form-group col-md-6 mb-2">
                            <label for="tanggal_lahir">Tanggal Tahir</label>
                            @error('tanggal_lahir')
                            <div class="text text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                value="{{ $Pelapor->tanggal_lahir }}" aria-describedby="tanggal_lahir">
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label for="alamat">Alamat</label>
                            @error('alamat')
                            <div class="text text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="alamat" name="alamat" class="form-control" id="alamat"
                                aria-describedby="alamat" value="{{ $Pelapor->alamat }}">
                        </div>
                    </div>
                    <div class="form-row col-md-12 mb-2">
                        <div class="form-group col-md-6 mb-2">
                            <label for="kelurahan">Desa / Kelurahan</label>
                            @error('kelurahan')
                            <div class="text text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="kelurahan" name="kelurahan" class="form-control" id="kelurahan"
                                aria-describedby="kelurahan" value="{{ $Pelapor->kelurahan }}">
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label for="kecamatan">Kecamatan</label>
                            @error('kecamatan')
                            <div class="text text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="kecamatan" name="kecamatan" class="form-control" id="kecamatan"
                                aria-describedby="kecamatan" value="{{ $Pelapor->kecamatan }}">
                        </div>
                    </div>
                    <div class="form-row col-md-12 mb-2">
                        <div class="form-group col-md-6 mb-2">
                            <label for="kota">Kabupaten / Kota</label>
                            @error('kota')
                            <div class="text text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="kota" name="kota" class="form-control" id="kota" aria-describedby="kota"
                                value="{{ $Pelapor->kota }}">
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label for="pengajuan">Pengajuan</label>
                            @error('pengajuan')
                            <div class="text text-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            <select type="pengajuan" name="pengajuan" class="form-control" id="pengajuan"
                                aria-describedby="pengajuan" value="{{ $Pelapor->pengajuan }}">
                                <option disabled value="">Pilih Jenis Pengajuan...</option>
                                <option>Online</option>
                                <option>Dinas</option>
                                <option>Kelurahan</option>
                                <option>MPP</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12 mb-2">
                        <label for="keterangan">Keterangan</label>
                        @error('keterangan')
                        <div class="text text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        <select type="keterangan" name="keterangan" class="form-control" id="keterangan"
                            aria-describedby="keterangan" value="{{ $Pelapor->keterangan }}">
                            <option disabled value="">Pilih Keterangan...</option>
                            <option>Rusak</option>
                            <option>Kehilangan</option>
                            <option>Pemula</option>
                            <option>Perubahan data</option>
                            <option>Paket</option>
                            <option>Surat Keterangan</option>
                        </select>
                    </div>
                    <div class="from-group col-md-12 d-grid gap-2 d-md-block">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-success" href="{{ route('pelaporan.index') }}">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection