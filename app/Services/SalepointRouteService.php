<?php

namespace App\Services;

use App\Models\SalepointRoute;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SalepointRouteService
{
    use ApiResponse;

    public function create(Request $request)
    {
        SalepointRoute::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = SalepointRoute::find($request->id);
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
