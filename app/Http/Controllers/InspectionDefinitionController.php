<?php

namespace App\Http\Controllers;
//use App\Models\InspectionDefinition;
use App\Models\InspectionDefinitionItem;

class InspectionDefinitionController extends Controller
{
    public function show()
    {
        return InspectionDefinitionItem::with('inspectionDefinition','inspectionDefinitionGroup')->get();
    }
}
