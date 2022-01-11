<?php

namespace App\Exports;

use App\Models\InspectionDefinitionItem;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class InspectionExport implements FromCollection, ShouldAutoSize, WithHeadings, WithTitle
{
    private $year,$month;
    public function __construct(int $year, int $month)
    {
        $this->year = $year;
        $this->month = $month;
    }

    public function collection()
    {
        $items = InspectionDefinitionItem::query()
            ->whereYear('created_at',$this->year)
            ->whereMonth('created_at',$this->month)->get();

        $table = $items->map(function ($item){
           return[
               $item->inspectionDefinitionGroup->name,
               $item->reference_number,
               $item->measuring_tool->name,
               $item->serial_number,
               $item->specification,
               $item->created_at->format('d.m.Y'),
               $item->created_at->format('H:i:s'),
               $item->inspectionDefinition->inspection->pluck('fixture_number')->implode(','),
               $item->inspection_item->pluck('value')->implode(' ')
           ];
        });


        return collect([$table]);
    }


    public
    function headings(): array
    {
        return [
            [
                'Group',
                'Reference Number',
                'Measuring Tool',
                'Serial Number',
                'Specification',
                'Date',
                'Time',
                'Value'
            ],
        ];
    }
    public function title(): string
    {
        return \DateTime::createFromFormat('!m',$this->month)->format('F');
    }
}
