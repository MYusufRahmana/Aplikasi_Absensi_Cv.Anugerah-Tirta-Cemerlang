<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AbsensiMemberController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use App\Models\register;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('mainmenu',['countMember']);
    })->middleware(['auth', 'verified'])->name('mainmenu');

    Route::resource('absen', AbsensiMemberController::class);
    Route::resource('home', HomeController::class);
    Route::resource('jumlah', RegisterController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/laporan', [ReportController::class, 'index'])->name('laporan');
require __DIR__ . '/auth.php';

