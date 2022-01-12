<?php

namespace App\Imports;

use App\Models\InspectionDefinition;
use App\Models\InspectionDefinitionGroup;
use App\Models\InspectionDefinitionItem;
use App\Models\MeasuringTool;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class InspectionDefinitionItemsImport implements ToCollection, WithHeadingRow, SkipsOnFailure, SkipsOnError
{
    use Importable, SkipsFailures, SkipsErrors;

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $item = new InspectionDefinitionItem();
            $item->inspection_definition_id
                = InspectionDefinition::where('description', $row['description'])->first()->id;
            $item->inspection_definition_group_id
                = InspectionDefinitionGroup::where('name', $row['group'])->first()->id;
            $item->reference_number = $row['reference_number'];
            $item->measuring_tool_id
                = MeasuringTool::where('name',$row['measuring_tool'])->first()->id;
            $item->serial_number = $row['serial_number'];
            $item->specification = $row['specification'];
            $item->created_at = $row['date'];
            $item->lower_specification_limit = $row['lower_specification_limit'];
            $item->upper_specification_limit = $row['upper_specification_limit'];
            $item->spc_enabled = $row['spc_enabled'];
            $item->inspection_item->value = $row['value'];
            $item->save();
        }
    }
}
