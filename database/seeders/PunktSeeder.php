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
            24 => 'Schronisko PTTK na Hali Gąsienicowej (1500 m)',
            25 => 'Droga "Pod Reglami"',
            26 => 'Polana Biały Potok',
            27 => 'Polana Huciska',
            28 => 'Niżnia Kominiarska Polana (1110 ÷ 1170 m)',
            29 => 'Schronisko PTTK na Polanie Chochołowskiej (1146 m)',
            30 => 'Trzydniowiański Wierch (1758 m)',
            31 => 'Magura Witowska TPG (1232 m)',
            32 => 'Palenica Kościeliska (1183 m)',
            33 => 'Butorowy Wierch (1160 m)',
            34 => 'Gubałówka (1126 m)',
            35 => 'Eliaszówka',
            36 => 'Szaflary',
            37 => 'SIVY VRCH (X C, Z) (1805 m)',
            38 => 'BOBROVECKA VAPENICA Parking/Schronisko Mnich (750 m)',
            39 => 'JALOVSKA DOLINA USTIE (X) (800 m)',
            40 => 'DOLINA PARICHVOST RAZC. (X Z, N) (1125 m)',
            41 => 'BRESTOVA (X C, N) (1934 m)',
            42 => 'BANIKOVSKE SEDLO (X) (2040 m) (Przełęcz Banikovska)',
            43 => 'TATRANSKA MAGISTRALA',
            44 => 'DOJŚCIA W REJONIE MAGISTRALI',
            45 => 'TRI STUDNICKY (X C, Z, N) (1141 m)',
            46 => 'STRBSKE PLESO (X Z,C,N,Ż (1346 m)',
            47 => 'MENGUSOVSKA DOLINA RAZC. (X N, C) (1620 m)',
            48 => 'MONKOVA DOLINA TANAP (940 m)',
            49 => 'RAZCESTIE (X Z, N) (900 m) / CIERNA VODA RAZC. (X N, Ż) (880 m)',
            50 => 'VELKE BIELE PLESO (X N, Z, C) (1615 m)',
            51 => 'Dolina Kacza, Czeska i okolice',
            52 => 'Otoczenie doliny Mięguszowieckiej',
            53 => 'Dolina Wielicka i Batyżowiecka',
            54 => 'Dolina Pięciu Stawów Spiskich, masyw Łomnicy i Lodowego',
            55 => 'Inne',
            56 => 'HADLANKA (1129 m)',
            57 => 'HLADELSKE SEDLO',
            58 => 'VELKA CHOCHULA (1753 m)',
            59 => 'KOSARISKO (1694 m)',
            60 => 'SEDLO POD SKALKOU (1476 m)',
            61 => 'SEDLO LATIBORSKIEJ HOLE (1547 m)',
        ];
        
        foreach($punkty as $klucz => $punkt) {
            DB::table('punkt')->insert([
                'id' => $klucz,
                'nazwa' => $punkt,
                'created_at' => $generator->dateTime(),
                'updated_at' => $generator->dateTime(),
            ]);
        }
    }
}
