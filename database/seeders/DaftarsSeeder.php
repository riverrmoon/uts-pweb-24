<?php

namespace Database\Seeders;

use App\Models\Daftars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaftarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Daftars::factory()->count(50)->create();
    }
}
