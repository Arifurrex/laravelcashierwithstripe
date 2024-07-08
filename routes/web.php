<?php

use App\Http\Controllers\checkoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pricing', function () {
    return view('pricing');
})->middleware(['auth', 'verified'])->name('pricing');

Route::get('checkout/{plan?}', checkoutController::class)->middleware(['auth', 'verified'])->name('checkout');

Route::get('/success', function () {
    return view('success');
})->middleware(['auth', 'verified'])->name('success');



// for authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
