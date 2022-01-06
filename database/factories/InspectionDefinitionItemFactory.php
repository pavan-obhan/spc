<?php

namespace Database\Factories;

use App\Models\InspectionDefinition;
use App\Models\InspectionDefinitionGroup;
use App\Models\MeasuringTool;
use Illuminate\Database\Eloquent\Factories\Factory;

class InspectionDefinitionItemFactory extends Factory
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
            'inspection_definition_group_id'=>InspectionDefinitionGroup::factory(),
            'reference_number'=>$this->faker->buildingNumber(),
            'measuring_tool_id'=>MeasuringTool::factory(),
            'serial_number'=>$this->faker->phoneNumber(),
            'specification'=>$this->faker->word(),
            'spc_enabled'=>$this->faker->randomDigit(),
            'upper_specification_limit'=>$this->faker->randomDigit(),
            'lower_specification_limit'=>$this->faker->randomDigit()
        ];
    }
}
