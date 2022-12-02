<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    ProductController,
    BrandController,
    CategoryController,
    SubCategoryController,
};


Route::middleware(['auth:sanctum'])->prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::post('/store-by-excel', [ProductController::class, 'storeByExcel']);
    Route::post('/update', [ProductController::class, 'update']);
    Route::post('/delete', [ProductController::class, 'delete']);
    Route::post('/change-status', [ProductController::class, 'changeStatus']);
});

Route::middleware(['auth:sanctum'])->prefix('brands')->group(function () {
    Route::get('/', [BrandController::class, 'index']);
    Route::post('/store', [BrandController::class, 'store']);
    Route::post('/store-by-excel', [BrandController::class, 'storeByExcel']);
    Route::post('/update', [BrandController::class, 'update']);
    Route::post('/delete', [BrandController::class, 'delete']);
});

Route::middleware(['auth:sanctum'])->prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::post('/store', [CategoryController::class, 'store']);
    Route::post('/store-by-excel', [CategoryController::class, 'storeByExcel']);
    Route::post('/update', [CategoryController::class, 'update']);
    Route::post('/delete', [CategoryController::class, 'delete']);
});

Route::middleware(['auth:sanctum'])->prefix('subCategories')->group(function () {
    Route::get('/', [SubCategoryController::class, 'index']);
    Route::post('/store', [SubCategoryController::class, 'store']);
    Route::post('/store-by-excel', [SubCategoryController::class, 'storeByExcel']);
    Route::post('/update', [SubCategoryController::class, 'update']);
    Route::post('/delete', [SubCategoryController::class, 'delete']);
});



