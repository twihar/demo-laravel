<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OtherController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/cities', [OtherController::class, 'cities']);
    Route::get('/regions', [OtherController::class, 'regions']);
    Route::get('/question-types', [OtherController::class, 'questionTypes']);
    Route::get('/answer-types', [OtherController::class, 'answerTypes']);
    Route::get('/raisons', [OtherController::class, 'raisons']);
});



