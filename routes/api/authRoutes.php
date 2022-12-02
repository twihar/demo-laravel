<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\{
    LoginController,
};

Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout']);
});
