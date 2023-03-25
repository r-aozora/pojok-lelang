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
    return view('admin.index');
});

Route::get('admin/petugas', function () {
    $data = [
        "level" => "Admin"
    ];
    return view('admin.data_petugas')->with($data);
});

Route::get('/masyarakat', function () {
    $data = [
        "level" => "Masyarakat"
    ];
    return view('masyarakat.index')->with($data);
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register ', function () {
    return view('pages.register');
});

Route::get('/log', function () {
    return view('siglog.log');
});

Route::get('/sign', function () {
    return view('siglog.sign');
});

Route::get('/home', function () {
    return view('landing.home');
});

Route::get('/dashboard', function () {
    return view('adminpojok.dashboard');
});

Route::get('/datamasyarakat', function () {
    return view('adminpojok.datamasyarakat');
});

Route::get('/datapetugas', function () {
    return view('adminpojok.datapetugas');
});

Route::get('/databarang', function () {
    return view('adminpojok.databarang');
});

Route::get('/detailmasyarakat', function () {
    return view('adminpojok.detailmasyarakat');
});

Route::get('/detailpetugas', function () {
    return view('adminpojok.detailpetugas');
});

Route::get('/detailbarang', function () {
    return view('adminpojok.detailbarang');
});




//Route::get('/login', [SessionController::class, 'index']);
// Route::get('/login', SessionController::class, 'index');

Route::resource('admin', AdminController::class);

Route::resource('petugas', petugasController::class);

Route::resource('masyarakat', MasyarakatController::class);

?>
