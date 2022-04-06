<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PodPunktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generator = Factory::create();
        $punkty = [
            1 => 'Dolina Filipka',
            2 => 'Wierch Porońca (1036 m)',
            3 => 'Palenica Białczańska',
            4 => 'Polana pod Wołoszynem 1245 +- 1320 m',
            5 => 'Wierch Porońca',
            6 => 'Palenica Białczańska',
            7 => 'Rusinowa Polana (1170 +- 1300 m)',
            8 => 'Równia Waskmundzka',
            9 => 'Psia Trawka',
            10 => 'Polana pod Wołoszynem',
            11 => 'Czerwony Staw w Dolinie Pańszczyzny',
            12 => 'Schroniska PTTK w Hali Gąsienicowej',
            13 => 'Schronisko PTTK na Hali Gąsienicowej',
            14 => 'Brzezin',
            15 => 'Palenica Białczańska',
            16 => 'Polana pod Wołoszynem',
            17 => 'Schronisko PTTK w Roztoce',
            18 => 'Wodogrzmoty Mickiewicza',
            19 => 'Wokół Morskiego Oka',
            20 => 'Schronisko PTTK nad Morskim Okiem (1410 m)',
            21 => 'Rysy (2499 m)',
            22 => 'Mięguszowiecka Przełęcz pod Chłopkiem (2307 m)',
            23 => 'Schronisko PTTK nad Morskim Okiem (1410 m)',
            24 => 'Wrota Chałubińskiego (2022 m)',
            25 => 'Szpiglasowy Wierch (2172 m)',
            26 => 'Tablica S. Bronikowskiego (1740 m)',
            27 => 'Dolina za Mnichem',
            28 => 'Siklawa',
            29 => 'Schronisko PTTK nad Morskim Okiem (1410 m)',
            30 => 'Szlak Zielony',
            31 => 'Tablica S. Bronikowskiego (1740m)',
            32 => 'Wodogrzmoty Mickiewicza',
            33 => 'Siklawa',
            34 => 'Kozia Przełęcz (2137 m) (jeden kierunek)',
            35 => 'Tablica S. Bronikowskiego (1740m)',
            36 => 'Kozia Dolinka',
            37 => 'Przełęcz Zawrat (2159m) (jeden kierunek)',
            38 => 'Czarny Staw Gąsienicowy (1624 m)',
            39 => 'Tablica S. Bronikowskiego (1740m)',
            40 => 'Przełęcz Zawrat (2159 m)',
            41 => 'Świnicka Przełęcz (2050 m)',
            42 => 'Przełęcz Liliowa (1952 m)',
            43 => 'Zielony Staw Gąsienicowy (1672 m)',
            44 => 'Czarny Staw Gąsienicowy (1624 m)',
            45 => 'Zleb Kulczyńskiego przez Zadni Granat',
            46 => 'Kozi Wierch (2291 m) (jeden kierunek)',
            47 => 'Kozia Dolinka',
            48 => 'Kozia Dolinka przez Zadni Granat',
            49 => 'Żleb Kulczyńskiego (jeden kierunek)',
            50 => 'Czarny Staw Gąsienicowy (1620 m)',
            51 => 'Schronisko PTTK w Dolinie Pięciu Stawów Polskich (1671 m)',
            52 => 'Czerwony Staw w Dolinie Pańszczyzny (1645 m)',
            53 => 'Skrajny granat (jeden kierunek)',
            54 => 'Kościelca (2156 m)',
            55 => 'Zielony Staw Gąsienicowy (1672 m)',
            56 => 'Czarny Staw Gąsienicowy (1624 m)',
            57 => 'Przełęcz Liliowa (1952 m)',
            58 => 'Schronisko PTTK na Hali Gąsienicowej (1500 m)',
            59 => 'Zielony Staw Gąsienicowy (1672 m)',
            60 => 'Czarny Staw Gąsienicowy (1624 m)',
            61 => 'Czerwony Staw w Dolinie Pańszczyzny (1645 m)',
        ];

        $licznik = 1;

        foreach($punkty as $klucz => $punkt) {
            if($klucz == 5 || $klucz == 7 || $klucz == 9 || $klucz == 13 || $klucz == 15 || $klucz == 18 || $klucz == 20 || $klucz == 23 || $klucz == 25 || $klucz == 28 || $klucz == 31 || $klucz == 33 || $klucz == 35 || $klucz == 38 || $klucz == 40 || $klucz == 42 || $klucz == 44 || $klucz == 46 || $klucz == 48 || $klucz == 51 || $klucz == 54 || $klucz == 57 || $klucz == 60  ) {$licznik++;}
            DB::table('podpunkt')->insert([
                'nazwa' => $punkt,
                'id_punkt' => $licznik,
                'created_at' => $generator->dateTimeBetween('-20 days','-10 days'),
                'updated_at' => rand(0,9) < 5 ? null : $generator->dateTimeBetween('-10 days','-5 days'),
            ]);
        }
    }
}
