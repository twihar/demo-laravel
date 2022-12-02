<?php

namespace App\Services;

use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\ApiResponse;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SubCategoryService
{
    use ApiResponse, UploadFile;

    public function create(Request $request)
    {
        SubCategory::create($this->requestAll($request));
        return $this->successResponse();
    }

    public function update(Request $request)
    {
        $data = SubCategory::find($request->id);
        $data->update($this->requestAll($request));
        return $this->successResponse();
    }

    public function requestAll($request)
    {
        return [
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description
        ];
    }

    public function storeByExcel(Request $request)
    {

        $path = $this->uploadSimpleFile($request->file('file'), 'brands');
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
                    'category_id' => $this->getCategoryId($el[$this->posLetter($request->category_name_position)]),
                    'description' => $request->description_position ? $el[$this->posLetter($request->description_position)] : null,
                ]);
            }
        });

        $items = collect($json->toArray());

        foreach ($items as $item) {
            SubCategory::updateOrCreate(
                ['name' => $item['name']],
                [
                    'category_id' => $item['category_id'],
                    'description' => $item['description'],
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
}
