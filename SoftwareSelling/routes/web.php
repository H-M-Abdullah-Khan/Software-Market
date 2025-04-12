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
Route::get('/welcome', [HomeController::class,'home']);
Route::get('/explore-1', [HomeController::class,'explore']);
Route::get('/market-create', [HomeController::class,'Create']);
Route::get('/market', [HomeController::class,'Market']);
Route::get('/market-active-bid', [HomeController::class,'ActiveBid']);
Route::get('/market-collection', [HomeController::class,'Mycollection']);
Route::get('/market-favorite', [HomeController::class,'Myfavorite']);
Route::get('/market-wallet', [HomeController::class,'Wallet']);
Route::get('/market-history', [HomeController::class,'History']);
Route::get('/market-explore', [HomeController::class,'Settings']);
Route::get('/faq', [HomeController::class,'FAQ']);
Route::get('/contact-us', [HomeController::class,'Contact']);
Route::get('/terms-condition', [HomeController::class,'Terms']);
Route::get('/nft-detail-1', [HomeController::class,'nft']);
Route::get('/blog-detail', [HomeController::class,'blog']);
Route::get('/author-2', [HomeController::class,'author']);
Route::get('/author-1', [HomeController::class,'author1']);
Route::get('/explore-2', [HomeController::class,'explore2']);
Route::get('/explore-3', [HomeController::class,'explore3']);
Route::get('/explore-4', [HomeController::class,'explore4']);
Route::get('/maintenance', [HomeController::class,'maintenance']);
Route::get('/coming-soon', [HomeController::class,'comingsoon']);
Route::get('/upcoming', [HomeController::class,'upcoming']);
Route::get('/nft-detail-3', [HomeController::class,'nft3']);
Route::get('/nft-detail-2', [HomeController::class,'nft2']);
Route::get('/nft-detail-4', [HomeController::class,'nft4']);

require __DIR__.'/auth.php';
