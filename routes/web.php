<?php

use App\Http\Controllers\Backend\ChalaniController;
use App\Http\Controllers\Backend\DartaController;
use App\Http\Controllers\Backend\LevelController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\QualificationController;
use App\Http\Controllers\Backend\QuataController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SubServiceController;
use App\Http\Controllers\Backend\SupServiceController;
use App\Http\Controllers\Backend\UniversityController;
use App\Http\Controllers\Backend\YearController;
use App\Http\Controllers\ProfileController;
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
    Route::resource('post', PostController::class)->names('post');
    Route::resource('service', ServiceController::class)->names('service');
    Route::resource('year', YearController::class)->names('year');
    Route::resource('subservice', SubServiceController::class)->names('subservice');
    Route::resource('superservice', SupServiceController::class)->names('supservice');
    Route::resource('qualification', QualificationController::class)->names('qualification');
    Route::resource('level', LevelController::class)->names('level');
    Route::resource('university', UniversityController::class)->names('university');
    Route::resource('quata', QuataController::class)->names('quata');
    Route::resource('darta', DartaController::class)->names('darta');
    Route::resource('chalani', ChalaniController::class)->names('chalani');
    
});

require __DIR__.'/auth.php';
