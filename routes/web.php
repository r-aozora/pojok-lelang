<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SignupadminController;
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

// Landing Page
Route::get('/', function () {
    return view('pages.landing', [
        'title'=>'Pojok Lelang | Home'
    ]);
});

// Masyarakat
Route::get('/masyarakat/dashboard', function () {
    return view('masyarakat.dashboard', [
        'title'=>'Masyarakat | Dashboard'
    ]);
});

// Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', [
        'title'=>'Admin | Dashboard',
    ]);
});

Route::get('/admin/masyarakat', function () {
    return view('admin.data_masyarakat', [
        'title'=>'Admin | Data Masyarakat'
    ]);
});

Route::get('/admin/petugas', function () {
    return view('admin.data_petugas', [
        'title'=>'Admin | Data Petugas'
    ]);
});

Route::get('/admin/barang', function () {
    return view('admin.data_barang', [
        'title'=>'Admin | Data Barang'
    ]);
});

Route::get('/admin/masyarakat/detail', function () {
    return view('admin.detail_masyarakat', [
        'title'=>'Admin | Detail Masyarakat'
    ]);
});

Route::get('/admin/petugas/detail', function () {
    return view('admin.detail_petugas', [
        'title'=>'Admin | Detail Petugas'
    ]);
});

Route::get('/admin/barang/detail', function () {
    return view('admin.detail_barang', [
        'title'=>'Admin | Detail Barang'
    ]);
});

// Petugas
Route::get('petugas/dashboard', function () {
    return view('petugas.dashboard', [
        'title'=>'Petugas | Dashboard'
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index']);

// Login
Route::get('/login', [SessionController::class, 'index']);
Route::post('/login/auth', [SessionController::class, 'login']);

// Register Masyarakat
Route::get('/register', [SessionController::class, 'register']);
Route::post('/register/auth', [SessionController::class, 'create']);

// Register Admin
Route::get('/register/admin', [SignupadminController::class, 'register']);
Route::post('/register/admin/auth', [SignupadminController::class, 'create']);

// Logout
Route::get('/logout', [SessionController::class, 'logout']);

// Controller
Route::resource('admin', AdminController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('masyarakat', MasyarakatController::class);
