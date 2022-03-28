<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grupa_Przodownik;

class Grupa_PrzodownikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupa_Przodownik::factory()->count(20)->create();
    }
}
