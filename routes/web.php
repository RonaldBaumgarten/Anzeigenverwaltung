<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use Livewire\Volt\Volt;
use App\Models\Job;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class);

Route::resource('companies', CompanyController::class);

Route::resource('jobs', JobController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
