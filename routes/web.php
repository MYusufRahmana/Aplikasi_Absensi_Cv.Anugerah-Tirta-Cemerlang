<?php

use App\Http\Controllers\AbsenAdminController;
use App\Http\Controllers\AbsensiMemberController;
use App\Http\Controllers\AbsensiPelatihController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GajiPelatihController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasMemberController;
use App\Http\Controllers\LaporanAbsenMember;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatAbsenMemberController;
use App\Http\Controllers\RiwayatAbsensiPelatihController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

route::get('/dashboard',[DashboardController::class,'index']);
Route::resource('absen', AbsensiMemberController::class);
Route::resource('absenpelatih', AbsensiPelatihController::class);
Route::resource('absenadmin', AbsenAdminController::class);

Route::resource('home', HomeController::class);

Route::resource('profile', ProfileController::class);

Route::resource('riwayatabsen', RiwayatAbsenMemberController::class);
Route::resource('riwayatabsenpelatih', RiwayatAbsensiPelatihController::class);
Route::resource('pelatih', PelatihController::class);
Route::resource('member', MemberController::class);

Route::resource('gajipelatih',GajiPelatihController::class);

Route::resource('laporan', LaporanController::class);
Route::resource('laporanabsenmember', LaporanAbsenMember::class);

Route::resource('kelasmember', KelasMemberController::class);

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/laporanpelatih', [PDFController::class,'index']);
Route::get('/laporanpelatih/cetak_pdf', [PDFController::class,'cetak_pdf']);