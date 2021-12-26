<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Misi;

class HomeController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        $items = DB::table('misi')->select('id', 'nama', 'urutan')->get();

        return view('misi.index', compact('items'));
    }
}
