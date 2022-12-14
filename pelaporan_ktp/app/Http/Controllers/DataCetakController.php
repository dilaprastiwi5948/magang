<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelapor;
use Illuminate\Support\Facades\DB;

class DataCetakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelapor = DB::table('pelapor')->paginate(5);
        return view('data_pelaporan.index',  compact('pelapor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelapor = DB::table('pelapor')->paginate(5);
        return view('data_pelaporan.create', compact('pelapor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([ 
            'nik_pelapor' => ['required', 'unique:pelapor'],
            'jenis_pelaporan' => 'required', 
            'nama' => 'required', 
            'tanggal_lahir' => 'required', 
            'alamat' => 'required', 
            'kelurahan' => 'required', 
            'kecamatan' => 'required', 
            'kota' => 'required', 
            'pengajuan' => 'required', 
            'keterangan' => 'required',
        ]);
        //fungsi eloquent untuk menambah data 
        Pelapor::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('data_pelaporan.create')
            ->with('success', 'Data Berhasil Ditambahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        $Pelapor = Pelapor::find($nik_pelapor); 
        return view('data_pelaporan.detail', compact('Pelapor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nik_pelapor)
    {
        $Pelapor = Pelapor::find($nik_pelapor); 
        return view('data_pelaporan.edit', compact('Pelapor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik_pelapor)
    {
        //melakukan validasi data
        $request->validate([ 
            'nik_pelapor' => 'required', 
            'jenis_pelaporan' => 'required', 
            'nama' => 'required', 
            'tanggal_lahir' => 'required', 
            'alamat' => 'required', 
            'kelurahan' => 'required', 
            'kecamatan' => 'required', 
            'kota' => 'required', 
            'pengajuan' => 'required', 
            'keterangan' => 'required', 
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita 
        Pelapor::find($nik_pelapor)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('data_pelaporan.index') 
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik_pelapor)
    {
         //fungsi eloquent untuk menghapus data 
         Pelapor::find($nik_pelapor)->delete(); 
         return redirect()->route('data_pelaporan.index') 
             -> with('success', 'Data Berhasil Dihapus');
    }
}
