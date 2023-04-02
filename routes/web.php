<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MasyarakatController;
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
    return view('pages.landing', [
        'title'=>'Pojok Lelang | Home'
    ]);
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

// Masyarakat
Route::get('/masyarakat/dashboard', function () {
    return view('masyarakat.index', [
        'title'=>'Masyarakat | Dashboard'
    ]);
});

// Admin
Route::get('/admin/dashboard', function () {
    return view('admin.index', [
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
    return view('petugas.index', [
        'title'=>'Petugas | Dashboard'
    ]);
});

// Login Masyarakat
Route::get('/login', [SessionController::class, 'index']);
Route::post('/login/masyarakat', [SessionController::class, 'login']);

// Register Masyarakat
Route::get('/register', [SessionController::class, 'register']);
Route::post('/register/masyarakat', [SessionController::class, 'create']);

// Login Admin
// Route::get('/login/admin', function () {
//     return view('pages.login_admin');
// });

// Route::get('/register/admin', function () {
//     return view('pages.register_admin');
// });

Route::get('/login/admin', [SessionController::class, 'index_admin']);
Route::post('/login/admin/auth', [SessionController::class, 'login_admin']);

// Register Admin
Route::get('/register/admin', [SessionController::class, 'register_admin']);
Route::post('/register/admin/auth', [SessionController::class, 'create_admin']);

// Logout
Route::get('/logout', [SessionController::class, 'logout']);

// Controller
Route::resource('admin', AdminController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('masyarakat', MasyarakatController::class);
