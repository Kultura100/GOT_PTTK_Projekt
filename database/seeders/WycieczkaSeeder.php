<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Wycieczka;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WycieczkaSeeder extends Seeder
{
    public function run()
    {
        Wycieczka::factory()->count(10)->create();
    }
}
