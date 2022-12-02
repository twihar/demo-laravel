<?php

namespace App\Exports;

use App\Models\Campaign;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;

class CampaignExport implements FromCollection, WithHeadings, WithMapping, WithEvents
{

    public function collection()
    {
        return Campaign::get();
    }

    public function map($row): array
    {
        return [
            $row->name['fr'],
            $row->description['fr'],
            $row->start_date,
            $row->end_date,
            $row->lang,
            Carbon::parse($row->created_at)->format('d-m-Y'),
            $row->is_active,
        ];
    }


    public function headings(): array
    {
        return [
            'Nom',
            'Description',
            'Date de début',
            'Date de fin',
            'Lang',
            'Date de création',
            'Statut',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:G1')
                    ->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB('FF7D14');
            },
        ];
    }
}
