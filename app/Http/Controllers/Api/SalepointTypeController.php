<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllExcelRequest;
use App\Http\Requests\SalepointTypeRequest;
use App\Models\SalepointType;
use App\Services\ExcelStoreService;
use App\Services\SalepointTypeService;
use Illuminate\Http\Request;

class SalepointTypeController extends Controller
{
    protected $salepointTypeService;
    protected $excelStoreService;

    public function __construct(SalepointTypeService $salepointTypeService, ExcelStoreService $excelStoreService)
    {
        $this->salepointTypeService = $salepointTypeService;
        $this->excelStoreService = $excelStoreService;
    }

    public function index()
    {
        try {
            $data = SalepointType::latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(SalepointTypeRequest $request)
    {
        try {
            return $this->salepointTypeService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }


    public function storeByExcel(AllExcelRequest $request)
    {
        try {
            return $this->excelStoreService->storeByExcel($request, 'salepoint_types');
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(SalepointTypeRequest $request)
    {
        try {
            return $this->salepointTypeService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = SalepointType::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
