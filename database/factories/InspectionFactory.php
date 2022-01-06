<?php

namespace Database\Factories;

use App\Models\InspectionDefinition;
use Illuminate\Database\Eloquent\Factories\Factory;

class InspectionFactory extends Factory
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
            'inspection_date_time'=>$this->faker->date(),
            'fixture_number'=>$this->faker->randomDigit()
        ];
    }
}
