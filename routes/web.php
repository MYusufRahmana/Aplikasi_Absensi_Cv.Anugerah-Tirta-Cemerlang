<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AbsensiMemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RiwayatAbsenMember;
use App\Models\register;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

route::get('/dashboard',[DashboardController::class,'index']);
Route::resource('absen', AbsensiMemberController::class);
Route::resource('home', HomeController::class);
// Route::resource('jumlah', RegisterController::class);

Route::resource('profile', ProfileController::class);

Route::resource('riwayatabsen', RiwayatAbsenMember::class);


Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/laporan', [ReportController::class, 'index'])->name('laporan');
// require __DIR__ . '/auth.php';

