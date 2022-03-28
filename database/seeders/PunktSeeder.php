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
            1 => 'Dolina Filipka',
            2 => 'Wierch Porońca (1036 m)',
            3 => 'Palenica Białczańska',
            4 => 'Polana pod Wołoszynem 1245 +- 1320 m',
            5 => 'Rusinowa Polana (1170 += 1300 m)',
            6 => 'Wierch Porońca',
            7 => 'Palenica Białczańska',
            8 => 'Łysa Polana',
            9 => 'Rusinowa Polana (1170 +- 1300 m)',
            10 => 'Równia Waskmundzka',
            11 => 'Gęsia Szyja (1489 m)',
            12 => 'Psia Trawka',
            13 => 'Polana pod Wołoszynem',
            14 => 'Czerwony Staw w Dolinie Pańszczyzny',
            15 => 'Schroniska PTTK w Hali Gąsienicowej',
            16 => 'Rówień Waksmundzka',
            17 => 'Schronisko PTTK na Hali Gąsienicowej',
            18 => 'Brzezin',
            19 => 'Psia Trawka',
            20 => 'Palenica Białczańska',
            21 => 'Polana pod Wołoszynem',
            22 => 'Schronisko PTTK w Roztoce',
            23 => 'Wodogrzmoty Mickiewicza',
            24 => 'Wodogrzmoty Mickiewicza',
            25 => 'Wokół Morskiego Oka',
            26 => 'Schronisko PTTK nad Morskim Okiem (1410 m)',
            27 => 'Schronisko PTTK nad Morskim Okiem (1410 m)',
            28 => 'Rysy (2499 m)',
            29 => 'Mięguszowiecka Przełęcz pod Chłopkiem (2307 m)',
            30 => 'Czarny Staw nad Morskim Okiem (1583 m)',
            31 => 'Schronisko PTTK nad Morskim Okiem (1410 m)',
            32 => 'Wrota Chałubińskiego (2022 m)',
            33 => 'Dolina za Mnichem (1785 +- 2100 m)',
            34 => 'Szpiglasowy Wierch (2172 m)',
            35 => 'Tablica S. Bronikowskiego (1740 m)',
            36 => 'Dolina za Mnichem',
            37 => 'Szpiglasowa Przełęcz (2110 m )',
            38 => 'Siklawa',
            39 => 'Schronisko PTTK nad Morskim Okiem (1410 m)',
            40 => 'Szlak Zielony',
            41 => 'Schronisko PTTK w Dolinie Pięciu Stawów Polskich (1671 m)',
            42 => 'Tablica S. Bronikowskiego (1740m)',
            43 => 'Wodogrzmoty Mickiewicza',
            44 => 'Siklawa',
            45 => 'Siklawa',
            46 => 'Kozia Przełęcz (2137 m) (jeden kierunek)',
            47 => 'Kozi Wierch (2291m)',
            48 => 'Tablica S. Bronikowskiego (1740m)',
            49 => 'Kozia Dolinka',
            50 => 'Przełęcz Zawrat (2159m) (jeden kierunek)',
            51 => 'Kozia Przełęcz (2137m)',
            52 => 'Czarny Staw Gąsienicowy (1624 m)',
            53 => 'Tablica S. Bronikowskiego (1740m)',
            54 => 'Przełęcz Zawrat (2159 m)',
            55 => 'Przełęcz Zawrat (2159 m)',
            56 => 'Świnicka Przełęcz (2050 m)',
            57 => 'Świnica (2301 m)',
            58 => 'Przełęcz Liliowa (1952 m)',
            59 => 'Zielony Staw Gąsienicowy (1672 m)',
            60 => 'Świnicka Przełęcz (2050 m)',
            61 => 'Czarny Staw Gąsienicowy (1624 m)',
            62 => 'Zleb Kulczyńskiego przez Zadni Granat',
            63 => 'Kozia Dolinka',
            64 => 'Kozi Wierch (2291 m) (jeden kierunek)',
            65 => 'Kozia Dolinka',
            66 => 'Żleb Kulczyńskiego',
            67 => 'Kozia Dolinka przez Zadni Granat',
            68 => 'Żleb Kulczyńskiego (jeden kierunek)',
            69 => 'Czarny Staw Gąsienicowy (1620 m)',
            70 => 'Skrajny Granat (2225 m)',
            71 => 'Schronisko PTTK w Dolinie Pięciu Stawów Polskich (1671 m)',
            72 => 'Czerwony Staw w Dolinie Pańszczyzny (1645 m)',
            73 => 'Skrajny granat (jeden kierunek)',
            74 => 'Przełęcz Krzyżne (2114 m)',
            75 => 'Kościelca (2156 m)',
            76 => 'Zielony Staw Gąsienicowy (1672 m)',
            77 => 'Czarny Staw Gąsienicowy (1624 m)',
            78 => 'Przełęcz Karb (1853 m)',
            79 => 'Przełęcz Liliowa (1952 m)',
            80 => 'Schronisko PTTK na Hali Gąsienicowej (1500 m)',
            81 => 'Zielony Staw Gąsienicowy (1672 m)',
            82 => 'Dwoiśniak',
            83 => 'Czarny Staw Gąsienicowy (1624 m)',
            84 => 'Czerwony Staw w Dolinie Pańszczyzny (1645 m)',
            85 => 'Schronisko PTTK na Hali Gąsienicowej (1500 m)'
 

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
