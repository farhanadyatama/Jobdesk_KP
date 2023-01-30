<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\PembangunanExportController;
use App\Http\Controllers\DashboardReservasiController;
use App\Http\Controllers\DashboardPembangunanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// tampilan depan
Route::get('/struktur_organisasi', function () {
    return view('frontend.struktur_organisasi');
});

Route::get('/informasi', function () {
    return view('frontend.informasi');
});

Route::get('/', function () {
    return view('frontend.index');
});


// login controller
Route::get('/login.login',  [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login.login',  [LoginController::class, 'authenticate']);
Route::post('/logout',  [LoginController::class, 'logout']);

// register controller
Route::get('/register',  [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',  [RegisterController::class, 'store']);

// preservasi backend
Route::resource('/dashboard/preservasi', DashboardReservasiController::class)->middleware('auth');
Route::get('/export/excels', [DashboardReservasiController::class, 'export'])->middleware('auth');


// pembangunan backend
Route::resource('/dashboard/pembangunan', DashboardPembangunanController::class)->middleware('auth');
Route::get('/export/excel', [DashboardPembangunanController::class, 'export'])->middleware('auth');


// dashboard controller
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// })->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// user backend
Route::get('/dashboard/user',  [UserController::class, 'index'])->middleware('admin');


// Route::get('/dashboard',  [DashboardController::class, 'index'])->middleware('auth');


// Route::get('/login.login', function () {
//     return view('login.login');
// });