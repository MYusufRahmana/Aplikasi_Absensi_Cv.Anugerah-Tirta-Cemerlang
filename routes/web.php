<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AbsensiMemberController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\absensi_member;
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

Route::redirect('/', '/login');

Route::get('/dashboard', function () {
    return view('mainmenu');
})->middleware(['auth', 'verified'])->name('mainmenu');

Route::middleware('auth')->group(function () {
    Route::resource('absen',AbsensiMemberController::class);
    Route::resource('home',HomeController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


Route::get('/mainmenu', function () {
    return view('mainmenu')->name('mainmenu');
});

require __DIR__ .'/auth.php';
