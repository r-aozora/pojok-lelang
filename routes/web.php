<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SessionController;
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
    return view('pages.landing');
});

/*Route::get('admin/petugas', function () {
    $data = [
        "level" => "Admin"
    ];
    return view('admin.index')->with($data);
});

Route::get('/petugas', function () {
    $data = [
        "level" => "Petugas"
    ];
    return view('petugas.index')->with($data);
});

Route::get('/masyarakat', function () {
    $data = [
        "level" => "Masyarakat"
    ];
    return view('masyarakat.index')->with($data);
});*/

// Admin
Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

Route::get('/admin/masyarakat', function () {
    return view('admin.data_masyarakat');
});

Route::get('/admin/petugas', function () {
    return view('admin.data_petugas');
});

Route::get('/admin/barang', function () {
    return view('admin.data_barang');
});

Route::get('/admin/masyarakat/detail', function () {
    return view('admin.detail_masyarakat');
});

Route::get('/admin/petugas/detail', function () {
    return view('admin.detail_petugas');
});

Route::get('/admin/barang/detail', function () {
    return view('admin.detail_barang');
});

// Login Masyarakat
Route::get('/login', [SessionController::class, 'index']);
Route::post('/login/masyarakat', [SessionController::class, 'login']);

// Register Masyarakat
Route::get('/register', [SessionController::class, 'register']);
Route::post('/register/masyarakat', [SessionController::class, 'create']);

// Login Admin
Route::get('/login/admin', function () {
    return view('pages.login_admin');
});

Route::get('/register/admin', function () {
    return view('pages.register_admin');
});

// Route::get('/login/admin', [SessionController::class, 'index_admin']);
// Route::post('/login/admin/login', [SessionController::class, 'login_admin']);

// Register Admin
// Route::get('/register/admin', [SessionController::class, 'register_admin']);
// Route::post('/register/admin/register', [SessionController::class, 'create_admin']);

// Logout
Route::get('/logout', [SessionController::class, 'logout']);

// Controller
Route::resource('admin', AdminController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('masyarakat', MasyarakatController::class);
