<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionDefinitionGroup extends Model
{
    use HasFactory;

    public function inspectiondefination()
    {
        return $this->belongsTo(InspectionDefinition::class);
    }
}
