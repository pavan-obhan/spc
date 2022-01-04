<?php

namespace App\Http\Controllers;

use App\Models\Inspection;

class InspectionController extends Controller
{
    public function show()
    {
        return Inspection::with('inspection_item')->get();
    }

}
