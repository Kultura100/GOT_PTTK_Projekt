<?php

namespace Database\Seeders;

use App\Models\Pasmo;
use Illuminate\Database\Seeder;

class PasmoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pasmo::factory()->count(20)->create();
    }
}
