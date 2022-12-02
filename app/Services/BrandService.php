<?php

namespace App\Services;

use App\Models\Brand;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class BrandService
{
    use ApiResponse;

    public function create(Request $request)
    {
        Brand::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = Brand::find($request->id);
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
