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

            177 => 'Fajna Ryba (347 m)',
            178 => 'Buczyna (336 m)',
            179 => 'Kozłowa (337 m)',
            180 => 'Świdzyńska (311 m)',
            181 => 'Święty Michał (332 m) Ł03',

            //Pasmo 29
            182 => 'Góra Dobrzeszowska (364 m)',
            183 => 'Siniewska Góra (449 m)',
            184 => 'Barania Góra (427 m)',
            185 => 'Święty Michał (332 m)',
            186 => 'Cieśle',
            187 => 'Brodowica',

            //Pasmo 30
            188 => 'Patrol (388 m)',
            189 => 'Brusznia (309 m)',
            190 => 'Dalnia (310 m)',
            191 => 'Biesak (337 m)',
            192 => 'Bugalanka (366 m)',
            193 => 'Pierścienica (367 m)',

            //Pasmo 31
            194 => 'Miejska Góra (426 m)',
            195 => 'Sieradowska Góra (390 m)',
            196 => 'Wykus',
            197 => 'Kapliczka Świętego Mikołaja (535 m)',
            198 => 'Łysiec (Święty Krzyż) (595 m)',
            199 => 'Kobyla Góra (391 m)',

            //Pasmo 32
            200 => 'Smrek (TPG Stóg Izerski) (1124 m)',
            201 => 'Czerniawska Kopa (776 m)',
            202 => 'Łącznik (1066 m)',
            203 => 'Stóg Izerski (1105 m)',
            204 => 'Zajęcznik (595 m)',
            205 => 'Sępia Góra (828 m)',

            //Pasmo 33
            206 => 'Witka',
            207 => 'Grodziszcze (427 m)',
            208 => 'Wysoka Stóża (427 m)',
            209 => 'Kozub (1105 m)',
            210 => 'Wojkowa (503 m)',
            211 => 'Świecie',

            //Pasmo 34
            212 => 'Schronisko PTTK Hala Szrenicka (1195 m)',
            213 => 'Szrenica (1362 m)',
            214 => 'Przełęcz Mokra (940 m)',
            215 => 'Wysoki Most',
            216 => 'Schronisko PTTK Hala pod Łabskim Szczytem (1168 m)',
            217 => 'Czarcia Ambona (1490 m) (Śnieżne Kotły)',

            //Pasmo 35
            218 => 'Stara Kamienica',
            219 => 'Rybnica ruiny zamku',
            220 => 'Wrzeszczyn',
            221 => 'Siedlecin-Bóbr',
            222 => 'Jeżów Sudecki',
            223 => 'Dziwiszów',

            //Pasmo 36
            224 => 'Sokolik (642 m)',
            225 => 'Przełęcz Przełączka',
            226 => 'Schronisko PTTK Szwajcarka (520 m)',
            227 => 'Rozdroże pod Jańską Górą',
            228 => 'Strużnickie Skały',
            229 => 'Starościńskie Skały',

            //Pasmo 37
            230 => 'Strzyżowiec',
            231 => 'Płoszczynka',
            232 => 'Stromiec (551 m)',
            233 => 'Szybowisko (561 m)',
            234 => 'Tarczynka (422 m)',
            235 => 'Czernica',

            //Pasmo 38
            236 => 'Bolesławiec',
            237 => 'Kraszowice',
            238 => 'Nowe Jaroszowice',
            239 => 'Wartowice',
            240 => 'Skała',
            241 => 'Dworek',

            //Pasmo 39
            242 => 'Szczepanowski Grzbiet',
            243 => 'Opawa',
            244 => 'Zameczek (595 m)',
            245 => 'Lubawka',
            246 => 'Zadzierna (724 m)',
            247 => 'Świerczyna (ok. 635 m)',

            //Pasmo 40
            248 => 'Jański Wierch (697 m)',
            249 => 'Bogaria (645 m)',
            250 => 'Końska (813 m)',
            251 => 'Szeroka (844 m)',
            252 => 'Krzyżówka BHP',
            253 => 'Rozdroże Trzech Buków',

            //Pasmo 41
            254 => 'Długa Góra (635 m)',
            255 => 'Młynarka (539 m)',
            256 => 'Góra Truskolas (613 m)',
            257 => 'Wierzchosławice',
            258 => 'Bolków',
            259 => 'Krąglak (692 m)',

            //Pasmo 42
            260 => 'Góra Lipiec (511 m)',
            261 => 'Cerekwica (555 m)',
            262 => 'Bojanicka Struga',
            263 => 'Michałkowa',
            264 => 'Glinno',
            265 => 'Kroacka Studzienka',

            //Pasmo 43
            266 => 'Stróża (636 m)',
            267 => 'Kortunał (675 m)',
            268 => 'Srebrna Przełęcz (586 m)',
            269 => 'Słup (667 m)',
            270 => 'Przełęcz Wilcza (532 m)',
            271 => 'Ostróg (627 m)',

            //Pasmo 44
            272 => 'Zielona Dolina',
            273 => 'Ptasznica (605 m)',
            274 => 'Borowa (701 m)',
            275 => 'Taszów',
            276 => 'Miejski Lasek',
            277 => 'Błonie (478 m)',

            //Pasmo 45
            278 => 'Przełęcz Polskie Wrota (660 m)',
            279 => 'Miejski Lasek',
            280 => 'Pańska Góra ( m)',
            281 => 'TPG Duszniki Zdrój',
            282 => 'Kozia Hala (700 do 740 m)',
            283 => 'Sołtysia Kopa (896 m)',

            //Pasmo 46
            284 => 'Kłodzko',
            285 => 'Jaszkowa Dolna',
            286 => 'Sarnica (551 m)',
            287 => 'Stara Łomnica',
            288 => 'Bystrzyca Kłodzka',
            289 => 'Marianówka',

            //Pasmo 47
            290 => 'Wapniarka (532 m)',
            291 => 'Przełęcz Mielnicka (405 m)',
            292 => 'Romanowo',
            293 => 'Mrówczyniec (487 m)',
            294 => 'Sędzisz (498 m)',
            295 => 'Romanowo Górne',

            //Pasmo 48
            296 => 'Olchówka (457 m)',
            297 => 'Pustelnia (395 m)',
            298 => 'Haniak (540 m)',
            299 => 'Jawornik Mały (756 m)',
            300 => 'Jawornik Wielki (870 m)',
            301 => 'Przełęcz pod Trzeboniem (679 m)',

            //Pasmo 49
            302 => 'Przednia Kopa (467 m)',
            303 => 'Przełęcz Siodło (502 m)',
            304 => 'Biskupia Kopa (889 m)',
            305 => 'Przełęcz pod Kopą (711 m)',
            306 => 'Schronisko pod Biskupią Kopą (850 m)',
            307 => 'Rozdroże pod Piekiełkiem',

            //Pasmo 50
            308 => 'Paszowice',
            309 => 'Czernicka Góra (514 m)',
            310 => 'Czeska Góra (321 m)',
            311 => 'Góra św. Jerzego (353 m)',

            //Pasmo 51
            312 => 'Kończyce',
            313 => 'Świdnica',
            314 => 'Bojanice',
            315 => 'Lutomia Dolna',
            316 => 'Szczytna (466 m)',
            317 => 'Przełęcz Tapadła (384 m)',

            //Pasmo 52
            318 => 'Przełęcz Dębowe Góry',
            319 => 'Zamkowa Góra ( m)',
            320 => 'Gontowa (377 m)',
            321 => 'Gilów',
            322 => 'Ostra Góra (362 m)',
            323 => 'Tylnia Dębowa Góra (334 m)',

            //Pasmo 53
            324 => 'Hrabušice (548)',
            325 => 'Podlesok (545)',
            326 => 'Nad Podleskom (700)',
            327 => 'Hrdlo Hornádu (530)',
            328 => 'Kláštorisko, chata (784)',
            329 => 'Letanovský mlyn (513)',

            //Pasmo 54
            330 => 'STARY HRAD (ok. 400 m)',
            331 => 'DÚBRAVY NAD CHATĄ FATRANKA (545 m)',
            332 => 'CHATA W DOLINIE KÚRU',
            333 => 'CHATA POD SUCHÝM (ok. 1075 m)',
            334 => 'SEDLO (PRZEŁĘCZ) BRESTOV (970 m)',
            335 => 'SEDLO (PRZEŁĘCZ) PRÍSLOP POD SUCHÝM (1202 m)',

            //Pasmo 55
            336 => 'SEDLO RAKYTIE (712 m)',
            337 => 'KOJŠOVA (743 m)',
            338 => 'MALOFATRANSKÉ MÚZEUM',
            339 => 'SEDLO JAVORINA (980 m)',
            340 => 'MINĆOL (1364 m)',
            341 => 'VELKÁ LÚKA (1476 m)',

            //Pasmo 56
            342 => 'Kopa (1187 m)',
            343 => 'LUBOCHNIANSKE SEDNO (762 m)',
            344 => 'SEDLO PRISLOP (935 m)',
            345 => 'KLAK (1394 m)',

            //Pasmo 57
            346 => 'SEDLO POD SVITKOVOU (940 m)',
            347 => 'RYCIEROVA HORA (1226 m)',
            348 => 'PRIEHYBOK (1226 m)',
            349 => 'SEDLO POD ORLOM(1064 m)',

            //Pasmo 58
            350 => 'BUKOVINA (1069 m)',
            351 => 'PRZEŁĘCZ MIĘDZY DRABIROVCEM A RABĆOVOU KYKULOU (ok. 930 m)',
            352 => 'SEDLO PODÚŠUST (PRZEŁĘCZ PODOSZUS) (946 m)',
            353 => 'ÚŠUST (WYSOKI BESKID, OSZUS) (1155 m)',
            354 => 'PRZEŁĘCZ GLINKA (UJSOLSKA) (847 m)',
            355 => 'GRÚNIKY (KRAWCÓW WIERCH) (1080 m)',

            //Pasmo 59
            356 => 'CERVENY KLASTOR (458 m)',
            357 => 'SEDLO CERLA (603 m)',
            358 => 'VYHLIADKA (TARGOV 675 m)',
            359 => 'DOLINA LESNICKY POTOK (475 m)',
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
