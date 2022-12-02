<?php

namespace App\Services;

use App\Models\SalepointZone;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SalepointZoneService
{
    use ApiResponse;

    public function create(Request $request)
    {
        SalepointZone::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = SalepointZone::find($request->id);
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
