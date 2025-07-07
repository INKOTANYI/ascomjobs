<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ApplicationController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('applications', ApplicationController::class)->middleware('auth');
