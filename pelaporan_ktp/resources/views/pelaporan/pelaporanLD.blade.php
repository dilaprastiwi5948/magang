@extends('layouts.Layout')
@section('content')
            <div class="row">
                <div class="col-xs-12">					
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pilihjenis">Jenis Pelaporan</label>
                                    <select class="form-control" id="pilihjenis">
                                        <option >Luar Daerah</option>
                                      </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputnik">NIK</label>
                                    <input type="input" class="form-control" id="inputnik" placeholder=1234644>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputnama">Nama</label>
                                    <input type="input" class="form-control" id="inputnama" placeholder="Jane Doe">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputlahir">Tempat Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="inputlahir">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputalamat">Alamat</label>
                                    <input type="input" class="form-control" id="inputalamat" placeholder="Jl. Sesama">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputdesa">Desa / Kelurahan</label>
                                    <input type="input" class="form-control" id="inputdesa" placeholder="Klojen">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputkecamatan">Kecamatan</label>
                                    <input type="input" class="form-control" id="inputkecamatan" placeholder="Pandanwangi">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputkabupaten">Kabupaten</label>
                                    <input type="input" class="form-control" id="inputkabupaten" placeholder="Malang">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pilihpengajuan">Pengajuan</label>
                                    <select class="form-control" id="pilihpengajuan">
                                        <option>Online</option>
                                        <option>Dinas</option>
                                        <option>Kelurahan</option>
                                        <option>MPP</option>
                                      </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputketerangan">Keterangan</label>
                                    <select class="form-control" id="inputketerangan">
                                        <option>Rusak</option>
                                        <option>Kehilangan</option>
                                        <option>Pemula</option>
                                        <option>Perubahan data</option>
                                        <option>Paket</option>
                                        <option>Surat Keterangan</option>
                                      </select>
                                </div>
                                
                                <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
