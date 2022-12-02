<?php

namespace App\Services;

use App\Traits\ApiResponse;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExcelStoreService
{
    use ApiResponse, UploadFile;

    public function storeByExcel(Request $request, $table)
    {

        $path = $this->uploadSimpleFile($request->file('file'), $table);
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
                    'description' => $request->description_position ? $el[$this->posLetter($request->description_position)] : null
                ]);
            }
        });

        $items = collect($json->toArray());

        foreach ($items as $item) {
            DB::table($table)->updateOrInsert(
                ['name' => $item['name']],
                ['description' => $item['description']]);
        }

        return $this->successResponse();
    }

    public function posLetter($char)
    {
        $abcUpper = range('A', 'Z');
        return array_search($char, $abcUpper);
    }
}
