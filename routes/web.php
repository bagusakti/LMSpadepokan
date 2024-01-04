<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FillPDFController2;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/siswa/pelatihanliterasi/buat/sertifikat2', [Hal2Controller::class, 'process']);
Route::get('/siswa/pelatihanliterasi/buat/sertifikat', [FillPDFController2::class, 'process']);
// Route::get('/siswa/pelatihanliterasi/buat/combined-sertifikat', [CombinePDFWithQRController::class, 'combineAndOutput']);

//Route::get('/buat', [\App\Http\Controllers\FillPDFController::class, 'process']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/admin',[AdminController::class, 'index'])->name('dashboard_admin');
Route::get('/login',[AuthController::class, 'login'])->name('login_page');
Route::get('/register',[AuthController::class, 'register'])->name('register_page');
Route::post('login',[AuthController::class, 'dologin'])->name('login');
Route::post('register',[AuthController::class, 'doregister'])->name('register');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');


Route::get('/siswa',[SiswaController::class, 'index'])->name('dashboard_siswa');
Route::get('/siswa/profil',[SiswaController::class, 'profil'])->name('siswa_side_profilsiswa');
Route::get('/siswa/pelatihanliterasi',[SiswaController::class, 'pelatihanliterasi'])->name('siswa_side_pelatihanliterasi');


Route::get('/trainer',[TrainerController::class, 'index'])->name('dashboard_trainer');
Route::get('/trainer/absensi',[TrainerController::class, 'absensi'])->name('trainer_side_absensi');
Route::get('/trainer/datasiswa',[TrainerController::class, 'data'])->name('trainer_side_datasiswa');
