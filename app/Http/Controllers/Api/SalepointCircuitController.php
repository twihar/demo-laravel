<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllExcelRequest;
use App\Http\Requests\SalepointCircuitRequest;
use App\Models\SalepointCircuit;
use App\Services\ExcelStoreService;
use App\Services\SalepointCircuitService;
use Illuminate\Http\Request;

class SalepointCircuitController extends Controller
{
    protected $salepointCircuitService;
    protected $excelStoreService;

    public function __construct(SalepointCircuitService $salepointCircuitService, ExcelStoreService $excelStoreService)
    {
        $this->salepointCircuitService = $salepointCircuitService;
        $this->excelStoreService = $excelStoreService;
    }

    public function index()
    {
        try {
            $data = SalepointCircuit::latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(SalepointCircuitRequest $request)
    {
        try {
            return $this->salepointCircuitService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(AllExcelRequest $request)
    {
        try {
            return $this->excelStoreService->storeByExcel($request, 'salepoint_circuits');
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(SalepointCircuitRequest $request)
    {
        try {
            return $this->salepointCircuitService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = SalepointCircuit::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
