<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasiens>
 */
class PasiensFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_pasien' => $this->faker->unique()->numerify('PAS####'), // Unique patient number
            'nama' => $this->faker->name, // Random name
            'jenis_kelamin' => $this->faker->randomElement(['laki-laki', 'perempuan']), // Random gender
            'umur' => $this->faker->numberBetween(1, 100), // Random age as a number (e.g., 25)
            'alamat' => $this->faker->address, // Random address
            'foto' => $this->faker->imageUrl(640, 480, 'people'), // Random image URL
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
