<?php

namespace App\Exports;

use App\Models\InspectionDefinitionGroup;
use App\Models\InspectionDefinitionItem;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class InspectionExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $items = InspectionDefinitionItem::all();
        foreach ($items as $item) {
            $table[] = [
                $item->inspectionDefinitionGroup->name,
                $item->reference_number,
                $item->measuring_tool->name,
                $item->serial_number,
                $item->specification,
                $item->created_at,
                $item->inspectionDefinition->inspection->pluck('fixture_number')->implode(','),
                $item->inspection_item->pluck('value')->implode(' ')
            ];
        }
        return collect([
          ['Inspection Group','Reference Number','Measuring Tool','Serial Number','Specification','Date','FixtureNumber','Value'],
          $table
        ]);
    }
}
