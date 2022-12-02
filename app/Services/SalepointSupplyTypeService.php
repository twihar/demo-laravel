<?php

namespace App\Services;

use App\Models\SalepointSupplyType;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SalepointSupplyTypeService
{
    use ApiResponse;

    public function create(Request $request)
    {
        SalepointSupplyType::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = SalepointSupplyType::find($request->id);
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
