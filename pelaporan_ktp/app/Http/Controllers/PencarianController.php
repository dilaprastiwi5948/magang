<?php

use App\Models\Pelapor;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PencarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cari.index');
    }

    public function search(){
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian
            $datas= Pelapor::where('nik_pelapor', 'like', "%".$request->search."%")
            ->orwhere('jenis_pelaporan', 'like', "%".$request->search."%")
            ->orwhere('nama', 'like', "%".$request->search."%")
            ->orwhere('tanggal_lahir', 'like', "%".$request->search."%")
            ->orwhere('alamat', 'like', "%".$request->search."%")
            ->orwhere('kelurahan', 'like', "%".$request->search."%")
            ->orwhere('kecamatan', 'like', "%".$request->search."%")
            ->orwhere('kota', 'like', "%".$request->search."%")
            ->orwhere('pengajuan', 'like', "%".$request->search."%")
            ->orwhere('keterangan', 'like', "%".$request->search."%")
            ->paginate();
        } else { // Pemilihan jika tidak melakukan pencarian
            //fungsi eloquent menampilkan data menggunakan pagination
            $datas= Pelapor::paginate(5); // Pagination menampilkan 5 data
        }
        return view('',compact('datas'))->with('i',(request()->input('datas',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
