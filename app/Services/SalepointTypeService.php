<?php

namespace App\Services;

use App\Models\SalepointType;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SalepointTypeService
{
    use ApiResponse;

    public function create(Request $request)
    {
        SalepointType::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = SalepointType::find($request->id);
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
