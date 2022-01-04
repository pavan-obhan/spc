<?php

namespace App\Http\Controllers;
//use App\Models\InspectionDefinition;
use App\Models\InspectionDefinition;
use App\Models\InspectionDefinitionItem;

class InspectionDefinitionController extends Controller
{
    public function show()
    {
        return InspectionDefinition::with('inspection_definition_item','inspection_definition_group')->get();
    }
}
