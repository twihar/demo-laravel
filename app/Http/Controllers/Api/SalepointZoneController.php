<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllExcelRequest;
use App\Http\Requests\SalepointZoneRequest;
use App\Models\SalepointZone;
use App\Services\ExcelStoreService;
use App\Services\SalepointZoneService;
use Illuminate\Http\Request;

class SalepointZoneController extends Controller
{
    protected $salepointZoneService;
    protected $excelStoreService;

    public function __construct(SalepointZoneService $salepointZoneService, ExcelStoreService $excelStoreService)
    {
        $this->salepointZoneService = $salepointZoneService;
        $this->excelStoreService = $excelStoreService;
    }

    public function index()
    {
        try {
            $data = SalepointZone::latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(SalepointZoneRequest $request)
    {
        try {
            return $this->salepointZoneService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(AllExcelRequest $request)
    {
        try {
            return $this->excelStoreService->storeByExcel($request, 'salepoint_zones');
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(SalepointZoneRequest $request)
    {
        try {
            return $this->salepointZoneService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = SalepointZone::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
