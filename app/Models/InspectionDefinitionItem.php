<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionDefinitionItem extends Model
{
    use HasFactory;

    public function inspectionDefinition()
    {
        return $this->belongsTo(InspectionDefinition::class, 'inspection_definition_id');
    }

    public function inspectionDefinitionGroup()
    {
        return $this->belongsTo(InspectionDefinitionGroup::class, 'inspection_definition_group_id');
    }

    public function measuring_tool()
    {
        return $this->belongsTo(MeasuringTool::class);
    }

    public function inspection_item()
    {
     return $this->hasMany(InspectionItem::class);
    }

}
