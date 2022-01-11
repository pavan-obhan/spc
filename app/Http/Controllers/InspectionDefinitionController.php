<?php

namespace App\Http\Controllers;
//use App\Models\InspectionDefinition;
use App\Exports\InspectionExport;
use App\Exports\ItemMultiSheetExport;
use App\Models\InspectionDefinition;
use Maatwebsite\Excel\Facades\Excel;

class InspectionDefinitionController extends Controller
{
    public function index()
    {
        return InspectionDefinition::with('inspection_definition_item', 'inspection_definition_group')->get();
    }

    public function export()
    {

        return Excel::download(new ItemMultiSheetExport(2021), 'inspection.xlsx');
    }

}
