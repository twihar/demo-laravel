<?php

namespace App\Services;

use App\Models\Category;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class CategoryService
{
    use ApiResponse;

    public function create(Request $request)
    {
        Category::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = Category::find($request->id);
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
