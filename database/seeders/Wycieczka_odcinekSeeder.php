<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wycieczka_odcinek;

class Wycieczka_odcinekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wycieczka_odcinek::factory()->count(20)->create();
    }
}
