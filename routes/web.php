<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Role;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;



Route::get('/', [UserController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', [UserController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/edit/barchart', [AdminController::class, 'EditBarChart'])->name('admin.edit.barchart');
    Route::patch('/update/barchart/{id}', [AdminController::class, 'UpdateBarChart'])->name('admin.update.barchart');

    Route::get('/edit/piechart', [AdminController::class, 'EditPieChart'])->name('admin.edit.piechart');
    Route::patch('/update/piechart/{id}', [AdminController::class, 'UpdatePieChart'])->name('admin.update.piechart');
    Route::get('/edit/mobile', [AdminController::class, 'EditMobile'])->name('admin.update.mobile');
    Route::patch('/update/mobile/{année0}', [AdminController::class, 'UpdateMobile'])->name('admin.update.externe');
    Route::get('/edit/externe', [AdminController::class, 'EditExterne'])->name('admin.update.externes');
    Route::patch('/update/externe/{année}', [AdminController::class, 'UpdateExterne'])->name('admin.update.externe');


});
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);
});
