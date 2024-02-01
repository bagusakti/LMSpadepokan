<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FillPDFController2;
use App\Http\Controllers\VerificationController;

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/masuk',[AuthController::class, 'login'])->name('login_page');
Route::post('login',[AuthController::class, 'dologin'])->name('login');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');
Route::get('/{id}/detail',[HomeController::class, 'detailcourse'])->name('course_detail');
Route::get('/TabelCatc',[HomeController::class, 'index_catc'])->name('sertifikat_catc');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/daftar',[AuthController::class, 'register'])->name('register_page');
    Route::post('register',[AuthController::class, 'doregister'])->name('register');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin',[AdminController::class, 'index'])->name('dashboard_admin');
    Route::get('/admin/datacourse',[AdminController::class, 'course'])->name('admin_side_course');
    Route::get('/admin/datacourse/detail{id}',[AdminController::class, 'detailCourse'])->name('admin_detail_course');
    Route::get('/admin/datacourse/edit/{id}',[AdminController::class, 'editCourse'])->name('admin_edit_course');
    Route::post('/admin/datacourse/update{id}',[AdminController::class, 'updateCourse'])->name('admin_update_course');
    Route::get('/admin/datacourse/delete{id}',[AdminController::class, 'deleteCourse'])->name('admin_delete_course');
    Route::post('addcourse',[AdminController::class, 'storecourse'])->name('admin_store_course');
    Route::post('addusercourse',[AdminController::class, 'addCourseToUser'])->name('admin_add_course_users');
    Route::post('removeusercourse',[AdminController::class, 'removeCourseFromUser'])->name('admin_remove_course_users');
    Route::get('/admin/datatrainers',[AdminController::class, 'datatrainer'])->name('admin_side_trainers');
    Route::get('/admin/datatsiswa/assignrole{id}',[AdminController::class, 'assignTrainer'])->name('admin_up_trainer');
    Route::get('/admin/datatrainers/droprole{id}',[AdminController::class, 'dropSiswa'])->name('admin_drop_siswa');
    Route::get('/admin/datasiswa',[AdminController::class, 'datasiswa'])->name('admin_side_siswas');
    Route::get('/admin/datausers',[AdminController::class, 'datauser'])->name('admin_side_users');
    Route::get('/admin/datausers/edit{id}',[AdminController::class, 'editUser'])->name('admin_edit_users');
    Route::post('/admin/datausers/update{id}',[AdminController::class, 'updateUser'])->name('admin_update_users');
    Route::get('/admin/datausers/delete{id}',[AdminController::class, 'deleteUser'])->name('admin_delete_users');
    Route::get('/admin/datausers/{id}',[AdminController::class, 'datacourseuser'])->name('admin_side_course_users');
    Route::get('/admin/datacourse/tambahkancourse',[AdminController::class, 'addcourse'])->name('admin_add_course');

    Route::get('/admin/datacatc',[AdminController::class, 'index_catc'])->name('admin_side_catc');
    Route::get('/admin/datacatc/import',[AdminController::class, 'import_catc'])->name('admin_catc_import');
    Route::get('/admin/datacatc/download',[AdminController::class, 'export_catc'])->name('admin_catc_export');


});

Route::group(['middleware' => ['role:trainer']], function () {
    Route::get('/trainer',[TrainerController::class, 'index'])->name('dashboard_trainer');
    Route::get('/trainer/datasiswa',[TrainerController::class, 'datasiswa'])->name('trainer_side_datasiswa');
    Route::get('/trainer/datasiswa/edit/{id}',[TrainerController::class, 'editsiswa'])->name('trainer_edit_siswa');
    Route::post('/trainer/datasiswa/update/{id}', [TrainerController::class, 'updatesiswa'])->name('trainer_update_siswa');
    Route::get('/trainer/datasiswa/hapus/{id}',[TrainerController::class, 'hapussiswa'])->name('trainer_hapus_siswa');
    Route::get('/trainer/pelatihanliterasi',[TrainerController::class, 'Literasi'])->name('trainer_course_pelatihanliterasi');
    Route::get('/trainer/datasiswa/status{id}', [TrainerController::class, 'statussiswa'])->name('change_status_siswa');
    Route::get('/trainer/datasiswa/tugas{id}', [TrainerController::class, 'resettugas'])->name('change_status_tugas');

    Route::get('/trainer/task/toeic',[CourseController::class, 'index_toeic'])->name('trainer_course_toeic');
    Route::get('/trainer/task/toeic/add',[CourseController::class, 'add_Toeic'])->name('trainer_course_add_toeic');
    Route::get('/trainer/task/toeic/add',[CourseController::class, 'edit_Toeic'])->name('trainer_course_edit_toeic');
    Route::post('addToeic', [CourseController::class, 'create_toeic'])->name('trainer_addtoeic');

});

Route::group(['middleware' => ['role:siswa']], function () {
    Route::get('/siswa',[SiswaController::class, 'index'])->name('dashboard_siswa');
    Route::get('/siswa/toeic',[SiswaController::class, 'toeic'])->name('siswa_side_toeic');
    Route::get('/siswa/profil',[SiswaController::class, 'profil'])->name('siswa_side_profilsiswa');
    Route::get('/siswa/pelatihanliterasi',[SiswaController::class, 'pelatihanliterasi'])->name('siswa_side_pelatihanliterasi');
    Route::get('/siswa/pelatihanliterasi/unduh', [FillPDFController2::class, 'process'])->name('unduh_sertifikat');
    Route::get('/siswa/pelatihan/verification', [VerificationController::class, 'verification'])->name('verification');
    Route::post('up_literasi', [SiswaController::class, 'uplink'])->name('siswa_up');
    // Route::post('up_toeic', [CourseController::class, 'submit'])->name('up_toeic');
});
