<?php

namespace Database\Factories;

use App\Models\Pasiens;
use App\Models\Polis;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daftars>
 */
class DaftarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pasien_id' => Pasiens::factory(), // Menggunakan factory untuk pasien
            'tanggal_daftar' => $this->faker->date(), // Tanggal pendaftaran acak
            'poli_id' => Polis::factory(), // Menggunakan factory untuk poli
            'keluhan' => $this->faker->sentence(10), // Keluhan acak dengan 10 kata
            'diagnosis' => $this->faker->optional()->text(200), // Diagnosis nullable
            'tindakan' => $this->faker->optional()->text(200), // Tindakan nullable
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
