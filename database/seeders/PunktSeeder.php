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

            25 => 'Droga Pod Reglami',
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

            62 => 'Dzięgielów - Zamek',
            63 => 'Jasieniowa (521 m)',
            64 => 'Schronisko PTTK Tuł (621 m)',
            65 => 'Ostry (712 m)',
            66 => 'Mała Czantoria (864 m)',
            67 => 'Czantoria Wielka (995 m)',

            68 => 'Rachowiec (954 m)',
            69 => 'Bór (704 m) (Przełęcz Graniczne)',
            70 => 'Ożna (952 m)',
            71 => 'Łysica (704 m)',
            72 => 'Magura (1073 m)',
            73 => 'Schronisko PTTK Wielka Racza (1236 m)',

            74 => 'Bujakowski Groń (749 m)',
            75 => 'Hrobacza Łąka (830 m)',
            76 => 'Przełęcz między Gaikami (809 m) a Groniczkami (839 m)',
            77 => 'Przełęcz Przegibek (663 m)',
            78 => 'Magurka Wilkowicka (909 m) - Schronisko PTTK',
            79 => 'Czupel (933 m)',

            80 => 'Łyska (640 m)',
            81 => 'Barutka (614 m)',
            82 => 'Baków (766 m)',
            83 => 'Gachowizna (758 m)',
            84 => 'Ślemień',
            85 => 'Wajdów Groń (677 m)',

            86 => 'Piątkowa (715 m)',
            87 => 'Rabska Góra (783 m)',
            88 => 'Obidowa - PKS Rdzawka II',
            89 => 'Janiłówka (ZB.07)',
            90 => 'Ponice',
            91 => 'Bacówka PTTK Maciejowa (852 m)',

            92 => 'Zębalowa (859 m)',
            93 => 'Schronisko PTTK Luboń Wielki (1022 m)',
            94 => 'Luboń Mały przystanek PKS',
            95 => 'Przełęcz Glisne (634 m)',
            96 => 'Szczebel (976 m)',
            97 => 'Zapadliska (766 m)',

            98 => 'Lipnica Wielka - Kaczory',
            99 => 'Zubrzyca Górna',
            100 => 'Przełęcz między Sidziną a Zubrzycą Górną (757 m) (Nad Wąwozem)',
            101 => 'Kiełek (960 m)',
            102 => 'Beskidy (794 m)',
            103 => 'Góra Ludwiki (653 m)',

            104 => 'Cisowa Skała (685 m)',
            105 => 'Nowa Biała',
            106 => 'Białka',
            107 => 'Jurgów',
            108 => 'Krempachy',
            109 => 'Frydman',

            110 => 'Jaworzynka (936 m)',
            111 => 'Dzwonkówka (983 m)',
            112 => 'Schronisko na Bereśniku (843 m)',
            113 => 'Bryjarka (679 m)',
            114 => 'Schronisko PTTK Prehyba (1175 m)',
            115 => 'Szlachtowa',

            116 => 'Trawna Góra (426 m)',
            117 => 'Draboż (465 m)',
            118 => 'Kalwaria Lanckorona (PKP)',
            119 => 'Bukowiec (405 m) (Lisia Góra)',

            120 => 'Wiśnicz Nowy',
            121 => 'Dominiczna Góra (468 m)',
            122 => 'Rogozowa (531 m)',
            123 => 'Szpilówka (Śpilówka) (516 m)',
            124 => 'Łysa Góra (378 m)',
            125 => 'Panieńska Góra (331 m)',

            126 => 'Przełęcz Pod Kobylnicą',
            127 => 'Dział (455 m)',
            128 => 'Majdan (512 m)',
            129 => 'Jodłowa (715 m)',
            130 => 'Rosochatka (753 m)',
            131 => 'Bukowiec (530 m)',

            132 => 'Góra św. Marcina (384 m)',
            133 => 'Słona Góra (403 m)',
            134 => 'Trzemeska Góra (390 m)',
            135 => 'Gilowa Góra (506 m)',
            136 => 'Liwocz (562 m)',
            137 => 'Ostry Kamień (527 m)',

            138 => 'Margoń Wyżna (774 m)',
            139 => 'Tokarnia (828 m)',
            140 => 'Czerszla (877 m)',
            141 => 'Jaworze (882 m)',
            142 => 'Przełęcz pod Uboczem',
            143 => 'Jaworynki (Sołtys - 756 m)',

            144 => 'Grzbiet Hyrowej (694 m)',
            145 => 'Mszana',
            146 => 'Cergowa (716 m)',
            147 => 'Osiecznik (633 m)',
            148 => 'Przymiarki (Kopa) (640 m)',
            149 => 'Sucha Góra (611 m)',

            150 => 'Dyszowa (719 m)',
            151 => 'Prełuki',
            152 => 'Mików',
            153 => 'Krasna (658 m)',
            154 => 'Nowy Łupków (PKP)',
            155 => 'Wysoki Groń (905 m)',

            156 => 'Kałużówka',
            157 => 'Babia Góra (387 m) Wzgórza nad Warzycami',
            158 => 'Kota nad Gogołowem (454 m)',
            159 => 'Klonowa Góra (534 m)',
            160 => 'Kamieniec (442 m)',
            161 => 'Czarnówka (592 m)',

            162 => 'Jasmanice',
            163 => 'Wapielnica (394 m)',
            164 => 'Żurawica',
            165 => 'Kaczmarowa (407 m)',
            166 => 'Bukowy Garb (428 m)',
            167 => 'kota nad Nienadową',

            168 => 'Guzdek (350 m)',
            169 => 'Sowia Góra (319 m)',
            170 => 'Skłobska Góra (330 m)',
            171 => 'Piekło Nakłańskie (363 m)',
            172 => 'Stara Kuźnica',
            173 => 'Altana (408 m)',
            174 => 'Świnia Góra (390 m)',
            175 => 'Diabla Góra (285 m)',
            176 => 'Sielecka Góra (285 m)',

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
