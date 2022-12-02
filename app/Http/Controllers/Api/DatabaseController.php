<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DatabaseRequest;
use App\Models\Database;
use App\Models\Salepoint;
use App\Services\DatabaseService;
use App\Services\Filter\FilterDatabaseService;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    protected $databaseService;
    protected $filterDatabaseService;

    public function __construct(DatabaseService $databaseService, FilterDatabaseService $filterDatabaseService)
    {
        $this->databaseService = $databaseService;
        $this->filterDatabaseService = $filterDatabaseService;
    }

    public function index()
    {
        try {
            $data = Database::withCount('salepoints')->latest()->get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function getSalepointsByIds(Request $request)
    {
        try {
            return $this->databaseService->getSalepointsByIds($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function filterIds(Request $request)
    {
        try {
            return $this->filterDatabaseService->handleFilterIds($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function store(DatabaseRequest $request)
    {
        try {
            return $this->databaseService->create($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function rename(DatabaseRequest $request)
    {
        try {
            return $this->databaseService->rename($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function delete(Request $request)
    {
        try {
            return $this->databaseService->delete($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function changeStatus(Request $request)
    {
        try {
            return $this->databaseService->changeStatus($request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function showDatabase($id, Request $request)
    {
        try {
            return $this->databaseService->showDatabase($id, $request);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

}
