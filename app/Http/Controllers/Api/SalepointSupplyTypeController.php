<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllExcelRequest;
use App\Http\Requests\SalepointSupplyTypeRequest;
use App\Models\SalepointSupplyType;
use App\Services\ExcelStoreService;
use App\Services\SalepointSupplyTypeService;
use Illuminate\Http\Request;

class SalepointSupplyTypeController extends Controller
{
    protected $salepointSupplyTypeService;
    protected $excelStoreService;

    public function __construct(SalepointSupplyTypeService $salepointSupplyTypeService, ExcelStoreService $excelStoreService)
    {
        $this->salepointSupplyTypeService = $salepointSupplyTypeService;
        $this->excelStoreService = $excelStoreService;
    }

    public function index()
    {
        try {
            $data = SalepointSupplyType::latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(SalepointSupplyTypeRequest $request)
    {
        try {
            return $this->salepointSupplyTypeService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(AllExcelRequest $request)
    {
        try {
            return $this->excelStoreService->storeByExcel($request, 'salepoint_supply_types');
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(SalepointSupplyTypeRequest $request)
    {
        try {
            return $this->salepointSupplyTypeService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = SalepointSupplyType::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
