<?php

use App\Models\Pelapor;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PencarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelapor = DB::table('pelapor')->paginate(5);
        return view('cari.index', compact('pelapor'));
    }

    public function search(){
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
        return view('cari.index', compact('pelapor'))->with('i', (request()->input('page', 1) - 1) * 5);
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