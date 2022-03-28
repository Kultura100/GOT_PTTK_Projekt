<?php

namespace Database\Seeders;

use App\Models\Wycieczka;
use Illuminate\Database\Seeder;

class WycieczkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Wycieczka::factory()->count(20)->create();
    }
}
