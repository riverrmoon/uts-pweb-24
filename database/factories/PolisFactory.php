<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Polis>
 */
class PolisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'biaya' => $this->faker->randomFloat(2, 1000, 100000), // Biaya antara 1000 hingga 100000
            'keterangan' => $this->faker->optional()->text(200), // Keterangan nullable
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
