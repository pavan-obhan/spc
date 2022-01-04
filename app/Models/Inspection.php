<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;

    public function inspectionDefinition()
    {
        return $this->belongsTo(InspectionDefinition::class,'inspection_definition_id');
    }

    public function inspection_item()
    {
        return $this->hasMany(InspectionItem::class);
    }
}
