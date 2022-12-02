<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllExcelRequest;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Services\BrandService;
use App\Services\ExcelStoreService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brandService;
    protected $excelStoreService;

    public function __construct(BrandService $brandService, ExcelStoreService $excelStoreService)
    {
        $this->brandService = $brandService;
        $this->excelStoreService = $excelStoreService;
    }

    public function index()
    {
        try {
            $data = Brand::latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(BrandRequest $request)
    {
        try {
            return $this->brandService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(AllExcelRequest $request)
    {
        try {
            return $this->excelStoreService->storeByExcel($request, 'brands');
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(BrandRequest $request)
    {
        try {
            return $this->brandService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = Brand::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
