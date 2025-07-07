<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ApplicationController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Auth::routes();

Route::get('/auth/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('applications', ApplicationController::class)->middleware('auth');
