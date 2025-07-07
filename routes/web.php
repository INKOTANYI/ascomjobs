<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/auth/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
