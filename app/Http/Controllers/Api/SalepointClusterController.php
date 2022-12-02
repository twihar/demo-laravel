<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllExcelRequest;
use App\Http\Requests\SalepointClusterRequest;
use App\Models\SalepointCluster;
use App\Services\ExcelStoreService;
use App\Services\SalepointClusterService;
use Illuminate\Http\Request;

class SalepointClusterController extends Controller
{
    protected $salepointClusterService;
    protected $excelStoreService;

    public function __construct(SalepointClusterService $salepointClusterService, ExcelStoreService $excelStoreService)
    {
        $this->salepointClusterService = $salepointClusterService;
        $this->excelStoreService = $excelStoreService;
    }

    public function index()
    {
        try {
            $data = SalepointCluster::latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }

    }

    public function store(SalepointClusterRequest $request)
    {
        try {
            return $this->salepointClusterService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function storeByExcel(AllExcelRequest $request)
    {
        try {
            return $this->excelStoreService->storeByExcel($request, 'salepoint_clusters');
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function update(SalepointClusterRequest $request)
    {
        try {
            return $this->salepointClusterService->update($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            $data = SalepointCluster::find($request->id);
            $data->delete();
            return $this->successResponse();
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
