<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
Route::get('/buat', [\App\Http\Controllers\FillPDFController::class, 'process']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/siswa',[SiswaController::class, 'index'])->name('dashboard_siswa');
Route::get('/trainer',[TrainerController::class, 'index'])->name('dashboard_trainer');
Route::get('/admin',[AdminController::class, 'index'])->name('dashboard_admin');
Route::get('/login',[AuthController::class, 'login'])->name('login_page');
Route::get('/register',[AuthController::class, 'register'])->name('register_page');
Route::post('login',[AuthController::class, 'dologin'])->name('login');
Route::post('register',[AuthController::class, 'doregister'])->name('register');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');



