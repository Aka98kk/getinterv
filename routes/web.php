<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalInterviewController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('coba.index');
// });
Route::group(['middleware' => 'preventBackHistory'], function () {
    // Route yang ingin dilindungi
});

route::get('/halaman', [LoginController::class, 'halaman'])->name('index');
route::get('/halaman2', [LoginController::class, 'halaman2'])->name('index2');
route::post('/dashboard1', [LoginController::class, 'dashboard1'])->name('dashboard.Dashboard')->middleware('IsLogin');
route::get('/dashboard2', [LoginController::class, 'dashboard2'])->name('dashboard2.Dashboard');

route::get('/logindiisi', [LoginController::class, 'diisi'])->name('logindiisi');
route::post('logindiisi', [LoginController::class, 'Auth'])->name('logindiisi.auth');
route::get('/register', [LoginController::class, 'registerform'])->name('register');
route::post('loginregister', [LoginController::class, 'register'])->name('login.register');
route::get('/daftar', [LoginController::class, 'daftarform'])->name('daftar');
route::post('loginrdaftar', [LoginController::class, 'daftar'])->name('login.daftar');
route::get('/loginlorem', [LoginController::class, 'lorem'])->name('loginlorem');
route::post('loginlorem', [LoginController::class, 'Auth2'])->name('loginlorem.auth2');
route::get('/logout', [LoginController::class, 'Logout'])->name('auth.logout');
route::post('/logout', [LoginController::class, 'Logout'])->name('auth.logout');

Route::get('/ayas', [IndexController::class, 'ViewIndex']);

Route::resource('pertanyaan', PertanyaanController::class);
Route::get('/', [PertanyaanController::class, 'Viewindex']);

Route::resource('jadwal_interview', JadwalInterviewController::class);
Route::get('/', [JadwalInterviewController::class, 'viewindex']);
Route::post('/simpanDaftarInterview', [JadwalInterviewController::class, 'simpanDaftarInterview']);
Route::get('/lihatDaftarInterview', [JadwalInterviewController::class, 'lihatDaftarInterview']);
Route::get('/DeleteInterview/{id}', [JadwalInterviewController::class, 'DeleteInterview']);


Route::post('/AddPertanyaan', [PertanyaanController::class, 'AddPertanyaan']);
Route::post('/UbahPertanyaan/{id}', [PertanyaanController::class, 'UbahPertanyaan']);
Route::get('/DeletePertanyaan/{id}', [PertanyaanController::class, 'DeletePertanyaan']);
// Route::post('/AddKategori', [IndexController::class, 'AddKategori']);
// Route::get('/DeleteKategori/{id}', [IndexController::class, 'DeleteKategori']);

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('login.google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback.google');

route::get('/dashboard2', [LoginController::class, 'dashboard2'])->name('dashboard.Dashboard2');
route::get('/dashboard1', [LoginController::class, 'dashboard1'])->name('dashboard.Dashboard1');


Route::get('login/microsoft', [LoginController::class, 'redirectToMicrosoft'])->name('microsoft.login');
Route::get('login/microsoft/callback', [LoginController::class, 'handleMicrosoftCallback'])->name('microsoft.callback');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');