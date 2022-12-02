<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    UploadFileController,
};

Route::middleware(['auth:sanctum'])->prefix('upload')->group(function () {
    Route::post('/pdf', [UploadFileController::class, 'uploadPdf']);
    Route::post('/image', [UploadFileController::class, 'uploadImage']);
    Route::post('/imagePdf', [UploadFileController::class, 'uploadImagePdf']);
});



