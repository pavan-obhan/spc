<?php

namespace App\Http\Controllers;

use App\Exports\ItemMultiSheetExport;
use App\Imports\InspectionDefinitionItemsImport;
use App\Models\InspectionDefinition;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $file = $request->file('file')->store('import');
        $import = new InspectionDefinitionItemsImport();
        $import->import($file);
        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }
        return back()->with('status', 'Excel File imported Successfully');
    }

}
