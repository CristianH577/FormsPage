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

            'modeSelect1' => rand(1,2),
            'modePart1Input1' => fake()->sentence(2),

            'submodeSelect1' => rand(1,2),
            'submodePart1Input1' => fake()->sentence(2),

            'rqFormInput1' => fake()->sentence(2),
            'rqFormSelect1' => rand(1,3),
            'rqFormDate1Day' => rand(1,30),
            'rqFormDate1Month' => rand(1,12),
            'rqFormDate1Year' => rand(2000,2022)
        ];
    }
}
