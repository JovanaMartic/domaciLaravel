<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Iznajmljivanje>
 */
class IznajmljivanjeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

                'ocena' => $this->faker->numberBetween(1, 5),
                'body' => $this->faker->sentence(20),
        ];
    }
}
