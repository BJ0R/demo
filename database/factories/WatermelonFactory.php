<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Watermelon>
 */
class WatermelonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'color' => $this->faker->word(),
            'size' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
