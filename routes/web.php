<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IkuController;

use App\Http\Controllers\BidangUrusanController;
use App\Http\Controllers\UrusanController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SubKegiatanController;

use App\Http\Controllers\VisiController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\SasaranController;

use App\Http\Controllers\ProyekPrioritasController;
use App\Http\Controllers\ProyekSpmController;

use App\Http\Controllers\PokirController;
use App\Http\Controllers\AsmasController;
use App\Http\Controllers\PdController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::prefix('usulan')->group(function(){
    Route::resource('asmas', AsmasController::class);
    Route::resource('pokir', PokirController::class);
    Route::resource('pd', PdController::class);    
});

Route::resource('iku', IkuController::class);

Route::resource('urusan', UrusanController::class);
Route::resource('bidang', BidangUrusanController::class);
Route::resource('program', ProgramController::class);
Route::resource('kegiatan', KegiatanController::class);
Route::resource('sub', SubKegiatanController::class);

Route::resource('visi', VisiController::class);
Route::resource('misi', MisiController::class);
Route::resource('tujuan', TujuanController::class);
Route::resource('sasaran', SasaranController::class);


Route::resource('proyekprioritas', ProyekPrioritasController::class);
Route::resource('proyekspm', ProyekSpmController::class);

