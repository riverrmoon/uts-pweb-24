<?php

namespace Database\Seeders;

use App\Models\Pasiens;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PasiensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // In a seeder
        Pasiens::factory()->count(50)->create();
    }
}
