<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chart1Controller;
use App\Http\Controllers\Chart2Controller;

use App\Http\Controllers\AdminController;




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
    
});
Route::get('/admin/dashboard', [Chart1Controller::class, 'barChart']);
Route::get('/admin/dashboard', [Chart2Controller::class, 'pieChart']);

require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

});


