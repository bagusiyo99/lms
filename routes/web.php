<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\BerandaStudentController;
use App\Http\Controllers\BerandaTeacherController;
use App\Http\Controllers\GuruController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return redirect('login-guru');
});

// Route::get('/login', [LoginController::class, 'index'])->name('login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('student')->middleware(['auth', 'auth.student'])->group(function(){
    Route::get('beranda', [BerandaStudentController::class, 'index'])->name('student.beranda');

});

    Route::get ('login-guru', [LoginController::class, 'showLoginguru'])->name('login.guru');


Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function(){
    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');
    Route::resource('user', UserController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('murid', MuridController::class);


});


Route::prefix('teacher')->middleware(['auth', 'auth.teacher'])->group(function(){
    Route::get('beranda', [BerandaTeacherController::class, 'index'])->name('teacher.beranda');

});

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
})->name('logout');