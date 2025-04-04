<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [FrontendController::class,'index'])->name('homePage');
Route::get('/view', [FrontendController::class,'viewList'])->name('viewList');
Route::get('/manage', [FrontendController::class,'manage'])->name('manage');
Route::get('/inspection', [FrontendController::class,'inspection'])->name('inspection');
Route::get('/reports', [FrontendController::class,'reports'])->name('reports');
Route::get('/settings', [FrontendController::class,'settings'])->name('settings');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
