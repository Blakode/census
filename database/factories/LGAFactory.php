<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LGAFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->citySuffix(),
            'state_id' => $this->faker->numberBetween($min = 1, $max = 15)
        ];
    }
}
