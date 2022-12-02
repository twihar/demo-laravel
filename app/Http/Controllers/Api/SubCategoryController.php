<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryExcelRequest;
use App\Http\Requests\SubCategoryRequest;
use App\Models\SubCategory;
use App\Services\SubCategoryService;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected $subCategoryService;

    public function __construct(SubCategoryService $subCategoryService)
    {
        $this->subCategoryService = $subCategoryService;
    }

    public function index()
    {
        try {
            $data = SubCategory::with('category:id,name')->latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(SubCategoryRequest $request)
    {
        try {
            return $this->subCategoryService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(SubCategoryExcelRequest $request)
    {
        try {
            return $this->subCategoryService->storeByExcel($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }


    public function update(SubCategoryRequest $request)
    {
        try {
            return $this->subCategoryService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = SubCategory::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
