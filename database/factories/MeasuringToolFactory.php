<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MeasuringToolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(),
            'type'=>$this->faker->boolean()
        ];
    }
}
