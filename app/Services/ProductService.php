<?php

namespace App\Services;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Traits\ApiResponse;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductService
{
    use ApiResponse, UploadFile;

    public function getAll()
    {
        $data = Product::with(['brand:id,name', 'category:id,name', 'subCategory:id,name'])->latest()->get();
        return $this->successResponse($data);
    }

    public function create(Request $request)
    {
        Product::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = Product::find($request->id);
        $data->update($this->requestAll($request));
        return $this->successResponse();
    }

    public function changeStatus(Request $request)
    {
        $data = Product::find($request->id);
        $data->update([
            'is_active' => !$data->is_active
        ]);
        return $this->successResponse();
    }

    public function requestAll($request)
    {
        return [
            'code' => $request->code,
            'name' => $request->name,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'brand_id' => $request->brand_id,
            'description' => $request->description,
            'image' => $request->image,
            'is_active' => $request->is_active
        ];
    }

    public function storeByExcel(Request $request)
    {

        $path = $this->uploadSimpleFile($request->file('file'), 'products');
        $file = public_path($path);
        $collections = Excel::toCollection(collect(), $file)->first();

        $newCollections = $collections->filter(function ($el) {
            return $el[0] != null;
        });
        unset($newCollections[0]);

        $json = collect();

        $newCollections->map(function ($el, $key) use ($json, $request) {
            if ($key > 0) {
                $json->push([
                    'name' => $el[$this->posLetter($request->name_position)],
                    'code' => $request->code_position ? $el[$this->posLetter($request->code_position)] : null,

                    'category_id' => $this->getCategoryId($el[$this->posLetter($request->category_name_position)]),
                    'sub_category_id' => $this->getSubCategoryId($el[$this->posLetter($request->sub_category_name_position)]),
                    'brand_id' => $this->getBrandId($el[$this->posLetter($request->brand_name_position)]),

                    'description' => $request->description_position ? $el[$this->posLetter($request->description_position)] : null,
                ]);
            }
        });

        $products = collect($json->toArray());

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['code' => $product['code']],
                [
                    'name' => $product['name'],

                    'brand_id' => $product['brand_id'],
                    'category_id' => $product['category_id'],
                    'sub_category_id' => $product['sub_category_id'],

                    'description' => $product['description'],
                ]);
        }

        return $this->successResponse();
    }

    public function createColumnsRange($start = 'A', $end = 'ZZ')
    {
        $return_range = [];
        for ($i = $start; $i !== $end; $i++) {
            $return_range[] = $i;
        }
        return $return_range;
    }

    public function posLetter($char)
    {
        $abcUpper = $this->createColumnsRange('A', 'ZZ');
        return array_search($char, $abcUpper);
    }

    public function getCategoryId($name)
    {
        $data = Category::where('name', $name)->first();
        return $data ? $data->id : null;
    }

    public function getSubCategoryId($name)
    {
        $data = SubCategory::where('name', $name)->first();
        return $data ? $data->id : null;
    }

    public function getBrandId($name)
    {
        $data = Brand::where('name', $name)->first();
        return $data ? $data->id : null;
    }
}
