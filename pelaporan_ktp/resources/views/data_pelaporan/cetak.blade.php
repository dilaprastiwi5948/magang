<h3>
    <center>Dispendukcapil Kota Malang</center>
</h3>
<hr />
<h3>
    <center>Laporan Data Pelaporan</center>
</h3>
<table border="1" cellspacing="0" cellpadding="4">
    <thead>
        <tr>
            <th scope="col">NIK</th>
            <th scope="col">Jenis Pelaporan</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kabupaten/Kota</th>
            <th scope="col">Pengajuan</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tanggal Registrasi</th>
            <th scope="col">Operator</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pelapor as $Pelapor)
        <tr>
            <th scope="row">{{ $Pelapor->nik_pelapor }}</th>
            <td>{{ $Pelapor->jenis_pelaporan }}</td>
            <td>{{ $Pelapor->nama }}</td>
            <td>{{ $Pelapor->alamat }}</td>
            <td>{{ $Pelapor->kelurahan }}</td>
            <td>{{ $Pelapor->kecamatan }}</td>
            <td>{{ $Pelapor->kota }}</td>
            <td>{{ $Pelapor->pengajuan }}</td>
            <td>{{ $Pelapor->keterangan }}</td>
            <td>{{ $Pelapor->tanggal }}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>