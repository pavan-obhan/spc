<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeasuringTool extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $name;

    public function inspection_definition_item()
    {
        return $this->hasMany(InspectionDefinitionItem::class);
    }
}
