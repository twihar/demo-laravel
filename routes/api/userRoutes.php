<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    UserController,
    RoleController,
};


Route::middleware(['auth:api'])->prefix('users')->group(function () {
//    Route::group(['middleware' => ['permission:Voir liste campagnes']], function () {
//        Route::get('/', [UserController::class, 'index']);
//    });
    Route::get('/', [UserController::class, 'index']);
    Route::post('/store', [UserController::class, 'store']);
    Route::post('/update', [UserController::class, 'update']);
    Route::delete('/delete/{id}', [UserController::class, 'destroy']);
    Route::post('/change-status', [UserController::class, 'changeStatus']);
});


Route::middleware(['auth:api'])->prefix('roles')->group(function () {
    Route::get('/', [RoleController::class, 'index']);
    Route::get('/permissions', [RoleController::class, 'permissions']);
    Route::post('/store', [RoleController::class, 'store']);
    Route::post('/update', [RoleController::class, 'update']);
    Route::delete('delete/{id}', [RoleController::class, 'destroy']);
});



