<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WardFactory extends Factory
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
            'name' => $this->faker->streetSuffix(),
            'lga_id' => $this->faker->numberBetween($min = 1, $max = 25)
        ];
    }
}
