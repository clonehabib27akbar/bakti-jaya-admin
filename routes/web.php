<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/sekolah', [App\Http\Controllers\MasterController::class, 'index'])->name('sekolah');

Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa');

Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index'])->name('guru');
