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

Route::get('/', function () {
    return view('pages.landing');
});

/* Route::get('/login', function () {
    return view('pages.login');
}); */

Route::get('/register ', function () {
    return view('pages.register');
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

Route::get('/login', [SessionController::class, 'index']);
Route::post('/login/masyarakat', [SessionController::class, 'login']);
Route::get('/register', [SessionController::class, 'register']);
Route::post('/register/masyarakat', [SessionController::class, 'create']);
Route::get('/logout', [SessionController::class, 'logout']);

Route::resource('admin', AdminController::class);

Route::resource('petugas', PetugasController::class);

Route::resource('masyarakat', MasyarakatController::class);
