<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FillPDFController2;
use App\Http\Controllers\VerificationController;











Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/masuk',[AuthController::class, 'login'])->name('login_page');
// Route::get('/daftar',[AuthController::class, 'register'])->name('register_page');
Route::post('login',[AuthController::class, 'dologin'])->name('login');
// Route::post('register',[AuthController::class, 'doregister'])->name('register');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/daftar',[AuthController::class, 'register'])->name('register_page');
    Route::post('register',[AuthController::class, 'doregister'])->name('register');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin',[AdminController::class, 'index'])->name('dashboard_admin');
});

Route::group(['middleware' => ['role:trainer']], function () {
    Route::get('/trainer',[TrainerController::class, 'index'])->name('dashboard_trainer');
    Route::get('/trainer/pelatihanliterasi',[TrainerController::class, 'pelatihanliterasi'])->name('trainer_course_pelatihanliterasi');
    Route::get('/trainer/datasiswa/status{id}', [TrainerController::class, 'statussiswa'])->name('change_status_siswa');
    Route::get('/trainer/datasiswa/tugas{id}', [TrainerController::class, 'resettugas'])->name('change_status_tugas');
});

Route::group(['middleware' => ['role:siswa']], function () {
    Route::get('/siswa',[SiswaController::class, 'index'])->name('dashboard_siswa');
    Route::get('/siswa/profil',[SiswaController::class, 'profil'])->name('siswa_side_profilsiswa');
    Route::get('/siswa/pelatihanliterasi',[SiswaController::class, 'pelatihanliterasi'])->name('siswa_side_pelatihanliterasi');
    Route::get('/siswa/pelatihanliterasi/unduh', [FillPDFController2::class, 'process'])->name('unduh_sertifikat');
    Route::get('/siswa/pelatihan/verification', [VerificationController::class, 'verification'])->name('verification');
    Route::post('up', [SiswaController::class, 'uplink'])->name('siswa_up');
});

