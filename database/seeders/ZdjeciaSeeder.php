<?php

namespace Database\Seeders;

use App\Models\Zdjecia;
use Illuminate\Database\Seeder;

class ZdjeciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zdjecia::factory()->count(20)->create();
    }
}
