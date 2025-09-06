<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\Job;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
    })->name('home');

Route::resource('categories', CategoryController::class);

Route::get('/company', function () {
    return view('company');
    })->name('companies');

Route::get('/jobs', function () {
    return view('jobs', [
            'jobs' => Job::all()
    ]);
})->name('jobs');

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
})->name('job-detail');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

/*
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});
 */

require __DIR__.'/auth.php';
