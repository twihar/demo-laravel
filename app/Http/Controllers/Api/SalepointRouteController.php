<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllExcelRequest;
use App\Http\Requests\SalepointRouteRequest;
use App\Models\SalepointRoute;
use App\Services\ExcelStoreService;
use App\Services\SalepointRouteService;
use Illuminate\Http\Request;

class SalepointRouteController extends Controller
{
    protected $salepointRouteService;
    protected $excelStoreService;

    public function __construct(SalepointRouteService $salepointRouteService, ExcelStoreService $excelStoreService)
    {
        $this->salepointRouteService = $salepointRouteService;
        $this->excelStoreService = $excelStoreService;
    }

    public function index()
    {
        try {
            $data = SalepointRoute::latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(SalepointRouteRequest $request)
    {
        try {
            return $this->salepointRouteService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(AllExcelRequest $request)
    {
        try {
            return $this->excelStoreService->storeByExcel($request,'salepoint_routes');
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(SalepointRouteRequest $request)
    {
        try {
            return $this->salepointRouteService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = SalepointRoute::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
