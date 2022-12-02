<?php

namespace App\Services;

use App\Models\SalepointArea;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SalepointAreaService
{
    use ApiResponse;

    public function create(Request $request)
    {
        SalepointArea::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = SalepointArea::find($request->id);
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
