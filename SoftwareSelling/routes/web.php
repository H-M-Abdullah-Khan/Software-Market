<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class,'admin']);
})->name('admin.dashboard');

Route::prefix('company')->group(function () {
    Route::get('/dashboard', [CompanyController::class,'company']);
})->name('company.dashboard');

Route::post('/logout', [ProfileController::class, 'destroy'])->name('logout');
Route::get('/about-us', [HomeController::class,'about']);

require __DIR__.'/auth.php';
