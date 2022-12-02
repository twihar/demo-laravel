<?php

namespace App\Services;

use App\Models\Investigation;
use Carbon\Carbon;

class InvestigationService
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function store($investigations, $campaignId)
    {
        $collect = collect();

        foreach ($investigations as $item) {
            $investigation = Investigation::create([
                'campaign_id' => $campaignId,
                'name' => $item['name'],
                'description' => $item['description'],
                'amount' => $item['amount'],
                'image' => $item['image'],
                'start_date' => $item['dates'][0],
                'end_date' => $item['dates'][1],
                'is_model' => $item['isModel'],
                'is_active' => $item['isActive']
            ]);

            $this->taskService->store($item['tasks'], $investigation->id);

            /** Assignment **/
            $investigation->salepoints()->attach($item['salepointIds']);

            /** Send notification **/
            if ($investigation->start_date === Carbon::now()->format('Y-m-d')) {
                foreach ($item['salepointIds'] as $id) {
                    $collect->push($id);
                }
            }

        }

        /** Send notification **/
        $res = array_count_values($collect->toArray());
        foreach ($res as $key => $value) {
            $this->sendNotification([$key], $value);
        }
    }

    public function sendNotification($salepointIds, $total)
    {
        $details = [
            'title_fr' => $total . ' - Nouvelle tâches',
            'title_en' => $total . ' - New tasks',
            'title_ar' => ' - مهام جديدة' . $total,
            'body_fr' => $total . ' - Nouvelle tâches disponible',
            'body_en' => $total . ' - New tasks available',
            'body_ar' => 'مهام جديدة متاحة' . $total,
            'image' => ''
        ];
        $this->sendFirebaseNotification($details, $salepointIds);
    }
}


