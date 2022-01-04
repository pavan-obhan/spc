<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionDefinition extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function inspection_definition_group()
    {
        return $this->hasMany(InspectionDefinitionGroup::class);
    }

    public function inspection_definition_item()
    {
        return $this->hasMany(InspectionDefinitionItem::class);
    }
}
