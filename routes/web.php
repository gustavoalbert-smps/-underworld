<?php

use App\Http\Controllers\Manage\UserController;
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


Route::view('admin-dashboard', 'admin-dashboard')
    ->middleware(['auth', 'verified'])
    ->name('admin-dashboard');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::controller(\App\Http\Controllers\AdminController::class)->group(function () {
        Route::get('/admin', 'index')->name('admin');
    });
    
    Route::prefix('role')->group(function () {
        Route::name('admin.')->group(function() {
            Route::controller(\App\Http\Controllers\RoleController::class)->group(function () {
                Route::get('/edit/{id}', 'edit')->name('role.edit');
                Route::put('{id}', 'update')->name('role.update');
            });
        });
    });

    Route::name('admin.')->group(function() {
        Route::resource('user', UserController::class);
        Route::put('/user/{id}/status', [UserController::class, 'toggleStatus'])->name('user.toggle-status');
    });
});

require __DIR__.'/auth.php';
