<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllExcelRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use App\Services\ExcelStoreService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;
    protected $excelStoreService;

    public function __construct(CategoryService $categoryService, ExcelStoreService $excelStoreService)
    {
        $this->categoryService = $categoryService;
        $this->excelStoreService = $excelStoreService;
    }

    public function index()
    {
        try {
            $data = Category::latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(CategoryRequest $request)
    {
        try {
            return $this->categoryService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(AllExcelRequest $request)
    {
        try {
            return $this->excelStoreService->storeByExcel($request, 'categories');
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(CategoryRequest $request)
    {
        try {
            return $this->categoryService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = Category::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
