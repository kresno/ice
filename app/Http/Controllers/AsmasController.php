<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pokir;

class AsmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = DB::table('data_asmas')->select('tahun', 'kode', 'pengusul', 'profil', 'urusan', 'usulan', 'permasalahan', 'alamat', 'kecamatan', 'desa', 'pd_awal' )->get();
        $usulanterbanyak = DB::table('data_asmas')->selectRaw('count(id) as banyak, kecamatan')->where('urusan', '!=', 'keuangan')->groupBy('kecamatan')->orderBy('banyak', 'DESC')->limit(5)->get();
        $masalahterbanyak = DB::table('data_asmas')->selectRaw('count(id) as banyak, urusan')->where('urusan', '!=', 'keuangan')->groupBy('urusan')->orderBy('banyak', 'DESC')->limit(5)->get();

        return view('usulan.asmas.index', compact('items', 'usulanterbanyak', 'masalahterbanyak'));
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
