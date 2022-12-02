<?php

namespace App\Services;

use App\Models\City;
use App\Models\Database;
use App\Models\Region;
use App\Models\Salepoint;
use App\Models\SalepointArea;
use App\Models\SalepointCircuit;
use App\Models\SalepointCluster;
use App\Models\SalepointRoute;
use App\Models\SalepointSupplyType;
use App\Models\SalepointType;
use App\Models\SalepointZone;
use App\Traits\ApiResponse;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DatabaseService
{
    use ApiResponse, UploadFile;

    public function create(Request $request)
    {

        $path = $this->uploadSimpleFile($request->file('file'), 'database');

        $database = Database::create([
            'name' => $request->name,
            'path' => $path,
        ]);

        $file = public_path($path);
        $theCollection = Excel::toCollection(collect([]), $file)[0];

        $rows = $theCollection->filter(function ($el) {
            return $el[0] != null;
        });

        unset($rows[0]);

        $allErrors = collect();

        foreach ($rows as $key => $row) {
            $key = $key + 1;
            $errors = collect();
            //name
            if (!$row[1]) {
                $errors->push([
                    'row' => $key,
                    'message' => 'Le nom pos est obligatoire.'
                ]);
            }
            if (strlen($row[1]) < 4) {
                $errors->push([
                    'row' => $key,
                    'message' => 'Le nom pos doit contenir au moins 4 caractères.'
                ]);
            }

            //Type
            if (!$row[3]) {
                $errors->push([
                    'row' => $key,
                    'message' => 'Le type est obligatoire.'
                ]);
            }

            if (count($errors) === 0) {

                $city = City::where('name', $row[3])->first();
                $region = Region::where('name', $row[4])->first();

                $type = SalepointType::where('name', $row[8])->first();
                $area = SalepointArea::where('name', $row[9])->first();
                $zone = SalepointZone::where('name', $row[10])->first();
                $circuit = SalepointCircuit::where('name', $row[11])->first();
                $cluster = SalepointCluster::where('name', $row[12])->first();
                $supplyType = SalepointSupplyType::where('name', $row[13])->first();
                $route = SalepointRoute::where('name', $row[14])->first();

                Salepoint::updateOrCreate(
                    [
                        'code' => $row[0],
                    ],
                    [
                        'name' => $row[1],
                        'phone' => $row[2],
                        'city_id' => $city ? $city->id : null,
                        'region_id' => $region ? $region->id : null,
                        'address' => $row[5],
                        'latitude' => $row[6],
                        'longitude' => $row[7],
                        'opus_account' => false,

                        'salepoint_type_id' => $type ? $type->id : null,
                        'salepoint_area_id' => $area ? $area->id : null,
                        'salepoint_zone_id' => $zone ? $zone->id : null,
                        'salepoint_circuit_id' => $circuit ? $circuit->id : null,
                        'salepoint_cluster_id' => $cluster ? $cluster->id : null,
                        'salepoint_supply_type_id' => $supplyType ? $supplyType->id : null,
                        'salepoint_route_id' => $route ? $route->id : null,

                        'database_id' => $database->id,
                    ]);
            } else {
                $allErrors->push($errors);
            }
        }

        if (count($allErrors) > 0) {
            return $this->errorResponse([
                'errors' => $allErrors,
            ]);

        } else {
            return $this->successResponse();
        }
    }

    public function rename(Request $request)
    {
        $data = Database::find($request->id);
        $data->update([
            'name' => $request->name
        ]);
        return $this->successResponse();
    }

    public function delete(Request $request)
    {
        $data = Database::find($request->id);
        $data->delete();
        return $this->successResponse();
    }

    public function changeStatus(Request $request)
    {
        $data = Database::find($request->id);
        $data->update([
            'is_active' => !$data->is_active
        ]);
        return $this->successResponse();
    }

    public function showDatabase($id, Request $request)
    {
        $data = Salepoint::with([
            'database:id,name',
            'city:id,name',
            'region:id,name',
            'salepointType:id,name',
            'salepointArea:id,name',
            'salepointZone:id,name',
            'salepointCircuit:id,name',
            'salepointCluster:id,name',
            'salepointSupplyType:id,name',
        ])->where('database_id', $id)->paginate($request->perPage);
        return $this->successResponse($data);
    }

    public function getSalepointsByIds(Request $request)
    {
        if ($request->ids && count($request->ids) > 0){
            $data = Salepoint::with([
                'city:id,name',
                'region:id,name',
                'salepointType:id,name',
                'salepointArea:id,name',
                'salepointZone:id,name',
                'salepointCircuit:id,name',
                'salepointCluster:id,name',
                'salepointSupplyType:id,name',
            ])->whereIn('id', $request->ids)->paginate($request->perPage);
            return $this->successResponse($data);
        }
        return $this->errorResponse('No matching records found','');
    }


}
