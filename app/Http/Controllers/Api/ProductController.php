<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductExcelRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        try {
            return $this->productService->getAll();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(ProductRequest $request)
    {
        try {
            return $this->productService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(ProductExcelRequest $request)
    {
        try {
            return $this->productService->storeByExcel($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(ProductRequest $request)
    {
        try {
            return $this->productService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function changeStatus(Request $request)
    {
        try {
            return $this->productService->changeStatus($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = Product::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
