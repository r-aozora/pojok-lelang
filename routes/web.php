<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\BarangController;
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

Route::get('/about', function () {
    return view('pages.about', [
        'title'=>'Pojok lelang | About'
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
Route::resource('/petugas', PetugasController::class);
Route::resource('/masyarakat', MasyarakatController::class);
Route::resource('/barang', BarangController::class);
