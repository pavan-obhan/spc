<?php

namespace Database\Factories;

use App\Models\InspectionDefinition;
use Illuminate\Database\Eloquent\Factories\Factory;

class InspectionDefinitionGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'inspection_definition_id'=>InspectionDefinition::factory(),
            'name'=>$this->faker->word()
        ];
    }
}
