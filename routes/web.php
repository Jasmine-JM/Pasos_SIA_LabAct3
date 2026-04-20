<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Public Route
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard (protected)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Customers CRUD (protected)
    Route::resource('customers', CustomerController::class);

    // Profile routes (protected)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| Auth Routes (Login / Register / Forgot Password, etc.)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';