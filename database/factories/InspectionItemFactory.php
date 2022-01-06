<?php

namespace Database\Factories;

use App\Models\Inspection;
use App\Models\InspectionDefinitionItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class InspectionItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'inspection_id'=>Inspection::factory(),
            'inspection_definition_item_id'=>InspectionDefinitionItem::factory(),
            'value'=>$this->faker->randomDigit()
        ];
    }
}
