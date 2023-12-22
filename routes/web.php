<?php

use App\Http\Controllers\AbsenAdminController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AbsensiMemberController;
use App\Http\Controllers\AbsensiPelatihController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GajiPelatihController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanAbsenMember;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\PengajianPelatihController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RiwayatAbsenMember;
use App\Http\Controllers\RiwayatAbsenMemberController;
use App\Http\Controllers\RiwayatAbsensiPelatihController;
use App\Models\AbsenAdmin;
use App\Models\register;
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
// Route::resource('jumlah', RegisterController::class);

Route::resource('profile', ProfileController::class);

Route::resource('riwayatabsen', RiwayatAbsenMemberController::class);
Route::resource('riwayatabsenpelatih', RiwayatAbsensiPelatihController::class);
Route::resource('pelatih', PelatihController::class);
Route::resource('member', MemberController::class);

Route::resource('gajipelatih',GajiPelatihController::class);

Route::resource('laporan', LaporanController::class);
Route::resource('laporanabsenmember', LaporanAbsenMember::class);

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
// require __DIR__ . '/auth.php';

