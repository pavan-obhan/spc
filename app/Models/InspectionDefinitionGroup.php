<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionDefinitionGroup extends Model
{
    use HasFactory;

    public function inspectionDefination()
    {
        return $this->belongsTo(InspectionDefinition::class, 'inspection_definition_id');
    }

}
