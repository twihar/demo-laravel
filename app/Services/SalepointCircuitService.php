<?php

namespace App\Services;

use App\Models\SalepointCircuit;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SalepointCircuitService
{
    use ApiResponse;

    public function create(Request $request)
    {
        SalepointCircuit::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = SalepointCircuit::find($request->id);
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
