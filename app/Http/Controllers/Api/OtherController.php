<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AnswerType;
use App\Models\City;
use App\Models\QuestionType;
use App\Models\Raison;
use App\Models\Region;
use App\Models\Salepoint;

class OtherController extends Controller
{
    public function cities()
    {
        try {
            $ids = Salepoint::whereNotNull('city_id')->select('city_id as id')->distinct()->pluck('id');
            $data = City::find($ids);
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function regions()
    {
        try {
            $ids = Salepoint::whereNotNull('region_id')->select('region_id as id')->distinct()->pluck('id');
            $data = Region::find($ids);
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function questionTypes()
    {
        try {
            $data = QuestionType::get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function answerTypes()
    {
        try {
            $data = AnswerType::get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }

    public function raisons()
    {
        try {
            $data = Raison::get();
            return $this->successResponse($data);
        } catch (\Exception $e) {
            return $this->serverError($e);
        }
    }
}
