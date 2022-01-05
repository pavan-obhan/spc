<?php

namespace App\Http\Controllers;

use App\Models\InspectionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InspectionItemController extends Controller
{
    public function store(Request $request)
    {
        $rules = array(
            'inspection_id' => 'required',
            'inspection_definition_item_id' => 'required',
            'value' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            try {
                $inspectionItem = new InspectionItem();
                $inspectionItem->inspection_id = $request->inspection_id;
                $inspectionItem->inspection_definition_item_id = $request->inspection_definition_item_id;
                $inspectionItem->value = $request->value;
                $inspectionItem->save();
            } catch (Exception $exception) {
                return $exception->getMessage();
            }

            return ['result', 'Value updated successfully'];
        }
    }

    public function update(Request $request)
    {
        $rules = array(
            'id' => 'required',
            'value' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            try {
                $inspectionItem = InspectionItem::find($request->id);
                $inspectionItem->value = $request->value;
                $inspectionItem->save();
                return ['result', 'Value updated successfully'];
            } catch (Exception $exception) {
                return $exception->getMessage();
            }
        }
    }
}
