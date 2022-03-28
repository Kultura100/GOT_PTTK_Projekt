<?php

namespace Database\Seeders;

use App\Models\Odznaka;
use Illuminate\Database\Seeder;

class OdznakaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Odznaka::factory()->count(20)->create();
    }
}
