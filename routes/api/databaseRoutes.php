<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    DatabaseController,
    SalepointAreaController,
    SalepointCircuitController,
    SalepointClusterController,
    SalepointRouteController,
    SalepointSupplyTypeController,
    SalepointTypeController,
    SalepointZoneController,
};

Route::middleware(['auth:sanctum'])->prefix('databases')->group(function () {
    Route::get('/', [DatabaseController::class, 'index']);
    Route::get('/filter/ids', [DatabaseController::class, 'filterIds']);
    Route::get('/salepoints-by-ids', [DatabaseController::class, 'getSalepointsByIds']);
    Route::post('/store', [DatabaseController::class, 'store']);
    Route::post('/change-status', [DatabaseController::class, 'ChangeStatus']);
    Route::post('/rename', [DatabaseController::class, 'rename']);
    Route::post('/delete', [DatabaseController::class, 'delete']);
    Route::get('/{id}/show', [DatabaseController::class, 'showDatabase']);
});

Route::middleware(['auth:sanctum'])->prefix('salepointAreas')->group(function () {
    Route::get('/', [SalepointAreaController::class, 'index']);
    Route::post('store', [SalepointAreaController::class, 'store']);
    Route::post('/store-by-excel', [SalepointAreaController::class, 'storeByExcel']);
    Route::post('update', [SalepointAreaController::class, 'update']);
    Route::post('delete', [SalepointAreaController::class, 'delete']);
});

Route::middleware(['auth:sanctum'])->prefix('salepointCircuits')->group(function () {
    Route::get('/', [SalepointCircuitController::class, 'index']);
    Route::post('store', [SalepointCircuitController::class, 'store']);
    Route::post('/store-by-excel', [SalepointCircuitController::class, 'storeByExcel']);
    Route::post('update', [SalepointCircuitController::class, 'update']);
    Route::post('delete', [SalepointCircuitController::class, 'delete']);
});

Route::middleware(['auth:sanctum'])->prefix('salepointClusters')->group(function () {
    Route::get('/', [SalepointClusterController::class, 'index']);
    Route::post('store', [SalepointClusterController::class, 'store']);
    Route::post('/store-by-excel', [SalepointClusterController::class, 'storeByExcel']);
    Route::post('update', [SalepointClusterController::class, 'update']);
    Route::post('delete', [SalepointClusterController::class, 'delete']);
});

Route::middleware(['auth:sanctum'])->prefix('salepointRoutes')->group(function () {
    Route::get('/', [SalepointRouteController::class, 'index']);
    Route::post('store', [SalepointRouteController::class, 'store']);
    Route::post('/store-by-excel', [SalepointRouteController::class, 'storeByExcel']);
    Route::post('update', [SalepointRouteController::class, 'update']);
    Route::post('delete', [SalepointRouteController::class, 'delete']);
});

Route::middleware(['auth:sanctum'])->prefix('salepointSupplyTypes')->group(function () {
    Route::get('/', [SalepointSupplyTypeController::class, 'index']);
    Route::post('store', [SalepointSupplyTypeController::class, 'store']);
    Route::post('/store-by-excel', [SalepointSupplyTypeController::class, 'storeByExcel']);
    Route::post('update', [SalepointSupplyTypeController::class, 'update']);
    Route::post('delete', [SalepointSupplyTypeController::class, 'delete']);
});

Route::middleware(['auth:sanctum'])->prefix('salepointTypes')->group(function () {
    Route::get('/', [SalepointTypeController::class, 'index']);
    Route::post('store', [SalepointTypeController::class, 'store']);
    Route::post('/store-by-excel', [SalepointTypeController::class, 'storeByExcel']);
    Route::post('update', [SalepointTypeController::class, 'update']);
    Route::post('delete', [SalepointTypeController::class, 'delete']);
});
Route::middleware(['auth:sanctum'])->prefix('salepointZones')->group(function () {
    Route::get('/', [SalepointZoneController::class, 'index']);
    Route::post('store', [SalepointZoneController::class, 'store']);
    Route::post('/store-by-excel', [SalepointZoneController::class, 'storeByExcel']);
    Route::post('update', [SalepointZoneController::class, 'update']);
    Route::post('delete', [SalepointZoneController::class, 'destroy']);
});
