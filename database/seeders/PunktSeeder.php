<?php

namespace Database\Seeders;

use App\Models\Punkt;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class PunktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Punkt::factory()->count(20)->create();

              
        $generator = Factory::create();

        $punkty = [
            1 => 'Rusinowa Polana (1170 += 1300 m)',
            2 => 'Łysa Polana',
            3 => 'Gęsia Szyja (1489 m)',
            4 => 'Rówień Waksmundzka',
            5 => 'Psia Trawka',
            6 => 'Wodogrzmoty Mickiewicza',
            7 => 'Schronisko PTTK nad Morskim Okiem (1410 m)',
            8 => 'Czarny Staw nad Morskim Okiem (1583 m)',
            9 => 'Dolina za Mnichem (1785 +- 2100 m)',
            10 => 'Szpiglasowa Przełęcz (2110 m )',
            11 => 'Schronisko PTTK w Dolinie Pięciu Stawów Polskich (1671 m)',
            12 => 'Siklawa',
            13 => 'Kozi Wierch (2291m)',
            14 => 'Kozia Przełęcz (2137m)',
            15 => 'Przełęcz Zawrat (2159 m)',
            16 => 'Świnica (2301 m)',
            17 => 'Świnicka Przełęcz (2050 m)',
            18 => 'Kozia Dolinka',
            19 => 'Żleb Kulczyńskiego',
            20 => 'Skrajny Granat (2225 m)',
            21 => 'Przełęcz Krzyżne (2114 m)',
            22 => 'Przełęcz Karb (1853 m)',
            23 => 'Dwoiśniak',
            24 => 'Schronisko PTTK na Hali Gąsienicowej (1500 m)'
        ];
        
        foreach($punkty as $klucz => $punkt) {
            DB::table('punkt')->insert([
                'id' => $klucz,
                'nazwa' => $punkt,
                'created_at' => $generator->dateTimeBetween('-20 days','-10 days'),
                'updated_at' => rand(0,9) < 5 ? null : $generator->dateTimeBetween('-10 days','-5 days'),
            ]);
        }
    }
}
