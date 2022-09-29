<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataCetakController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('layouts.Layout');
});

// Route::resource('operator', MahasiswaController::class);
// Route::get('/pelaporandd', [PelaporanController::class, 'pelaporandd']);
// Route::get('/pelaporanld', [PelaporanController::class, 'pelaporanld']);
// Route::get('/datapelaporan', [DataCetakController::class, 'dataPelaporan']);
Route::resource('pelaporan', PelaporanController::class);
//Route search
Route::get('/search', [PelaporanController::class, 'search'])->name('search');

//login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

//register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//data_pelaporan

//cari_data_cetak
Route::resource('cari', PencarianController::class);
Route::resource('users', UsersController::class);
Route::resource('dashboard', DashboardController::class);