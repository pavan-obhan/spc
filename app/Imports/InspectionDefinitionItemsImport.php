<?php

namespace App\Imports;

use App\Models\InspectionDefinition;
use App\Models\InspectionDefinitionGroup;
use App\Models\InspectionDefinitionItem;
use App\Models\MeasuringTool;
use App\Models\Product;
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


            if (!InspectionDefinition::where('description', $row['description'])->first()) {
                if (!Product::where('name', $row['description'])->first()) {
                    $product = new Product();
                    $product->name = $row['description'];
                    $product->save();
                }
                $definition = new InspectionDefinition();
                $definition->description = $row['description'];
                $definition->product_id
                    = Product::where('name', $row['description'])->first()->id;
                $definition->save();
            }
            $item->inspection_definition_id = InspectionDefinition::where('description', $row['description'])->first()->id;

            if (!InspectionDefinitionGroup::where('name', $row['group'])->first()) {
                $group = new InspectionDefinitionGroup();
                $group->name = $row['group'];
                $group->inspection_definition_id = InspectionDefinition::where('description', $row['description'])->first()->id;
                $group->save();
            }
            $item->inspection_definition_group_id
                = InspectionDefinitionGroup::where('name', $row['group'])->first()->id;


            $item->reference_number = $row['reference_number'];

            if (!MeasuringTool::where('name',$row['measuring_tool'])->first()){
                $tool = new MeasuringTool();
                $tool->name = $row['measuring_tool'];
                $tool->type = $row['value'];
                $tool->save();
            }
            $item->measuring_tool_id
                = MeasuringTool::where('name', $row['measuring_tool'])->first()->id;

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
