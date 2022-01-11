<?php

namespace Database\Seeders;

use App\Models\Inspection;
use App\Models\InspectionDefinition;
use App\Models\InspectionDefinitionGroup;
use App\Models\InspectionDefinitionItem;
use App\Models\InspectionItem;
use App\Models\MeasuringTool;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $product = new Product();
        $product->name = "Housing";
        $product->save();
        $product = new Product();
        $product->name = "Knob";
        $product->save();

        $tool = new MeasuringTool();
        $tool->name = "Air Gauge";
        $tool->type = 1;
        $tool->save();

        $tool = new MeasuringTool();
        $tool->name = "Plug Gauge";
        $tool->type = 0;
        $tool->save();

        $tool = new MeasuringTool();
        $tool->name = "Digital Depth Caliper";
        $tool->type = 1;
        $tool->save();

        $tool = new MeasuringTool();
        $tool->name = "Digital Interest";
        $tool->type = 0;
        $tool->save();

        $definition = new InspectionDefinition();
        $definition->description = "Housing TS93 EN2-5";
        $definition->product_id = 1;
        $definition->save();
        $definition = new InspectionDefinition();
        $definition->description = "Knob EN2-5";
        $definition->product_id = 2;
        $definition->save();

        $inspection_group = new InspectionDefinitionGroup();
        $inspection_group->name = "Cylinderbore";
        $inspection_group->inspection_definition_id = 1;
        $inspection_group->save();

        $inspection_group = new InspectionDefinitionGroup();
        $inspection_group->name = "Bearing Housing";
        $inspection_group->inspection_definition_id = 1;
        $inspection_group->save();

        $inspection_group = new InspectionDefinitionGroup();
        $inspection_group->name = "Valve Hole";
        $inspection_group->inspection_definition_id = 2;
        $inspection_group->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 1;
        $item->measuring_tool_id = 1;
        $item->serial_number = 1234;
        $item->specification = "ABCD1";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 2;
        $item->measuring_tool_id = 2;
        $item->serial_number = 1231;
        $item->specification = "ABCD2";
        $item->spc_enabled = 0;
        $item->upper_specification_limit = 5;
        $item->lower_specification_limit = 4;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 3;
        $item->measuring_tool_id = 3;
        $item->serial_number = 1232;
        $item->specification = "ABCD3";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 100;
        $item->lower_specification_limit = 99;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 2;
        $item->reference_number = 4;
        $item->measuring_tool_id = 4;
        $item->serial_number = 1234;
        $item->specification = "ABCD1";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 3;
        $item->reference_number = 5;
        $item->measuring_tool_id = 1;
        $item->serial_number = 1236;
        $item->specification = "ABC123";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 6;
        $item->measuring_tool_id = 2;
        $item->serial_number = 12;
        $item->specification = "XYZ";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 7;
        $item->measuring_tool_id = 3;
        $item->serial_number = 1234;
        $item->specification = "XYZ2";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 8;
        $item->measuring_tool_id = 4;
        $item->serial_number = 1234;
        $item->specification = "PQR";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 9;
        $item->measuring_tool_id = 1;
        $item->serial_number = 1234;
        $item->specification = "STV";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 10;
        $item->measuring_tool_id = 2;
        $item->serial_number = 1234;
        $item->specification = "UVW";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 11;
        $item->measuring_tool_id = 3;
        $item->serial_number = 1234;
        $item->specification = "LMN";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 1;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 12;
        $item->measuring_tool_id = 4;
        $item->serial_number = 1234;
        $item->specification = "OPQ";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 2;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 13;
        $item->measuring_tool_id = 1;
        $item->serial_number = 1234;
        $item->specification = "RST";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;

        $item->save();

        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 2;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 14;
        $item->measuring_tool_id = 1;
        $item->serial_number = 1234;
        $item->specification = "EFG";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();


        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 2;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 15;
        $item->measuring_tool_id = 1;
        $item->serial_number = 1234;
        $item->specification = "HIJ";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();


        $item = new InspectionDefinitionItem();
        $item->inspection_definition_id = 2;
        $item->inspection_definition_group_id = 1;
        $item->reference_number = 16;
        $item->measuring_tool_id = 1;
        $item->serial_number = 1234;
        $item->specification = "BCD";
        $item->spc_enabled = 1;
        $item->upper_specification_limit = 10;
        $item->lower_specification_limit = 9;
        $item->save();


        $inspection = new Inspection();
        $inspection->inspection_definition_id = 1;
        $inspection->inspection_date_time = date('Y-m-d H:i:s');
        $inspection->fixture_number = 1.99;
        $inspection->save();

        $inspection = new Inspection();
        $inspection->inspection_definition_id = 1;
        $inspection->inspection_date_time = date('Y-m-d H:i:s');
        $inspection->fixture_number = 12.99;
        $inspection->save();

        $inspection = new Inspection();
        $inspection->inspection_definition_id = 2;
        $inspection->inspection_date_time = date('Y-m-d H:i:s');
        $inspection->fixture_number = 10.99;
        $inspection->save();

        $inspection = new Inspection();
        $inspection->inspection_definition_id = 2;
        $inspection->inspection_date_time = date('Y-m-d H:i:s');
        $inspection->fixture_number = 11.99;
        $inspection->save();

        $inspection_item = new InspectionItem();
        $inspection_item->inspection_id = 2;
        $inspection_item->inspection_definition_item_id = 4;
        $inspection_item->value = 1;
        $inspection_item->save();


        $inspection_item = new InspectionItem();
        $inspection_item->inspection_id = 3;
        $inspection_item->inspection_definition_item_id = 2;
        $inspection_item->value = 1;
        $inspection_item->save();


        $inspection_item = new InspectionItem();
        $inspection_item->inspection_id = 1;
        $inspection_item->inspection_definition_item_id = 3;
        $inspection_item->value = 1;
        $inspection_item->save();

        $inspection_item = new InspectionItem();
        $inspection_item->inspection_id = 1;
        $inspection_item->inspection_definition_item_id = 1;
        $inspection_item->value = 1;
        $inspection_item->save();
    }
}
