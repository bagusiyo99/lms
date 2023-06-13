<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BanksoalController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\BerandaStudentController;
use App\Http\Controllers\BerandaTeacherController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasujianController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\MuridController;

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
    return view('home');
});


// Route::get('/', function () {
//  return redirect()->route('login');
// });
// Route::get('/', function () {
//     return redirect('login-murid');
// });

Route::post('/login', [LoginController::class, 'authenticated']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('student')->middleware(['auth', 'auth.student'])->group(function () {
    Route::get('beranda', [BerandaStudentController::class, 'index'])->name('student.beranda');
    // agung
    Route::get('kelompok', [KelompokController::class, 'index'])->name('student.kelompok');
});

// Route::get ('login-wali', [LoginController::class, 'showLoginFormWali'])->name('login.wali');
Route::get('login-guru', [LoginController::class, 'showLoginguru'])->name('login-guru');
Route::get('login-murid', [LoginController::class, 'showLoginmurid'])->name('login-murid');


Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');
    Route::resource('user', UserController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('murid', MuridController::class);
    Route::resource('kelompok', KelompokController::class);
    Route::resource('banksoal', BanksoalController::class);
    Route::resource('kelasujian', KelasujianController::class);
});


Route::prefix('teacher')->middleware(['auth', 'auth.teacher'])->group(function () {
    Route::get('beranda', [BerandaTeacherController::class, 'index'])->name('teacher.beranda');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('login-murid');
})->name('logout');


// noted !
// update agung :
// - menambahkan menu baru sidebar
// - view admin : data kelompok, bank soal, kelas ujian
