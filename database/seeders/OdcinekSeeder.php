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
        DB::table('odcinek')->insert([
            'id_punkt_poczatek' => 1,
            'id_punkt_koniec' => 5,
            'punkty_od' => 6,
            'punkty_do' => 3,
            'otwarty' => 1,
            'created_at' => $generator->dateTimeBetween('-20 days','-10 days'),
            'updated_at' => rand(0,9) < 5 ? null : $generator->dateTimeBetween('-10 days','-5 days'),
        ]);
    }
}
