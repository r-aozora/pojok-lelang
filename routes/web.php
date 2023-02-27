<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\petugasController;
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

Route::get('/', function () {
    return view('masyarakat.index');
});

Route::get('admin/petugas', function () {
    $data = [
        "level" => "Admin"
    ];
    return view('admin.data_petugas')->with($data);
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register ', function () {
    return view('pages.register');
});

Route::get('/login', SessionController::class, 'index');
Route::get('/login', SessionController::class, 'index');

Route::resource('admin', AdminController::class);

Route::resource('petugas', petugasController::class);

Route::resource('masyarakat', MasyarakatController::class);

