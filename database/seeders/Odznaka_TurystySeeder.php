<?php

namespace Database\Seeders;

use App\Models\Odznaka_Turysty;
use Illuminate\Database\Seeder;

class Odznaka_TurystySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Odznaka_Turysty::factory()->count(20)->create();
    }
}
