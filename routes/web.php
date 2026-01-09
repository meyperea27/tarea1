<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// UX/UI Tasks Routes (Public Access)
Route::prefix('exercises')->name('exercises.')->group(function () {
    Route::get('/landing', [App\Http\Controllers\TaskUIController::class, 'landing'])->name('landing');
    Route::get('/form', [App\Http\Controllers\TaskUIController::class, 'form'])->name('form');
    Route::get('/dashboard', [App\Http\Controllers\TaskUIController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [App\Http\Controllers\TaskUIController::class, 'profile'])->name('profile');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD routes
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('user-admin', UserAdminController::class)->middleware('admin');
});

require __DIR__.'/auth.php';
