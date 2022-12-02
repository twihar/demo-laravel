<?php


namespace App\Services\Filter;

use App\Models\Salepoint;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class FilterDatabaseService
{
    use ApiResponse;

    public function handleFilterIds(Request $request)
    {
        $data = Salepoint::latest();

        $filter = json_decode($request->filter);

        if ($filter) {

            if (isset($filter->databaseIds) && count($filter->databaseIds) > 0) {
                $data->whereIn('database_id', $filter->databaseIds);
            }

            if (isset($filter->cityIds) && count($filter->cityIds) > 0) {
                $data->whereIn('city_id', $filter->cityIds);
            }

            if (isset($filter->regionIds) && count($filter->regionIds) > 0) {
                $data->whereIn('region_id', $filter->regionIds);
            }

            if (isset($filter->typeIds) && count($filter->typeIds) > 0) {
                $data->whereIn('salepoint_type_id', $filter->typeIds);
            }

            if (isset($filter->routeIds) && count($filter->routeIds) > 0) {
                $data->whereIn('salepoint_route_id', $filter->routeIds);
            }
        }

        return $this->successResponse($data->pluck('id')->toArray());
    }
}
