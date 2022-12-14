<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelapor;
use Illuminate\Support\Facades\DB;
use PDF;

class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $pelapor = Pelapor::all(); // Mengambil semua isi tabel
        $pelapor = DB::table('pelapor')->paginate(5);
        // $posts = Pelapor::orderBy('nik_pelapor', 'desc')->paginate(3);
        return view('pelaporan.index', compact('pelapor'));
        // with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function pelaporanld()
    // {
    //     return view('pelaporan.pelaporanLD');
    // }

    // public function tampildata()
    // {
        
    // }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $pelapor = Pelapor::where('nama', 'like', "%" . $keyword . "%")
        ->orWhere('jenis_pelaporan', 'like', "%".$request->search."%")
            ->orWhere('nama', 'like', "%".$request->search."%")
            ->orWhere('tanggal_lahir', 'like', "%".$request->search."%")
            ->orWhere('alamat', 'like', "%".$request->search."%")
            ->orWhere('kelurahan', 'like', "%".$request->search."%")
            ->orWhere('kecamatan', 'like', "%".$request->search."%")
            ->orWhere('kota', 'like', "%".$request->search."%")
            ->orWhere('pengajuan', 'like', "%".$request->search."%")
            ->orWhere('keterangan', 'like', "%".$request->search."%")
            ->orWhere('tanggal', 'like', "%".$request->search."%")->paginate(5);
        return view('pelaporan.index', compact('pelapor'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelaporan.create');
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
            'nik_pelapor' => ['required', 'unique:pelapor', 'min:16', 'max:16', 'numeric'],
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
        return redirect()->route('pelaporan.index')
            ->with('success', 'Data Berhasil Ditambahkan'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik_pelapor)
    {
        //menampilkan detail data dengan menemukan/berdasarkan nik_operator 
        $Pelapor = Pelapor::find($nik_pelapor); 
        return view('pelaporan.detail', compact('Pelapor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nik_pelapor)
    {
        //menampilkan detail data dengan menemukan berdasarkan nik_operator untuk diedit
        $Pelapor = Pelapor::find($nik_pelapor); 
        return view('pelaporan.edit', compact('Pelapor'));
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
            'nik_pelapor' => ['required', 'unique:pelapor', 'min:16', 'max:16', 'numeric'],
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
        return redirect()->route('pelaporan.index') 
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
        return redirect()->route('pelaporan.index') 
            -> with('success', 'Data Berhasil Dihapus');
    }

    public function cetakpdf(){
        $pelapor = Pelapor::all();
 
    	$pdf = PDF::loadview('data_pelaporan.cetak',['pelapor'=>$pelapor]);
        return $pdf->setPaper('a4', 'landscape')->setOptions(['defaultFont' => 'serif'])->stream('laporan-data_pelaporan.pdf');
    }
}
