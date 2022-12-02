<?php

namespace App\Services;

use App\Models\SalepointCluster;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SalepointClusterService
{
    use ApiResponse;

    public function create(Request $request)
    {
        SalepointCluster::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = SalepointCluster::find($request->id);
        $data->update($this->requestAll($request));
        return $this->successResponse();
    }

    public function requestAll($request)
    {
        return [
            'name' => $request->name,
            'description' => $request->description
        ];
    }
}
