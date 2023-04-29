<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LelangController;
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

// Depan
Route::get('/', [PagesController::class, 'landing']);
Route::get('/profile', [PagesController::class, 'profile'])->middleware('User');
Route::get('/about', [PagesController::class, 'about']);

// Login
Route::get('/login', [SessionController::class, 'index'])->middleware('Tamu');
Route::post('/login/auth', [SessionController::class, 'login'])->middleware('Tamu');

// Register Masyarakat
Route::get('/register', [SessionController::class, 'register'])->middleware('Tamu');
Route::post('/register/auth', [SessionController::class, 'create'])->middleware('Tamu');

// Register Admin
Route::get('/register/admin', [SignupadminController::class, 'register'])->middleware('Tamu');
Route::post('/register/admin/auth', [SignupadminController::class, 'create'])->middleware('Tamu');

// Logout
Route::get('/logout', [SessionController::class, 'logout']);

// Controller
Route::resource('/petugas', PetugasController::class)->middleware('User');
Route::resource('/masyarakat', MasyarakatController::class)->middleware('User');
Route::resource('/barang', BarangController::class)->middleware('User');
Route::resource('/lelang', LelangController::class)->middleware('User');
Route::resource('/galery', GaleryController::class);