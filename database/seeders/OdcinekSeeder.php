<?php

namespace Database\Seeders;

use App\Models\Odcinek;
use Illuminate\Database\Seeder;

class OdcinekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Odcinek::factory()->count(20)->create();
    }
}
