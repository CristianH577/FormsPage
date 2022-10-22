<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitude>
 */
class SolicitudeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'form' => rand(1,4),
            'mode' => rand(1,2),
            'submode' => rand(1,2),

            'data1Select1' => rand(1,2),
            'data1Part1Input1' => fake()->sentence(2),

            'data2Select1' => rand(1,2),
            'data2Part1Input1' => fake()->sentence(2),

            'data3Input1' => fake()->sentence(2),
            'data3Select1' => rand(1,3),
            'data3Input2' => fake()->sentence(2)
        ];
    }
}
