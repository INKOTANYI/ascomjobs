<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LocationController;

Route::middleware('api')->group(function () {
    Route::get('/districts/{provinceId}', [LocationController::class, 'getDistricts']);
    Route::get('/sectors/{districtId}', [LocationController::class, 'getSectors']);
});
