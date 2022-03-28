<?php

namespace Database\Seeders;

use App\Models\Punkt;
use Illuminate\Database\Seeder;

class PunktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Punkt::factory()->count(20)->create();
    }
}
