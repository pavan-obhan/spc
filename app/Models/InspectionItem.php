<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionItem extends Model
{
    use HasFactory;

    public function inspection()
    {
        return $this->belongsTo(Inspection::class);
    }

    public function inspectionDefinitionItem()
    {
        return $this->belongsTo(InspectionDefinition::class, 'inspection_definition_item_id');
    }
}
