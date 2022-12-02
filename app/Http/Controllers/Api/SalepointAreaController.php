<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllExcelRequest;
use App\Http\Requests\SalepointAreaRequest;
use App\Models\SalepointArea;
use App\Services\ExcelStoreService;
use App\Services\SalepointAreaService;
use Illuminate\Http\Request;

class SalepointAreaController extends Controller
{
    protected $salepointAreaService;
    protected $excelStoreService;

    public function __construct(SalepointAreaService $salepointAreaService, ExcelStoreService $excelStoreService)
    {
        $this->salepointAreaService = $salepointAreaService;
        $this->excelStoreService = $excelStoreService;
    }

    public function index()
    {
        try {
            $data = SalepointArea::latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(SalepointAreaRequest $request)
    {
        try {
            return $this->salepointAreaService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(AllExcelRequest $request)
    {
        try {
            return $this->excelStoreService->storeByExcel($request, 'salepoint_areas');
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(SalepointAreaRequest $request)
    {
        try {
            return $this->salepointAreaService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = SalepointArea::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
