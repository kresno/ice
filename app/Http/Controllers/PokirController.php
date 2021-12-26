<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pokir;

class PokirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = DB::table('data_pokir')->select('tahun', 'kode', 'pengusul', 'fraksi', 'urusan', 'usulan', 'permasalahan', 'alamat', 'kecamatan', 'desa', 'koefisien', 'pd_awal' )->get();
        $usulanterbanyak = DB::table('data_pokir')->selectRaw('count(id) as banyak, pengusul')->groupBy('pengusul')->orderBy('banyak', 'DESC')->limit(5)->get();
        $masalahterbanyak = DB::table('data_pokir')->selectRaw('count(id) as banyak, urusan')->groupBy('urusan')->orderBy('banyak', 'DESC')->limit(5)->get();

        return view('usulan.pokir.index', compact('items', 'usulanterbanyak', 'masalahterbanyak'));

        //return $masalahterbanyak;
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
