<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActivityReportController;
use App\Http\Controllers\BloodSugarReportController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/pendahuluan', [DashboardController::class, 'pendahuluan'])->name('pendahuluan');
    Route::get('/video', [DashboardController::class, 'video'])->name('video');
    Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel');

    // Resourceful routes untuk laporan (CRUD)
    Route::resource('laporan-aktivitas', ActivityReportController::class);
    Route::resource('laporan-gula-darah', BloodSugarReportController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
