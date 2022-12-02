<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    MobileApplicationController
};

Route::prefix('mobile')->group(function () {
    Route::post('/login', [MobileApplicationController::class, 'login']);
});
Route::middleware(['auth:sanctum'])->prefix('mobile')->group(function () {
    Route::post('logout', [MobileApplicationController::class, 'logout']);
});
