<?php

namespace Database\Seeders;

use App\Models\Grupa;
use Illuminate\Database\Seeder;

class GrupaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupa::factory()->count(20)->create();
    }
}
