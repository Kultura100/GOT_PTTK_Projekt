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

            62 => 'Siwa Polana - z przystanku PKS Dolina Chochołowska',
            63 => 'Siwa Polana - Polana Biały Potok',
            64 => 'Polana Biały Potok - Kiry',
            65 => 'Kiry - Gronik',
            66 => 'Gronik - Roma',
            67 => 'Zwiedzanie Doliny za Bramką',
            68 => 'Roma - Dolina Białego',
            69 => 'Zwiedzanie Doliny Ku Dziurze',
            70 => 'Dolina Białego - Murowanica',
            71 => 'Murowanica - Dom Turysty PTTK',
            
            72 => 'przystanku PKS Dolina Chochołowska',
            
            73 => 'Polany Biały Potok',
            74 => 'Siwej Polany',
            75 => 'Polany Trzydniówka / Starorobociańskiej Doliny',
            
            76 => 'Polany Biały Potok',
            77 => 'Wyżniej Kiry Miętusie',
            78 => 'Polany Huciska',
            
            79 => 'Polany Trzydniówka / Starorobociańskiej Doliny',
            80 => 'Doliny Jarząbczej',
            81 => 'Wyżniej Doliny Chochołowskiej',
            
            82 => 'Polany Trzydniówka Starorobociańskiej Doliny',
            83 => 'Doliny Jarząbcze',
            84 => 'Kończystego Wierchu (2002 m)',

            85 => 'Chochołowa',
            86 => 'Witowa',
            87 => 'przystanku PKS "Dolina Chochołowska"',

            88 => 'przystanku PKS "Dolina Chochołowska" przez Mietłówkę (1128 m)',
            89 => 'Witowa przez Mietłówkę (1128 m)',
            90 => 'Kir',
            91 => 'Gronika',
            92 => 'Skibówek',

            93 => 'Kir',
            94 => 'Palenicy Kościeliskiej (1183 m)',
            95 => 'Dzianisza',
            96 => 'Gronika',
            97 => 'Chochołowa',
            98 => 'Domu Turysty PTTK',
            99 => 'Hotelu Kasprowy',
            100 => 'Skibówek',

            101 => 'Butorowego Wierchu (1160 m)',
            102 => 'Nowego Bystrego',
            103 => 'Rogoźnika',
            104 => 'Eliaszówki',
            105 => 'Domu Turysty PTTK przez Kotelnicę',
            106 => 'Domu Turysty PTTK',

            107 => 'od szpitala zakaźnego',
            108 => 'Szaflar przez Maruszynę',
            109 => 'Szaflar przez Rolów Wierch (1010 m)',

            110 => 'Cisowej Skały (685 m) (BZ.08)',
            111 => 'Ludźmierza (BZ.07)',
            112 => 'Nowy Targ - Cisowa Skała (685 m) (BZ.08)',

            113 => 'Pod Bielou Skalou (930 m)',
            114 => 'Przełęczy Palenica (X C, Ż) (1570 m)',
            115 => 'Przełęczy Preduvratie (X Z, N) (1590 m)',
            116 => 'Zuberec - Pod Bielou Skalou',
            
            117 => 'Jalovec (700 m)',
            118 => 'Polana Tokariny (X Ż, Z) (780 m)',
            119 => 'Schroniska Cervenec (1420 m)',
            120 => 'Jalovska Dolina Ustie (X C, Ż) (800 m)',
            121 => 'Polana Tokariny (X) - Przełęcz Preduvratie (X) - przez Babky (1567 m)',
            122 => 'Schronisko Cervenec - Przełęcz Preduvratie (X)',

            123 => 'Polany Tokariny (X)',
            124 => 'Doliny Jalovska Razc. (X Ż, Z, N) (1006 m)',
            125 => 'Przełęczy Palenica (X) (1570 m) przez Bobrovecka Doline',

            126 => 'Jalovska Dolina Razc. (X)',
            127 => 'Salatin (X Z, C) (2047)',
            128 => 'Przełęczy Banikovska (X N, C, Ż, Z) (2040 m)',

            129 => 'Przełęczy Palenica (Ż, X)',
            130 => 'Salatin (Z, X)',
            131 => 'Schroniska Zverovka (1037 m)',

            132 => 'Salatin (X)',
            133 => 'Banikov (X C, Z) (2178 m)',
            134 => 'Spalena Dolina Razc. II (X Ż, Z) (1540 m)',

            135 => 'Podbanske (X C, N, Ż) – Tri Studnicky (X C, N, Z) (1141 m)',
            136 => 'Tri Studnicky – Jamske Pleso (X C, N) (1447 m)',
            137 => 'Jamske Pleso - Furkotna Dolina (X C, Ż) (1450 m)',
            138 => 'Furkotna Dolina - Strbske Pleso (X C, N, Z, Ż) (1346 m)',
            139 => 'Strbske Pleso - Razc. Trigan (X C, Z) (1499 m)',
            140 => 'Razc. Trigan - Popradske Pleso (X C, N, Z, Ż) (1494 m)',
            141 => 'Popradske Pleso Batizovske Pleso (X C, Ż) (1884 m)',
            142 => 'Batizovske Pleso - Razc. Pod Suchym Vrchom (X C, Ż) (1780 m)',
            143 => 'Razc. Pod Suchym Vrchom - Velicke Pleso (X C, Z) (1667)',
            144 => 'Velicke Pleso - Razc. na Slavkovsky Stit (X C, N) (1357 m)',
            145 => 'Razc. Na Slavkovsky Stit - Hrebieniok (X C, Z) (1285 m)',
            146 => 'Hrebieniok – Razc. U Rainerovej Chaty (Polana Kamzik) (X C, N) (1303 m)',
            147 => 'Razc. U Rainerovej Chaty - Zamkovskeho Chata (X C, Z) (1460 m)',
            148 => 'Zamkovskeho Chata - Skalnata Chata (X C, Z, N) (1764 m)',
            149 => 'Skalnata Chata - Chata pri Zelenom Plese (X C, Ż) (1545 m)',
            150 => 'Chata Pri Zelenom Plese - Velke Bele Pleso (X C, N, Z) (1615 m)',

            151 => 'Biely Vah A - Jamske Pleso (X)',
            152 => 'Stola (X Ż, Z) - Vysne Hagy SK (1085 m)',
            153 => 'Vysne Hagy SK - Batizovske Pleso (X)',
            154 => 'Stola (X) - Nova Polianka Danielov Dom SK (1000 m)',
            155 => 'Nova Polianka Danielov Dom SK - Tatranska Polianka SK (1005 m)',
            156 => 'Tatranska Polianka SK - Velicky Most (X Z, Ż) (1304 m)',
            157 => 'Velicky Most (X) - Velicke Pleso (X) (1667 m)',
            158 => 'Velicky Most (X) - Razc. Pod Suchym Vrchom (X)',
            159 => 'Tatranske Zruby SK – Razc, Nad Zrubami (X N,Ż (1409)',
            160 => 'Stary Smokovec SK – Razc. Nad Zrubami (X)',
            161 => 'Razc. Nad Zrubami – Velicke Pleso (X) (Ż, Z)',
            162 => 'Stary Smokovec SK – Razc. Na Slavkovsky Stit (X)',
            163 => 'Razc. Na Slavkovsky Stit – Slavkovsky Stit (2452 m)',
            164 => 'Stary Smokovec SK – Hrebieniok (X)',
            165 => 'Tatranska Lesna SK – Razc. U Rainerovej Ch. (X)',
            166 => 'Tatranska Lomnica SK – Razc. U Rainerovej Chaty',
            167 => 'Tatranska Lomnica SK – Stanica Start (X Z, N)',
            168 => 'Stanica Start (X) – Skalnata Ch. (X)',
            169 => 'Stanica Start (X) – Razc. Pod Malou Svistovkou (X N, Z) (Rakuska Polana/Wyżnia Polana Folwarska, 1310 m)',
            170 => 'Razc. Pod Malou Svistovkou (X – Skalnata Ch. (X)',
            171 => 'Lomnicke Sedlo (2190 m) – Velka Lomnicka Veza (2211 m)',
            172 => 'Tatranska Lomnica SK – Razc. Layschov Pramen (X Ż, N)',
            173 => 'Tatranske Matliare – Razc. Layschov Pramen (X)',
            174 => 'Razc. Layschov Pramen (X) – Dol. Kezmarskej Bielej Vody (X N, Ż)',
            175 => 'Kezmarska Biela Voda A – Dolina Kezmarskej Bielej Vody (X) (1058m)',
            176 => 'Dolina Kezmarskej B. Vody (X) – Dolina Kezmarskej B. Vody Razc. Salviovy Pramen (X N, Ż) (1200 m)',
            177 => 'Razc. Salviovy Pramen (X) – Velke Biele Pleso (X N, C, Z) (1615 m)',
            178 => 'Razc. Salviovy Pramen (X) – Schronisko pri Zelenom Plese (X)',
            179 => 'Razc. Pod Malou Svistovkou (X) – (Nizna) Folvarska Polana (X Z, Ż)',
            180 => 'Schronisko pri Zelenom Plese (X) – Jahnaci Stit',

            181 => 'Koprova Dolina Razc. Pod Grunikom (X N, Z) (1100 m)',
            182 => 'Krivan (2494 m)',
            183 => 'Biely Vah A',
            184 => 'Jamske Pleso (X) – Krivan (2494 m)',
            185 => 'Podbanske – Koprova Dolina Razc. pod Grunikom (X)',
            186 => 'Razc. Pod Hlinskou Dolinu (X) – Vysne Koprovske S. (X V,C (2180 m)',
            187 => 'Vysne Koprovske Przełęcz (X) – Koprovsky Stit (2363 m)',
            188 => 'Razc. Pod Hlinskou Dolinu (X) – Razc. Pod Kobylou Dolinu (X Z, C)',
            189 => 'Razc. Pod Kobylou Dolinu (X) (1490 m) – Zavory (X) (1879 m)',
            190 => 'Zavory (X) – Przełęcz Hladke (1993 m)',
            191 => 'Razc. Pod Kobylou Dolinu (X) – Nizne Tiemnosmrecinske Pleso',

            192 => 'Razc. Biely Vah (X)',
            193 => 'Tatranska Strba SK',
            194 => 'Schronisko pod Soliskom (X N, C) (1840 m)',
            195 => 'Furkotska Dol. Razc. I (X C, Ż) (1450) (C)',
            196 => 'Popradske Pleso SK ',
            197 => 'Schronisko pod Soliskom (X) – Predne Solisko (2093 m)',
            198 => 'Strbske Pleso (X) – Bystra Lavka (2300 m) przez Mlynicka Dolina (UWAGA – wejście jednokierunkowe',
            199 => 'Bystra Lavka – Furkotska Dolina Razc. II (X Ż,N (1770 m) (UWAGA – zejście jednokierunkowe)',
            200 => 'Furkotska Dolina Razc. II (X) – Schronisko pod Soliskom (X)',
            201 => 'Furkotska Dol. II (X) – Furkotska Dolina Razc. I (X)',
            202 => 'Razc. Trigan (X) – Popradske Pleso (X)',
            203 => 'Popradske Pleso (X) – Symbolicky Cintorin (1525 m) (zachodnim brzegiem stawu) – Popradska Polana (1500 m)',
            204 => 'Popradske Pleso SK – Popradska Polana',
            205 => 'Popradske Pleso – szlak okrężny',

            206 => 'Popradske Pleso (X)',
            207 => 'Przełęcz Vysne Koprovske (X)',
            208 => 'Schronisko pod Rysmi (2250 m)',
            209 => 'Schronisko pod Rysmi – Rysy (2502 m)',

            210 => 'Zdiar Tatra A (865 m)',
            211 => 'Zdiar Strednica A, Prk (1020 m)',
            212 => 'Przełęczy Kopske (1750 m)',
            
            213 => 'Tatranska Kotlina Carda A (760 m)',
            214 => 'Chaty Plesnivec (1290 m)',
            215 => 'Chaty Plesnivec przez dolinę Rakuska',
            216 => 'Kezmarske Zlaby A (902 m)',

            217 => 'Koprova Dolina Razc. Pod Grunikom (X N, Z) (1100 m)',
            218 => 'Chaty Plesnivec',
            219 => 'Przełęczy Kopske (X N, Z)',
            220 => 'Tatranska Kotlina Belianska Jaskyna A (760 m) – Belianska Jaskyna Vstup',
            221 => 'Belianska Jaskyna (zwiedzenie)',

            222 => 'Polana Pod Wysoką - Czeski Staw',
            223 => 'Polana Pod Wysoką - Dolina Kacza',
            224 => 'Czeski Staw - Młynarz',
            225 => 'Czeski Staw - Schronisko Pod Wagą',
            226 => 'Dolina Kacza - Litworowy Staw - Zmarzły Staw',
            227 => 'Dolina Kacza - Żelazne Wrota (2255 m)',

            228 => 'Popradzki Staw - Szatan (2423 m)',
            229 => 'Popradzki Staw - Kopa Popradzka (Kopky 2354 m)',
            230 => 'Popradzki Staw - Ganek (2462 m)',
            231 => 'Popradzki Staw - Żłobisty (2426 m)',
            232 => 'Popradzki Staw - Kończysta (2537 m)',
            233 => 'Popradzki Staw - Żelazne Wrota (2255 m)',
            234 => 'Przełęcz Waga - Wysoka (2523)',

            235 => 'Wielicki Staw - Gerlach (2654 m) - Batyżowiecki Staw (szlak jednokierunkowy!)',
            236 => 'Wielicki Staw - Staroleśna (Bradavica) (2476 m)',

            237 => 'Dolina 5 Stawów Spiskich - Lodowy (2630 m)',
            238 => 'Dolina 5 Stawów Spiskich - Barania Przełęcz (2389 m)',
            239 => 'Barania Przełęcz - Baranie Rogi (2526 m)',
            240 => 'Barania Przełęcz - Schronisko przy Zielonym Stawie Kieżmarskim',
            241 => 'Czerwona Ławka (Przełęcz Priečne) (2376 m) - Mały Lodowy (Śiroká veża) (2461m)',
            242 => 'Dolina 5 Stawów Spiskich - Łomnica (2634 m) (Droga Jordana)',
            243 => 'Ramię Łomnickie (Lomnicke Sedlo) (2190 m) - Łomnica (2634 m)',
            244 => 'Zielony Staw Kieżmarski - Miedziane Ławki - Łomnica (2634 m)',
            245 => 'Kieżmarski (2556 m) - Rakuska Przełączka Wyżnia (przełęcz pod Sviśťovkou) (2023 m)',

            246 => 'Mięguszowiecka Przełęcz Pod Chłopkiem (Menguśovske sedlo)(2307 m) - Wielki - Staw Hińczowy (1965 m)',
            247 => 'Zbieg dolin Koprowej i Niewcyrki - Krywań',
            248 => 'Jamski Staw (1444 m) - Zielony Staw Ważecki (Krivaňske Zelené pleso) (2017m)',

            249 => 'Kecka (1225 m)',
            250 => 'Kozi Chrbat (1330 m)',
            251 => 'Mostenica Kysla (656 m) przez Przełęcz Zubova',
            252 => 'Hiadelske Sedlo (1099 m)',
            253 => 'Mostenica (480 m) – Uhliarska Dolina – Mostenica Kysla',

            254 => 'Kozi Chrbat',
            255 => 'Korytnica Kupele (83O m) przez Przełęcz Baba',
            256 => 'Hiadel (500 m)',
            257 => 'Velka Chochula (1753 m)',
            258 => 'Donovaly (980 m) – Polianka (1045)',
            259 => 'Polianka – Kecka',
            260 => 'Korytnica autobus – Korytnica Kupele',

            261 => 'Kosarisko (1694 m)',
            262 => 'Brusno SK (450 m)',

            263 => 'Sedl pod Skalkou (X, Ż/C)',
            264 => 'Raztocka Hola (1565 m)',

            265 => 'Liptowska Luzna/Penzion Baltazar (720 m)',
            266 => 'Latiborska Hola (1648 m)',

            267 => 'Latiborska Hola',
            268 => 'Przełęczy Zamostskej Hole (1591 m)',
            269 => 'Magurka (1035 m)',

            270 => 'Cieszyna przez Mniszewo',
            271 => 'Bażantowic',
            272 => 'Lesznej Górnej',
            273 => 'Goleszowa',

            274 => 'Bażantowic',
            275 => 'Dzięgielowa - Zamek',
            276 => 'Goleszowa',
            277 => 'Cisownicy',
            
            278 => 'Jasieniowej (521 m)',
            279 => 'Goleszowa',
            280 => 'Lesznej Górnej',
            281 => 'Cisownicy',
            282 => 'Ustronia',
            
            283 => 'Lesznej Górnej',
            284 => 'Schroniska PTTK Tuł (621 m)',

            285 => 'Schroniska PTTK Tuł (621 m)',
            286 => 'Ostrego (712 m)',
            287 => 'Cisownicy',
            288 => 'Ustronia',
            289 => 'Dziędielowa - Zamku',
            290 => 'Lesznej Górnej',

            291 => 'Małej Czantorii (864 m)',
            292 => 'Ustronia przez Poniwiec',
            293 => 'Ustronia - Polany',
            294 => 'Przełęczy Beskidek (684 m)',

            295 => 'Zwardonia (Górka Gomółka)',
            296 => 'Kiczory',
            297 => 'Lalik',
            298 => 'Soli',
            
            299 => 'Zwardonia (Górka Gomółka',
            300 => 'Magury (1073 m)',
            301 => 'Ożnej (1073 m)',

            302 => 'Zwardonia (Górka Gomółka)',
            303 => 'Soli',
            304 => 'Łysicy (704 m)',
            305 => 'Rycerki Górnej',
            306 => 'Rycerki Górnej Kolonia',

            307 => 'Soli',
            308 => 'Rycerki Dolnej',
            309 => 'Oźnej (952 m)',

            310 => 'Rycerki Górnej',
            311 => 'Rycerki Górnej Kolonia',

            312 => 'Magury (1073 m)',
            313 => 'Rycerki Górnej Kolonia',
            314 => 'Schroniska PTTK Przegibek',

            315 => 'Porąbki',
            316 => 'Kóz',
            317 => 'Bujakowa',

            318 => 'Bujakowskiego Gronia (749 m)',
            319 => 'Porąbki',
            320 => 'Kóz',
            321 => 'Lipnika',
            322 => 'Przełęczy między Gaikami (809 m) a Groniczkami (839m)',
            323 => 'Międzybrodzia Bialskiego',

            324 => 'Porąbki',
            325 => 'Międzybrodzia Bialskiego',
            326 => 'Lipnika',
            327 => 'Straconki',

            328 => 'Przełęczy między Gaikami (809 m) a Groniczkami (839 m)',
            329 => 'Magurki Wilkowickiej (909 m) - Schronisko PTTK',
            330 => 'Podlasu',

            331 => 'Straconki',
            332 => 'Mikuszowic Krakowskich',
            333 => 'Stalownika przez Łysą Przełęcz (563 m)',
            334 => 'Stalownika przez Rogacz (828 m)',
            335 => 'Wilkowic',
            336 => 'Ponikwi',
            337 => 'Czupla (933 m)',
            338 => 'Międzybrodzia Bialskiego',

            339 => 'Międzybrodzia Bialskiego',
            340 => 'Łodygowic',
            341 => 'Czernichowa przez Suchy Wierch (799 m)',
            342 => 'Przyszopu (601 m)',

            343 => 'Moszczanicy',
            344 => 'Rychwałdu',
            345 => 'Pewli Małej',

            346 => 'Rychwałdu',
            347 => 'Pewli Małej',
            348 => 'Gilowic',
            349 => 'Pewli Ślemieńskiej',

            350 => 'Jeleśni',
            351 => 'Pewli Ślemieńskiej',
            352 => 'Pewli Małej',
            353 => 'Ślemienia',
            354 => 'Gachowizny (758 m)',
            355 => 'Huciska',
            356 => 'Pewli Wielkiej',

            357 => 'Huciska',
            358 => 'Ślemienia',
            359 => 'Koconia',
            360 => 'Kurowa',
            361 => 'Gronia Wajdów (677 m)',

            362 => 'Nad Płonem (BZ.03)',
            363 => 'Koconia',

            364 => 'Lasu',
            365 => 'Kukowa',

            366 => 'Rabki Zdroju',
            367 => 'Rokicin (PKP)',
            368 => 'Rdzawki',

            369 => 'Rokicin (PKP)',
            370 => 'Raby Wyżnej',
            371 => 'Sieniawy',
            372 => 'Obidowej - PKS Rdzawka II',
            373 => 'Piątkowej (715 m)',

            374 => 'Sieniawy',
            375 => 'Rdzawki',
            376 => 'Przełęczy Sieniawskiej',
            
            377 => 'Przełęczy Sieniawskiej',
            378 => 'Lasku',
            
            379 => 'Bacówki PTTK Maciejowa',
            380 => 'Rdzawki',

            381 => 'Rabki Zdroju',
            382 => 'Rabki Słone (tama)',
            383 => 'Olszówki',
            384 => 'Poręby Górnej',

            385 => 'Jordanowa',
            386 => 'Łętowni',
            387 => 'Tokarni',
            388 => 'Tenczyna',
            389 => 'Krzczonowa',
            390 => 'Lubienia',
            391 => 'Krzeczowa',

            392 => 'Krzeczowa',
            393 => 'Tenczyna',
            394 => 'Przełęczy Glisne (634 m)',
            395 => 'Raby Niżnej',
            396 => 'Rabki Zarytego',
            397 => 'Rabki Zdrój',
            398 => 'Skomielnej Białej',
            399 => 'Skawa (PKP) (BZ.07) - Rabka Zdrój przez Zbójecką Górę',

            400 => 'Jordanowa',
            401 => 'Schroniska PTTK Luboń Wielki (1022 m)',

            402 => 'Raby Niżnej',
            403 => 'Mszany Dolnej',

            404 => 'Przełęczy Glisne (634 m)',
            405 => 'Kasinki Małej',
            406 => 'Lubienia przez Mały Szczebel (776 m)',
            407 => 'Lubienia',

            408 => 'Lubogoszczy (968 m)',
            409 => 'Mszany Dolnej',

            410 => 'Leśniczowki Stańcowa',
            411 => 'Jabłonki',
            412 => 'Lipnicy Malej Zagrody',
            413 => 'Babiej Góry (1725 m) (BZ.02)',
            414 => 'Leśniczówka Stańcowa - TPG Przywarówka',

            415 => 'Lipnicy Małej Mentele',
            416 => 'Sidziny Wielkiej - Polana',
            417 => 'Podwilka',

            418 => 'Zubrzycy Górnej',
            419 => 'Sidziny',
            420 => 'Policy (1369 m) (BZ.02',
            421 => 'Schroniska na Hali Krupowej (1152 m) (BZ.02)',
            422 => 'Podwilka',

            423 => 'Sidziny Wielkiej - Polana',
            424 => 'Sidziny',
            425 => 'Sidziny Małej',
            426 => 'Sidziny dom dziecka (BZ.02)',

            427 => 'przełęczy między Sidziną a Zubrzycą Górną (757 m) (Nad Wąwozem)',
            428 => 'Sidziny',
            429 => 'Sidziny Małej',
            430 => 'Spytkowic',
            431 => 'przełęczy Bory (Spytkowicka)',
            432 => 'Podwilka',

            433 => 'Sidziny Małej',
            434 => 'Sidziny',
            435 => 'Bystrej',
            436 => 'Jordanowa',
            437 => 'Wysokiej',

            438 => 'Szaflar (T.03)',
            439 => 'Nowego Targu (T.03)',
            440 => 'Nowej Białej',
            441 => 'Krempachy',

            442 => 'Łopusznej',
            443 => 'Dębna',
            444 => 'Frydman',
            445 => 'Trybsz',
            446 => 'Czarnej Góry',
            447 => 'Białki',

            448 => 'Bukowiny Tatrzańskiej Dolnej',
            449 => 'Czarnej Góry',

            450 => 'Bukowiny Tatrzańskiej Dolnej',
            451 => 'Rzepisk',

            452 => 'Łopusznej',
            453 => 'Dębna',
            454 => 'Frydman',
            455 => 'Czarnej Góry',
            456 => 'Białki',
            457 => 'Trybsza',

            458 => 'Dębna',
            459 => 'Falsztyna',

            460 => 'Tylmanowej Rzeka',
            461 => 'Zabrzeża',
            462 => 'Łącka (BZ.06)',
            463 => 'Jazowska',

            464 => 'Krościenka nad Dunajcem',
            465 => 'Jaworzynki',
            466 => 'Jazowska',
            467 => 'Schroniska na Bereśniku (843 m)',

            468 => 'Bryjarki (679 m)',
            469 => 'Szczawnicy Niżnej',

            470 => 'Szczawnicy (PKS)',
            471 => 'Szczawnicy Zdroju',
            472 => 'Szczawnica (PKS) - Szczawnica Zdrój',

            473 => 'Dzwonkówki (983 m)',
            474 => 'Jazowska przez Obidzę',
            475 => 'Rytra',
            476 => 'Jazowska',
            477 => 'Gabonia (PKS)',
            478 => 'Jaworek',
            479 => 'Starego Sącza',
            480 => 'Barcic',
            481 => 'Polany Konieczna',
            482 => 'Szlachtowej',
            483 => 'Szczawnicy Zdroju',
            484 => 'Szczawnicy (PKS)',
            485 => 'Radziejowej',
            486 => 'Rytro - Polana Konieczna',

            487 => 'Szczawnicy (PKS)',
            488 => 'Jaworek',
            489 => 'Jaworki - Przełęcz Rozdziela (802 m)',

            490 => 'Wadowic',
            491 => 'Brzeźnicy',
            492 => 'Draboża',
            493 => 'Stanisławia Górnego',
            494 => 'Barwałdu Górnego',
            495 => 'Wysokiej',
            496 => 'Kleczy Górnej',
            
            497 => 'Brzeźnicy',
            498 => 'Jaśkowic',
            499 => 'Przytkowic (PKP)',
            500 => 'Stanisławia Górnego',

            501 => 'Przytkowic (PKP)',
            502 => 'Radziszowa (PKP)',

            503 => 'Biertowic',
            504 => 'Rudnika',
            505 => 'Krzywaczki',
            506 => 'Bęczarki',
            507 => 'Krzyszkowic',
            508 => 'Jawornika',
            509 => 'Sułkowic (BZ.04)',

            510 => 'Rajbrotu przez Paprotną (Kamienie Brodzińskie)',
            511 => 'Bochni',

            512 => 'Rajbrotu',
            513 => 'Lipnicy Murowanej',
            514 => 'Szpilówki (Śpilówka) (516 m)',

            515 => 'Dominicznej Góry (468 m)',
            516 => 'Rajbrotu - tartak',
            517 => 'Lipnicy Murowanej',
            518 => 'Szpilówki (Śpilówka) (516 m)',
            519 => 'Iwkowej',
            520 => 'Wojakowej',
            521 => 'Poręby Iwkowskiej (BZ.06)',

            522 => 'Lipnicy Murowanej',
            523 => 'Iwkowej',
            524 => 'Czchowa',

            525 => 'Melsztyna',
            526 => 'Dębna',

            527 => 'Wielkiej Wsi',
            528 => 'Wojnicza',

            529 => 'Nowego Sącza',
            530 => 'Gródka nad Dunajcem',
            531 => 'Przyrodnicy',
            532 => 'Miłkowej',

            533 => 'Gródka nad Dunajcem',
            534 => 'Posiadowej',
            535 => 'Przełęczy Pod Kobylnicą',
            536 => 'Przyrodnicy',
            537 => 'Bartkowej',

            538 => 'Gródka nad Dunajcem',
            539 => 'Paleśnicy',
            540 => 'Rożnowa',
            541 => 'Bacówki na Jamnej (490 m)',
            542 => 'Bartkowej',

            543 => 'Nowego Sącza',
            544 => 'Mogilna',

            545 => 'Jodłowej',
            546 => 'Krużlowej Wyżniej',
            547 => 'Ptaszkowej (BW.02)',

            548 => 'Przyrodnicy',
            549 => 'Bobowej',
            550 => 'Podola Górowej',
            551 => 'Bacówki na Jamnej (490 m)',
            552 => 'Siekierczyny',
            553 => 'Falkowej (506 m)',
            554 => 'Jasiennej',

            555 => 'Tarnowa',
            556 => 'Skrzyszowa',
            557 => 'Tarnowca',
            558 => 'Słonej Góry',

            559 => 'Łowczówka - Pleśnej (PKP)',
            560 => 'Piotrowic',
            561 => 'Łowczów - Piotrowice',

            562 => 'Góry św. Marcina (384 m)',
            563 => 'Zalasowej',
            564 => 'Tuchowa przez Las Tuchowsk',
            565 => 'Ryglic przez Las Tuchowski',

            566 => 'Zalesowej',
            567 => 'Zwiernika',
            568 => 'Pilzna',

            569 => 'Ostrego Kamienia (527 m)',
            570 => 'Kokocza (434 m)',
            571 => 'Jodłowej Górnej',

            572 => 'Gilowej Góry (506 m)',
            573 => 'Brzyski',
            574 => 'Kołaczyc',
            575 => 'Jabłonicy',

            576 => 'Jamnicy',
            577 => 'Nawojowej',
            578 => 'Kamionki Wielkiej',
            579 => 'Frycowej',

            580 => 'Kamionki Wielkiej',
            581 => 'Boguszy',
            582 => 'Łabowej',
            583 => 'Maciejowej',

            584 => 'Tokarni (828 m)',
            585 => 'Boguszy',
            586 => 'Kamiannej',
            587 => 'Łabowej',

            588 => 'Ptaszkowej',
            589 => 'Kąclowej',
            590 => 'Grybowa',
            591 => 'Binczarowej',
            592 => 'Przełęczy pod Binczarową',
            593 => 'Boguszy',

            594 => 'Przełęczy pod Binczarową',
            595 => 'Florynki',
            596 => 'Kamiannej',
            597 => 'Czerszli (877 m)',

            598 => 'Kamiannej',
            599 => 'Nowej Wsi',
            600 => 'Przełęczy Huta',
            601 => 'Berestu',

            602 => 'Hyrowej',
            603 => 'Dukli',
            604 => 'Pustelni św. Jana',
            605 => 'Mszany',
            606 => 'Trzciany',
            607 => 'Nowej Wsi',
            608 => 'Pustelnia św. Jana - Trzciana',

            609 => 'Hyrowej',
            610 => 'Tylawy',
            611 => 'Polan',
            612 => 'Olchowiec',

            613 => 'Dukli',
            614 => 'Lubatowej',
            615 => 'Nowej Wsi',
            616 => 'Jasionki',
            617 => 'Trzciany',
            618 => 'Zawadki Rymanowskiej',
            619 => 'Osiecznika (633 m)',
            620 => 'Zawadka Rymanowska - Trzciana',

            621 => 'Lubatowej',
            622 => 'Zawadki Rymanowskiej',
            623 => 'Królika Polskiego',
            624 => 'Szklar',

            625 => 'Rymanowa Zdroju',
            626 => 'Deszna',
            627 => 'Iwonicza Zdroju',
            628 => 'Lubatowej',
            629 => 'Królika Polskiego',
            630 => 'Osiecznika (633 m)',

            631 => 'Rymanowa Zdroju',
            632 => 'Iwonicza Zdroju',
            633 => 'Przymiarki (Kopa)',
            634 => 'Lubatowa - Iwonicz-Zdrój',

            635 => 'Komańczy',
            636 => 'Schroniska PTTK Komańczy-Letniska',
            637 => 'Rzepedzi',
            638 => 'Prełuk',
            639 => 'Duszatyna',
            640 => 'Jasieniowej (735 m)',
            641 => 'Radoszyc (BW.02)',

            642 => 'Komańczy',
            643 => 'Duszatyna',
            644 => 'Schroniska PTTK Komańczy-Letniska',

            645 => 'Duszatyna',
            646 => 'Smolnika',
            647 => 'Nowego Łupkowa (PKP)',
            648 => 'Radoszyc (BW.02)',
            649 => 'Jasieniowej (735 m)',

            650 => 'Jasieniowej (735 m)',
            651 => 'Mikowa',
            652 => 'Smolnika',
            653 => 'Nowego Łupkowa (PKP)',

            654 => 'Terpiaka (745 m) (BW.02)',
            655 => 'Siwakowskiej Doliny (689 m) (BW.02)',

            656 => 'Przełęczy Łupkowskiej (640 m) przez Koszarkę (794 m)',
            657 => 'Łupkowa',
            658 => 'Nowego Łupkowa (PKP)',
            659 => 'Woli Michowej',
            660 => 'Maniowa',

            661 => 'Dębicy',
            662 => 'Jaworza',

            663 => 'Bieździadki',
            664 => 'Kowalowego',
            665 => 'Warzyc',

            666 => 'Kołaczyc',
            667 => 'Lublicy',
            668 => 'Gogołowa',

            669 => 'Koty nad Gogołowem',
            670 => 'Kamienicy Górnej',
            671 => 'Dębicy',
            672 => 'Ropczyc',
            673 => 'Brzeziny',
            674 => 'Szufranowej',
            675 => 'Wiśniowej',
            676 => 'Frysztaku',
            677 => 'Szufranowa - Tropie',

            678 => 'Szkodnej',
            679 => 'Wielopola Skrzyńskiego',
            680 => 'Pstrągowej Górnej',
            681 => 'Zawadki',

            682 => 'Oparówki',
            683 => 'Wiśniowej',
            684 => 'Łęk Strzyżowskich',

            685 => 'Łapajówki',
            686 => 'Łuczyc',
            687 => 'Grochowce - Łuczyce',

            688 => 'Grochowiec',
            689 => 'Przemyśla',
            690 => 'Dybawki',
            691 => 'Bryliniec',
            692 => 'Krasiczyn - Dybawka',

            693 => 'Bolestraszyc',
            694 => 'Bażantarii',
            695 => 'Kuńkowce - Bażantarnia',

            696 => 'Łętowni',
            697 => 'Wapowiec',
            698 => 'Wapowiec przez przełom Holubki',

            699 => 'Kaczmarowej',
            700 => 'Holubli',
            701 => 'Reczpola',
            702 => 'Średniej',
            703 => 'Helusza',

            704 => 'Pruchnika',
            705 => 'Helusza',
            706 => 'Dubiecka',
            707 => 'Kopcy',
            708 => 'Nienadowa - Pruchnik',

            709 => 'Gałki',
            710 => 'Przysuchej',
            711 => 'Ruskiego Brodu',
            712 => 'Gałki - Guzdek',

            713 => 'Ruskiego Brodu',
            714 => 'Skłobów',

            715 => 'Stefankowa',
            716 => 'Chlewisk',
            717 => 'Huty',
            718 => 'Niekłania',
            719 => 'Altany (408 m)',

            720 => 'Końskich',
            721 => 'Nakłania',

            722 => 'Aleksandrowa',
            723 => 'Pogorzałego',
            724 => 'Mroczkowa',
            725 => 'Szydłowca',
            726 => 'Bliżyna',

            727 => 'Bliżyna',
            728 => 'Rejowa',
            729 => 'Suchedniowa',
            730 => 'Bartkowa (Ł04)',

            731 => 'Skórkowic',
            732 => 'Maleńca',

            733 => 'Żarnowa',
            734 => 'Maleńca',

            //Pasmo 28
            735 => 'Przedbórza',
            736 => 'Mokrych Gór',
            737 => 'Buczyny',

            738 => 'Rączek',
            739 => 'Dobromierza',
            740 => 'Kozłowej (337 m)',

            741 => 'Fajnej Ryby (347 m)',
            742 => 'Dobromierza',
            743 => 'Żeleźnicy',

            744 => 'Żeleźnicy',
            745 => 'Krosocina',

            746 => 'Krosocina',
            747 => 'Ludynia',

            //Pasmo 29
            748 => 'Jóźwikowa',
            749 => 'Kuźniak',
            750 => 'Sielpia Wielka - Jóźwików',

            751 => 'Kuźniak',
            752 => 'Strawczyna',
            753 => 'Baraniej Góry (426 m)',

            754 => 'Oblęgorka',
            755 => 'Porzecza',
            756 => 'Bobrzy',

            757 => 'Krasocina',
            758 => 'Ludynii',

            759 => 'Ludyni',
            760 => 'Małogoszczy PKP',
            761 => 'Małogoszczy',

            762 => 'Małogoszczy',
            763 => 'Bocheńca',

            //Pasmo 30
            764 => 'Przełęczy pod Belnią (Ł.03)',
            765 => 'Jaskini Raj (Ł.03)',
            766 => 'Białogonu',
            767 => 'Słowika',

            768 => 'Białogonu',
            769 => 'Szczukowskich Górek PKP',
            770 => 'Karczówki',

            771 => 'Bruszni (309 m)',
            772 => 'Karczówki',
            773 => 'Czarnowa PKP',

            774 => 'Słowika',
            775 => 'Posłowic',
            776 => 'przełęczy pod Obrazikiem',

            777 => 'Białogonu',
            778 => 'przełęczy pod Obrazikiem',

            779 => 'Posłowic',
            780 => 'przełęczy pod Obrazikiem',
            781 => 'Wielkiej (352 m)',
            782 => 'Stadionu (Kielce)',

            //Pasmo 31
            783 => 'Świętej Katarzyny',
            784 => 'Woli Szczygiełkowej',
            785 => 'Budzentyna',

            786 => 'Budzentyna',
            787 => 'Siekierna',

            788 => 'Siekierna',
            789 => 'Wąchocka',
            790 => 'Starachowic',

            791 => 'Łysicy',
            792 => 'Przełęczy Huckiej (495 m)',
            793 => 'Bielin',

            794 => 'Przełęczy Huckiej (495 m)',
            795 => 'Bielin',
            796 => 'Nowej Słupii',
            797 => 'Trzcianki',

            798 => 'Trzcianki',
            799 => 'Nowej Słupii',
            800 => 'Paprocic',
            801 => 'Wału Małacentowskiego (397 m)',

            //Pasmo 32
            802 => 'Ulicka',
            803 => 'Czerniawskiej Kopy (776 m)',
            804 => 'Łącznika (1066 m)',
            805 => 'Suchacza (917 m)',

            806 => 'Ulicka',
            807 => 'Czerniawy Zdroju',

            808 => 'Stogu Izerskiego',
            809 => 'Polany Izerskiej (965 m)',
            810 => 'Suchacza (917 m)',
            811 => 'Czerniawy Zdroju',

            812 => 'Czerniawy Zdroju',
            813 => 'Świeradowa Zdroju',
            814 => 'Polany Izerskiej (965 m)',

            815 => 'Czerniawy Zdroju',
            816 => 'Krobicy',
            817 => 'Świeradowa Zdroju',

            818 => 'Gierczyna',
            819 => 'Krobicy',
            820 => 'Świeradowa Zdroju',
            821 => 'Świeradów Zdrój - Gierczyn',

            //Pasmo 33
            822 => 'Radomierzyc',
            823 => 'Sulikowa',
            824 => 'Zawidowa',

            825 => 'Zawidowa',
            826 => 'Leśnej',
            827 => 'Grodziszcza Średniego',

            828 => 'Grodziszcza Średniego',
            829 => 'Leśnej',
            830 => 'TPG Miłoszów',

            831 => 'TPG Miłoszów',
            832 => 'Leśnej',
            833 => 'Świecia',
            834 => 'Pobiednej',

            835 => 'Świecia',
            836 => 'Leśnej',
            837 => 'Zamku Czocha',
            838 => 'Jeziora Złotnickiego - ośrodek',
            839 => 'Giebułtowa',

            840 => 'Leśnej',

            //Pasmo 34
            841 => 'Przełęczy Szklarskiej (886 m)',
            842 => 'Przełęcz Szklarska (886 m) - przejście graniczne Jakuszyce',
            843 => 'Wodospadu Kamieńczyk',
            844 => 'Przełęczy Mokrej (940 m)',
            845 => 'Końskich Łbów',

            846 => 'Schroniska PTTK Hala Szrenicka (1195 m)',
            847 => 'Końskich Łbów',
            848 => 'Przełęczy Mokrej (940 m)',

            849 => 'Schroniska PTTK Hala Szrenicka (1195 m)',
            850 => 'Końskich Łbów',
            851 => 'Schroniska PTTK Hala pod Łabskim Szczytem (1168 m)',
            852 => 'Czarciej Ambony (Śnieżne Kotły)',
            
            853 => 'Wodospadu Kamieńczyk',
            854 => 'Szklarskiej Poręby-Huty',
            855 => 'Szklarskiej Poręby-Górnej',
            856 => 'Szklarskiej Poręby-Górnej przez Marysin',

            857 => 'Wysokiego Mostu',
            858 => 'Szklarskiej Poręby-Górnej',
            859 => 'Schroniska PTTK Kochanówka Wodospad Szklarki',
            860 => 'Trzech Jaworów (676 m)',
            861 => 'rozdroża pod Wielkim Szyszakiem',

            862 => 'Schroniska PTTK Hala pod Łabskim Szczytem (1168 m)',
            863 => 'Przełęczy pod Śmielcem (1390 m)',

            //Pasmo 35
            864 => 'Grudz',
            865 => 'Barcinka',
            866 => 'Rybnicy ruiny zamku',

            867 => 'Barcinka',
            868 => 'Wrzeszczyna',
            869 => 'Rybnicy PKP',

            870 => 'Góry Stanek (353 m) (S.02)',
            871 => 'Siedlęcina-Bóbr',
            872 => 'Pilchowice-Zapora PKP - Góra Stanek (353 m) (S.02)',

            873 => 'Strzyżowca (S.06)',
            874 => 'Płoszczynki',
            875 => 'Schroniska Perła Zachodu',

            876 => 'Płoszczynki',
            877 => 'Szydłowiska',

            878 => 'Szydłowiska',
            879 => 'Góry Sośni (420 m)',

            //Pasmo 36
            880 => 'Trzcińska',
            881 => 'Przełęczy Przełączka',

            882 => 'Trzcińska',
            883 => 'Krzyżnej Góry (654 m)',
            884 => 'Wojanowa',
            885 => 'Karpnik',

            886 => 'Trzcińska',
            887 => 'Janowic Wielkich',
            888 => 'Przełęczy Karpnickiej (475 m)',
            889 => 'Karpnik',
            890 => 'Przełęczy Przełączka',

            891 => 'Przełęczy Karpnickiej (475 m)',
            892 => 'Krowiarki',
            893 => 'Krowiarki przez Janowickie Skały',
            894 => 'Doliny Janówki',

            895 => 'Karpnik',
            896 => 'Rozdroża pod Jańską Górą',
            897 => 'Stróżnicy',

            898 => 'Stróżnickich Skał',
            899 => 'Stróżnicy',
            900 => 'Doliny Janówki',

            //Pasmo 37
            901 => 'Pilchowic-Zapora PKP',
            902 => 'Płoszczynki',
            903 => 'Siedlęcina-Boru (S.04)',

            904 => 'Nielestna',
            905 => 'Płoszczynki',
            906 => 'Jeżowa Sudeckiego',

            907 => 'Jeżowa Sudeckiego',
            908 => 'Płoszczyny',
            909 => 'Szybowiska (561 m)',

            910 => 'Jeżowa Sudeckiego',
            911 => 'Dziwiszowa',

            912 => 'Bystrzycy',
            913 => 'Wlenia',
            914 => 'Modrzewia',
            915 => 'Rogatki (490 m)',

            916 => 'Modrzewia',
            917 => 'Płoszczyny',
            918 => 'Wleń - Modrzewie',

            //Pasmo 38
            919 => 'Kraszowic',
            920 => 'Nowych Jaroszowic',
            921 => 'Wartowic',
            922 => 'Świeborowic',

            923 => 'Bolesławic',
            924 => 'Włodzic Wielkich',

            925 => 'Kraszowic',
            926 => 'Wartowic',

            927 => 'Tomaszowa Górnego',
            928 => 'Raciborowic',

            929 => 'Włodzic Wielkich',
            930 => 'Skały',
            931 => 'Lwówka Śląskiego',

            932 => 'Lwówka Śląskiego',
            933 => 'Bielanki',
            934 => 'Soboty',

            //Pasmo 39
            935 => 'Doliny Bobru (TPG Niewiadów-Bóbr)',
            936 => 'Dolina Bobru (TPG Niewiadów-Bóbr) - Niedamirów',
            937 => 'Szczepanowa',
            938 => 'Dolina Bobru (TPG Niewiadów-Bóbr) - Przełęcz Lubawska (516 m)',

            939 => 'Niedamirowa',
            940 => 'Doliny Białej Wody (S.03)',
            941 => 'Miszkowic',

            942 => 'Szczepanowa',
            943 => 'Bukówki',
            944 => 'Bukówka - Szczepanów',

            945 => 'Bukówki',
            946 => 'Przełęczy Lubawska (516 m)',
            947 => 'Błażkowej',

            948 => 'Bukówki',
            949 => 'Starej Białki',
            950 => 'Lubawki',
            951 => 'Błażkowej',
            952 => 'Miszkowic',

            953 => 'Starej Białki',
            954 => 'Miszkowic',
            955 => 'Paczyna',
            956 => 'Szarocina',
            957 => 'Stara Białka - Błażkowa',

            //Pasmo 40
            958 => 'Przełęczy Uniemyskiej (PTG Okrzeszyn) (474 m)',
            959 => 'Okrzeszyna',
            960 => 'Beczkowskiego Potoku',

            961 => 'Beczkowskiego Potoku',
            962 => 'Okrzeszyna',
            963 => 'Uniemyśla',
            964 => 'Okrzeszyn - Uniemyśl',
            965 => 'Okrzeszyn - Beczkowski Potok',
            
            966 => 'Bogarii',
            967 => 'Uniemyśla',
            968 => 'Chełmska Śląskiego',
            969 => 'Krzyżówki BHP',
            970 => 'Wiązowej (770 m)',

            971 => 'Wiązowej (770 m)',
            972 => 'Przełęczy Lubawskiej (516 m)',
            973 => 'Lubawki',

            974 => 'Wiązowej (770 m)',
            975 => 'Chełmska Śląskiego',
            976 => 'Rozdrożą Trzech Buków',

            977 => 'Lubawki przez Kruczą Dolinę',
            978 => 'Lubawki',
            979 => 'Przełęczy Ulanowickiej (535 m)',

            //Pasmo 41
            980 => 'Bolkowa',
            981 => 'Wierzchosławic',
            982 => 'Sadów Górnych',

            983 => 'Długiej Góry (635 m)',
            984 => 'Wierzchosławic',
            985 => 'Nagórnika',

            986 => 'Nagórnika',
            987 => 'Domanowa',
            988 => 'Gostkowa',

            989 => 'Nagórnika',
            990 => 'Bolkowa',
            991 => 'Góry Poręby (671 m) (S.06)',
            992 => 'Pastewnika (Przełęcz pod Długotką) (621 m) (S.06)',

            993 => 'Góry Poręby (671 m) (S.06)',
            994 => 'Pastewnika (Przełęcz pod Długotką) (621 m) (S.06)',

            995 => 'Gostkowa',
            996 => 'Sędzisławia',
            997 => 'Marciszowa (S.06)',

            //Pasmo 42
            998 => 'Bystrzycy Górnej',
            999 => 'Lubachowa',
            1000 => 'Zagórza Śląskiego',
            1001 => 'Cerekwicy',
            1002 => 'Bojanickiej Strugi',

            1003 => 'Bojanickiej Strugi',
            1004 => 'Lutomii Górnej',
            1005 => 'Michałkowa',

            1006 => 'Bystrzycy Górnej',
            1007 => 'Bojanic',
            1008 => 'Lutomii Górnej',

            1009 => 'Lubachowa',
            1010 => 'Zagórza Śląskiego',

            1011 => 'Michałkowej',
            1012 => 'Zagórza Śląskiego',
            1013 => 'Lutomii Górnej',
            1014 => 'Kroackiej Studzienki',
            1015 => 'Walimia',

            1016 => 'Lutomii Górnej',
            1017 => 'Lutomii Dolnej (S.20)',
            1018 => 'Rościszowa',

            //Pasmo 43
            1019 => 'Nowej Wsi Kłodzkiej',
            1020 => 'Przełęczy Srebrnej (586 m)',
            1021 => 'Wilczego Rozdroża',
            1022 => 'Wojbórza',
            1023 => 'Słupa (667 m)',

            1024 => 'Stróży (636 m)',
            1025 => 'Czerwieńczyc',
            1026 => 'Wojbórza',

            1027 => 'Srebrnej Góry',
            1028 => 'Nowej Wsi Kłodzkiej',

            1029 => 'Kortunała (675 m)',
            1030 => 'Wojbórza',
            1031 => 'Wilczego Rozdroża',

            1032 => 'Wilczego Rozdroża',
            1033 => 'Żdanowa',
            1034 => 'Wojbórza',
            1035 => 'Piekiełka',

            1036 => 'Żdanowa',
            1037 => 'Przełęczy Srebrnej (586 m)',

            //Pasmo 44
            1038 => 'Słonego',
            1039 => 'Brzozowia',
            1040 => 'Kudowy Zdroju',

            1041 => 'Jeleniowa',
            1042 => 'Brzozowia',
            1043 => 'Lewina Kłodzkiego',

            1044 => 'Ptasznicy (605 m)',
            1045 => 'Lewina Kłodzkiego',
            1046 => 'Taszowa',

            1047 => 'Lewina Kłodzkiego',
            1048 => 'Kocioła',

            1049 => 'Kocioła',
            1050 => 'Lewina Kłodzkiego',
            
            1051 => 'Kudowy Zdroju',
            1052 => 'Jeleniowa',
            1053 => 'Dańczowa',

            //Pasmo 45
            1054 => 'Lewina Kłodzkiegou',
            1055 => 'Miejskiego Lasku',
            1056 => 'Miejskiego Lasku',
            1057 => 'Zimnych Wód',
            1058 => 'Koziej Hali',

            1059 => 'Lewina Kłodzkiego',
            1060 => 'Kocioła',
            1061 => 'Zimnych Wód',

            1062 => 'Kocioła',
            1063 => 'Zimnych Wód',

            1064 => 'Pańskiej Góry (791 m)',
            1065 => 'Koziej Hali (700 do 740 m)',
            1066 => 'Podgórza',
            
            1067 => 'Dusznik Zdroju',
            
            1068 => 'TPG Duszniki Zdrój',
            1069 => 'Dusznik Zdroju',

            //Pasmo 46
            1070 => 'Przełęczy Łaszczowej (585 m)(S.12)',
            1071 => 'Owczej Góry (345 m)',
            1072 => 'Owcza Góra (345 m) - Jedlak',

            1073 => 'Ptasznika (718 m)(S17)',

            1074 => 'Oldrzychowic Kłodzkich',
            1075 => 'Rogówki',

            1076 => 'Gorzanowa',
            1077 => 'Łomnickiej Równi (898 m) (S.14)',
            1078 => 'Huty (S.14)',

            1079 => 'Krzyżowej (508 m)(S.16)',
            1080 => 'Marianówki',

            1081 => 'Długopola Zdroju',
            1082 => 'Jawornicy',

            //Pasmo 47
            1083 => 'Krosnowic',
            1084 => 'Żelazna',
            1085 => 'Gorzanowa',
            1086 => 'Przełęczy Mielnickiej (405 m)',

            1087 => 'Gorzanowa',
            1088 => 'Romanowa',
            
            1089 => 'Żelazna',
            1090 => 'Romanowa Górnego',

            1091 => 'Przełęczy Mielnickiej (405 m)',
            1092 => 'Piotrowic',
            1093 => 'Romanowa Górnego',

            1094 => 'Żelazna',
            1095 => 'Oldrzychowic Kłodzkich',
            1096 => 'Romanowa Górnego',

            1097 => 'Oldrzychowic Kłodzkich',
            1098 => 'Romanowa Górnego',
            1099 => 'Trzebieszowic',
            1100 => 'Nowego Waliszowa',

            //Pasmo 48
            1101 => 'Lasek',
            1102 => 'Mąkolna',

            1103 => 'Mąkolna',
            1104 => 'Złotego Stoku',

            1105 => 'Mąkolna',
            1106 => 'Złotego Stoku',
            1107 => 'Chwalisławia',
            1108 => 'Ożary - Mąkolno',

            1109 => 'Złotego Stoku Przez Złoty Potok',
            1110 => 'Przełęczy Różaniec (583 m)',
            1111 => 'Orłowiec - Przełęcz Różaniec (583 m)',

            1112 => 'Jawornika Małego (756 m)',
            1113 => 'Przełęczy pod Trzeboniem (679 m)',
            1114 => 'Przełęczy Jaworowej (707 m)',
            1115 => 'Orłowca',

            1116 => 'Chwalisławia',
            1117 => 'Haniaka (540 m)',
            1118 => 'Złotego Stoku',
            1119 => 'Złotego Stoku',

            //Pasmo 49
            1120 => 'Głuchołaz',
            1121 => 'Głuchołaz przez Białą Głuchołaską',
            1122 => 'Przełęczy Siodło (502 m)',

            1123 => 'Głuchołaz przez Świńską Drogę',
            1124 => 'Głuchołaz przez Drogę Krzyżową',
            1125 => 'Podlesia',
            1126 => 'Skowronkowa',

            1127 => 'Schroniska pod Biskupią Kopą (850 m)',
            1128 => 'Przełęczy pod Kopą (711 m)',

            1129 => 'Przełęczy pod Zamkową Górą',
            1130 => 'Przełęczy pod Zamkową Górą przez Srebrną Kopę (785 m)',
            1131 => 'Doliny Bystrego Potoku',

            1132 => 'Jarnołtówka',
            1133 => 'Rozdroża pod Piekiełkiem',
            1134 => 'Doliny Bystrego Potoku',
            1135 => 'Przełęczy pod Kopą (711 m)',

            1136 => 'Jarnołtówka',
            1137 => 'Doliny Bystrego Potoku',

            //Pasmo 50
            1138 => 'Rataja (350 m)(S.07)',
            1139 => 'Radogostu (398 m)(S.07)',
            1140 => 'Jawor - Rataj (S.07)',

            1141 => 'Paszowic',
            1142 => 'Wiadrowa',
            1143 => 'Jawora',
            1144 => 'Czernicy',

            1145 => 'Czernicy',
            1146 => 'Niedaszkowa',
            1147 => 'Gniewkowa',
            1148 => 'Gross-Rosen',
            1149 => 'Kostrzy',

            1150 => 'Gross-Rosen',
            1151 => 'Żółkiewki',
            1152 => 'Strzegomia',
            1153 => 'Strzegom - Dobromierz (S.10)',

            //Pasmo 51
            1154 => 'Mokrzeszowa',

            1155 => 'Witoszowa Górnego',
            1156 => 'Bystrzycy Górnej',
            1157 => 'Krzczonowa',

            1158 => 'Bojanickiej Strugi (S.10)',

            1159 => 'Kroackiej Studzienki (S.11)',

            1160 => 'Gogołowa',
            1161 => 'Krzczonowa',
            1162 => 'Kiełczyna',
            1163 => 'Wir',

            1164 => 'Kiełczyna',
            1165 => 'Mysłakowa',
            1166 => 'Rozdroża nad Sadami',

            //Pasmo 52
            1167 => 'Słupic (S.20)',
            1168 => 'Sieniawki',

            1169 => 'Ligoty Wielkiej',
            1170 => 'Roztocznika',
            1171 => 'Gilowa',

            1172 => 'Gilowa',
            1173 => 'Niemczy',
            1174 => 'Przerzeczyna Zdroju',
            1175 => 'skrzyżowania pod Grzybowcem',

            1176 => 'Niemczy',
            1177 => 'Piławy Dolnej',

            1178 => 'Przerzeczyna Zdroju',
            1179 => 'Wojsławic',
            1180 => 'Żelowic',
            1181 => 'Kobylej Głowy',
            1182 => 'Ciepłowód',

            1183 => 'Łagiewnik',
            1184 => 'Wilkowa Wielkiego',
            1185 => 'Niemczy',
            1186 => 'Wojsławic',
            1187 => 'Ostrej Góry (362 m)',
            1188 => 'Wojsławice - Niemcza',

            //Pasmo 53
            1189 => 'Vydrník (C)',
            1190 => 'Hrabušice, Mýto (C)',

            1191 => 'Hrabušice, Mýto (C)',
            1192 => 'od Kláštoriskom (Z, N)',
            1193 => 'Hrdlo Hornádu (N)',

            1194 => 'Podlesok (C)',
            1195 => 'Pod Vtáčím hrbom (C)',
            1196 => 'Pod Kláštoriskom (Ż)',

            1197 => 'Hrabušice, Mýto (Z)',
            1198 => 'Pod Kláštoriskom (Z)',
            1199 => 'Kláštorská roklina, ústie (N)',
            1200 => 'Letanovský mlyn (Ż)',

            1201 => 'Kláštorská roklina, ústie (Ż)',
            1202 => 'Pod Kláštoriskom (Z)',
            1203 => '&Pod Vtáčím hrbom (C)',
            1204 => 'Kyseľ, rázcestie (N)',
            1205 => 'Kyseľ, ústie (Ż)',
            1206 => 'Biely potok, ústie (N)',
            1207 => 'Pod Tomášovským výhľadom (Z, N)',
            1208 => 'Letanovský mlyn (C)',
            1209 => 'Kláštorská roklina, ústie (Z)',

            1210 => 'Letanovce (C)',
            1211 => 'Kláštorská roklina, ústie (N)',
            1212 => 'Pod Tomášovským výhľadom (N)',

            //Pasmo 54
            1213 => 'Strečna (X C, Ż)',

            1214 => 'Strečna (X Ż, C)',
            1215 => 'Varína',
            1216 => 'Chaty w Dolinie Kúru (X Ż, N)',

            1217 => 'Krasňan',

            1218 => 'Starého hradu przez Plešel (981 m) (X C, N)',
            1219 => 'Starého hradu płajem (X C, N)',
            1220 => 'sedla Brestov (X Ż, Z)',
            1221 => 'sedla Brestov przez Kopę (1140 m) (X Ż, Z)',

            1222 => 'Dúbrav razc. przez Jedľovinu (1035 m) (X Ż, Z)',

            1223 => 'chaty pod Suchým',

            //Pasmo 55
            1224 => 'Strečna przystanek ŽSR (X C, Ż)',
            1225 => 'parkingu pod Holým grúňom (Pri Janosikove)',

            1226 => 'Strečna przystanek ŽSR (X C, Ż)',
            1227 => 'Straňav',

            1228 => 'Straňav',
            1229 => 'Trnového',

            1230 => 'sedla Rakytie (X C,Ż)',
            1231 => 'Malofatranského muzeum (X Ż, Z)',
            1232 => 'Vrútok (przystanek SAD Piatrova) (X Ż, Z)',
            1233 => 'sedla pod Kejsovou (X Ż, N)',

            1234 => 'sedla Javorina (980 m) (X C, Z, N)',
            1235 => 'Vrútok (przystanek SAD Piatrova) (X Z, N)',
            1236 => 'Vrútok ŽSR przez Ráztoky (910 m) (X Ż, Z)',
            1237 => 'Vrútok ŽSR przez Hradište (777 m) (X Ż, Z)',
            1238 => 'Višňového',
            1239 => 'Turia (X Z, Ż)',

            1240 => 'chaty „Martinské hole” (X N, Ż)',
            1241 => 'Minčola (X N, Ż, C)',
            1242 => 'Turia przez Križavu (1456 m) (X Z, Ż)',
            1243 => 'Kuneradu przez Stranskú dolinu (X N, Ż)',
            1244 => 'Vidlici (1466 m) (X C, Ż)',

            //Pasmo 56
            1245 => 'Krpelany (410 m) (X N, Ż)',
            1246 => 'Korbeľka (480 m) (X C, Z)',
            1247 => 'Lubochnianske Sedlo (762 m) (X N, C)',
            1248 => 'Korbeľka (480 m) (X C, Z) - Ľubochňa (440 m) (X Ż, C)',
            1249 => 'Korbeľka (480 m) (X C, Z) - Stankovany, vlak (440 m) (X Ż, C)',
            1250 => 'Stankovany, vlak (440 m) (X Ż, C) - Kraľovany, Dierová (440 m) przez Podšíp (745 m)',

            1251 => 'Krpelany (X N, Z)',
            1252 => 'Lubochna ZSR (451 m) (X C, Ż)',
            1253 => 'Vysne Rudno (1040 m) (X Ż, C)',
            1254 => 'Nolcovo (410 m) - Nad Nolcovom (450 m) (X Z, Ż)',
            1255 => 'Nad Nolcovom (450 m) (X Z, Ż) - Magura (1059 m) - Vysne Rudno (1040 m) (X Ż, C)',
            1256 => 'Krpelany (X Z, N) - Nolcovo (X Ż, C)',

            1257 => 'Vysne Rudno (X C, Ż)',
            1258 => 'Nad Nolcovom (X Z, Ż)',
            1259 => 'Klak (l394) (X C, Ż, Z, N)',

            1260 => 'Lubochnianska Dolina (Rakowa, 570 m)',
            1261 => 'Podhradie (480 m) (X C, N, Z)',
            1262 => 'Kaplna Razcestie (Leśn. Kantor, 567 m) (X Ż, Z)',
            1263 => 'Smrekove (890 m)',
            1264 => 'Jarabina (1313 m) (X C, N)',
            1265 => 'Sklabinsky Podzamok (550 m) (X Z, C) - Kaplna Razc. (X Z, Ż)',
            1266 => 'Kaplna Razc. - Kantorska Dolina - Sedlo za Keckou (990 m)',
            1267 => 'Podhradie (X C, N, Z) - Smrekowe (890)',
            1268 => 'Podhradie (X C, N, Z) - Kutova Skala (927 m) - Sklabinsky Podzamok (550 m) (X C, Z)',
            1269 => 'Sklabina (480 m) - Medzi Mnichmi (500 m) (X Ż, N)',
            1270 => 'Medzi Mnichmi (X Ż, N) (500 m) - Lucenec (l041 m) (X C, N)',
            1271 => 'Na Jamę (550 m) - Lucenec (l041 m) (X C, N)',
            1272 => 'Na Jamę (550 m) (X Ż, N) - Maziarky (850 m) (X Ż, N)',
            1273 => 'Maziarky (850 m) (X Ż, N) - Kecka (l139 m) - przez Sedlo za Keckou',
            1274 => 'Medzi Mnichmi (X Ż, N) (500 m) - Na Jamę (550 m) (X Ż, N)',

            //Pasmo 57
            1275 => 'Sedlo Bukovina (X, N/Z, słupek graniczny 148/4, ok. 1000 m)',
            1276 => 'Vychylovka Podrycierova Sudovci (705 m) (Z)',
            1277 => 'Sedlo Demanova (940 m) - Mrvova Kykula (1040 m) (Z/bz)',
            1278 => 'Sedlo Demanova (930 m) - Sedlo Bukovina (X, Z, N/Z)',
            1279 => 'Vychylovka Rycierki (610 m) - Sedlo Demanova (930 m) (X N, C) przez Muzeum Kysuckej Dediny',
            1280 => 'Nova Bystrica (530 m) - Stary Diel - Sajdovia (907 m) - Mrvova Kykula',

            1281 => 'Sedlo pod Svitkovou (940 m) (Przełęcz Przyslop)',
            1282 => 'Majov (1135 m)',

            1283 => 'Majov (1135 m)',
            1284 => 'Javorina (1173 m)',

            1285 => 'Javorina (1173 m)',
            1286 => 'Stara Bystrica Centrum (480 m) (X Z, Ż)',

            //Pasmo 58
            1287 => 'Demänovej (przełęcz między Drabirovcem a Rabčovou Kykulou) (ok. 930 m) (X C, Z)',
            1288 => 'sedla Podúšust (przełęcz Podoszus) (946 m) przez Rovný Beskid (Równy Beskid) (X Ż, N)',
            1289 => 'Sedlo Prislop (940 m) przez Svitkowa (1082 m) (X Ż, N, Z)',

            1290 => 'Vychylovky wzdłuż toru kolejki leśnej',
            1291 => 'chaty „Kohútik”',

            1292 => 'chaty „Kohútik” (X Ż, C)',

            1293 => 'sedla Podúšust (946 m) (X N, Ż)',
            1294 => 'przełęczy Glinka (Ujsolskiej) (847 m), dawne przejście Ujsoły – Novoť',

            1295 => 'przystanku SAD Novoť – PS BZ',

            1296 => 'przełęczy Glinka (847 m)',
            1297 => 'Mutpanského sedla (przełęcz Szeroki Kamień) (922 m) (X N/Ż, Z) przez Hrubą Buczynę (1131 m)',

            //Pasmo 59
            1298 => 'Cerveny Klastor - Kładka',
            1299 => 'Polany Huta (X C, Ż) (460 m)',
            1300 => 'Sedlo Cerla (X C, N) (603 m)',
            1301 => 'Szczawnica Nż przejście graniczne - Lesnicky Potok Ujście (X C, N)',
            1302 => 'Lesnicky Potok Ujście - Polana Huta SEDNO (X C, Ż)',
            1303 => 'Szczawnica Nż. – przejście graniczne – Cerveny Klastor',

            1304 => 'Rozcestie pod Plasnou (X C, Z) (835 m) przez Plasna (889 m)',
            1305 => 'Vyhliadka (Targov, 675 m) (X N, Ż)',

            1306 => 'Polany Huta (X C, Ż)',
            1307 => 'Lesnica (Remiza A, 500 m)',
            1308 => 'Sedlo Cerla (X C, N)',

            1309 => 'Lesnica (Remiza A) (X Ż, N)',
            1310 => 'Chata Pieniny',
            1311 => 'Salamonove (X Z, N) (SG II 91, 620 m)',
            1312 => 'Stranany Horny Konec (660 m) - Sedlo (729 m)',
            1313 => 'Sedlo (729 m) - Polana Janeckov (Janeczków) (X Z, N) (SG II 76, 960m)',

        ];

        $licznik = 1;

        foreach($punkty as $klucz => $punkt) {
            if($klucz == 5 || $klucz == 7 || $klucz == 9 || $klucz == 13 || $klucz == 15 || $klucz == 18 || $klucz == 20 || $klucz == 23 || $klucz == 25 || $klucz == 28 || $klucz == 31 || $klucz == 33 || $klucz == 35 || $klucz == 38 || $klucz == 40 || $klucz == 42 || $klucz == 44 || $klucz == 46 || $klucz == 48 || $klucz == 51 || $klucz == 54 || $klucz == 57 || $klucz == 60 || $klucz == 62  || $klucz == 72 || $klucz == 73 ||  $klucz == 76 || $klucz == 79 || $klucz ==82 || $klucz == 85 
            || $klucz == 88 || $klucz == 93 || $klucz == 101 || $klucz == 107 || $klucz == 110 || $klucz == 113 || $klucz == 117  || $klucz == 123 || $klucz == 126 || $klucz == 129 || $klucz == 132 || $klucz == 135 || $klucz == 151 || $klucz == 181 || $klucz == 192 || $klucz == 206  || $klucz == 210 || $klucz == 213 || $klucz == 217 || $klucz == 222 || $klucz == 228 || $klucz == 235 || $klucz == 237 || $klucz == 246 || $klucz == 249 || $klucz == 254 || $klucz == 261  || $klucz == 263  || $klucz == 265 || $klucz == 267 
            || $klucz == 270 || $klucz == 274 || $klucz == 278 || $klucz == 283 || $klucz == 285 || $klucz == 291 || $klucz == 295 || $klucz == 299 || $klucz == 302 || $klucz == 307 || $klucz == 310 || $klucz == 312 || $klucz == 315 || $klucz == 318 || $klucz == 324 || $klucz == 328 || $klucz == 331 || $klucz == 339 || $klucz == 343|| $klucz == 346|| $klucz == 350|| $klucz == 357|| $klucz == 362 || $klucz == 364 || $klucz == 366 || $klucz == 369 || $klucz == 374 || $klucz == 377 || $klucz == 379 || $klucz == 381 || $klucz == 385
            || $klucz == 392 || $klucz == 400|| $klucz == 402|| $klucz == 404 || $klucz == 408 || $klucz == 410 || $klucz == 415 || $klucz == 418 || $klucz == 423 || $klucz == 427 || $klucz == 433 || $klucz == 438 || $klucz == 442 || $klucz == 448 || $klucz == 450 || $klucz == 452 || $klucz == 458 || $klucz == 460 || $klucz == 464 || $klucz == 468 || $klucz == 470 || $klucz == 473 || $klucz == 487 || $klucz == 490 || $klucz == 497 || $klucz == 501 || $klucz == 503 || $klucz == 510
            || $klucz == 512 || $klucz == 515 || $klucz == 522 || $klucz == 525 || $klucz == 527 || $klucz == 529 || $klucz == 533 || $klucz == 538 || $klucz == 543 || $klucz == 545 || $klucz == 548 || $klucz == 555 || $klucz == 559 || $klucz == 562 || $klucz == 566 || $klucz == 569 || $klucz == 572 || $klucz == 576 || $klucz == 580 || $klucz == 576 || $klucz == 584 || $klucz == 588 || $klucz == 594 || $klucz == 598 || $klucz == 602 || $klucz == 609 || $klucz == 613 || $klucz == 621 || $klucz == 625 || $klucz == 631 || $klucz == 635
            || $klucz == 642 || $klucz == 645 || $klucz == 650 || $klucz == 654 || $klucz == 656 || $klucz == 661 || $klucz == 663 || $klucz == 666 || $klucz == 669 || $klucz == 678 || $klucz == 682 || $klucz == 685 || $klucz == 688 || $klucz == 693 || $klucz == 696 || $klucz == 699 || $klucz == 704 || $klucz == 709 || $klucz == 713 || $klucz == 715 || $klucz == 720 || $klucz == 722 || $klucz == 727 || $klucz == 731 || $klucz == 733 || $klucz == 735 || $klucz == 738 || $klucz == 741 || $klucz == 744 || $klucz == 746 || $klucz == 748
            || $klucz == 751 || $klucz == 754 || $klucz == 757 || $klucz == 759 || $klucz == 762 || $klucz == 764 || $klucz == 768 || $klucz == 771 || $klucz == 774 || $klucz == 777 || $klucz == 779 || $klucz == 783 || $klucz == 786 || $klucz == 788 || $klucz == 791 || $klucz == 794 || $klucz == 798 || $klucz == 802 || $klucz == 806 || $klucz == 808 || $klucz == 812 || $klucz == 815 || $klucz == 818 || $klucz == 822 || $klucz == 825 || $klucz == 828 || $klucz == 831 || $klucz == 835 || $klucz == 840 || $klucz == 841
            || $klucz == 846 || $klucz == 849 || $klucz == 853 || $klucz == 857 || $klucz == 862 || $klucz == 864 || $klucz == 867 || $klucz == 869 || $klucz == 873 || $klucz == 876 || $klucz == 878 || $klucz == 880 || $klucz == 882 || $klucz == 886 || $klucz == 891 || $klucz == 895 || $klucz == 898 || $klucz == 901 || $klucz == 904 || $klucz == 907 || $klucz == 910 || $klucz == 912 || $klucz == 916 || $klucz == 919 || $klucz == 923 || $klucz == 925 || $klucz == 927 || $klucz == 929 || $klucz == 932 || $klucz == 935
            || $klucz == 939 || $klucz == 942 || $klucz == 945 || $klucz == 948 || $klucz == 953 || $klucz == 958 || $klucz == 961 || $klucz == 966 || $klucz == 971 || $klucz == 974 || $klucz == 977 || $klucz == 980 || $klucz == 983 || $klucz == 986 || $klucz == 989 || $klucz == 993 || $klucz == 995 || $klucz == 998 || $klucz == 1003 || $klucz == 1006 || $klucz == 1009 || $klucz == 1011 || $klucz == 1016 || $klucz == 1019 || $klucz == 1024 || $klucz == 1027 || $klucz == 1029 || $klucz == 1032 || $klucz == 1036 || $klucz == 1038
            || $klucz == 1041 || $klucz == 1044 || $klucz == 1047 || $klucz == 1049 || $klucz == 1051 || $klucz == 1054 || $klucz == 1059 || $klucz == 1062 || $klucz == 1064 || $klucz == 1067 || $klucz == 1068 || $klucz == 1070 || $klucz == 1073 || $klucz == 1074 || $klucz == 1076 || $klucz == 1079 || $klucz == 1081 || $klucz == 1083 || $klucz == 1087 || $klucz == 1089 || $klucz == 1091 || $klucz == 1094 || $klucz == 1097 || $klucz == 1101 || $klucz == 1103 || $klucz == 1105 || $klucz == 1109 || $klucz == 1112 || $klucz == 1116 || $klucz == 1120
            || $klucz == 1123 || $klucz == 1127 || $klucz == 1129 || $klucz == 1132 || $klucz == 1136 || $klucz == 1138 || $klucz == 1141 || $klucz == 1145 || $klucz == 1150 || $klucz == 1154 || $klucz == 1155 || $klucz == 1158 || $klucz == 1159 || $klucz == 1160 || $klucz == 1164 || $klucz == 1167 || $klucz == 1169 || $klucz == 1172 || $klucz == 1176 || $klucz == 1178 || $klucz == 1183 || $klucz == 1189 || $klucz == 1191 || $klucz == 1194 || $klucz == 1197 || $klucz == 1201 || $klucz == 1210 || $klucz == 1213
            || $klucz == 1214 || $klucz == 1217 || $klucz == 1218 || $klucz == 1222 || $klucz == 1223 || $klucz == 1224 || $klucz == 1226 || $klucz == 1228 || $klucz == 1230 || $klucz == 1234 || $klucz == 1240 || $klucz == 1245 || $klucz == 1251 || $klucz == 1257 || $klucz == 1260 || $klucz == 1275 || $klucz == 1281 || $klucz == 1283 || $klucz == 1285 || $klucz == 1287
            || $klucz == 1290 || $klucz == 1292 || $klucz == 1293 || $klucz == 1295 || $klucz == 1296 || $klucz == 1298 || $klucz == 1304 || $klucz == 1306 || $klucz == 1309 || $klucz == 1314) {$licznik++;}
            DB::table('podpunkt')->insert([
                'nazwa' => $punkt,
                'id_punkt' => $licznik,
                'created_at' => $generator->dateTime(),
                'updated_at' => $generator->dateTime(),
            ]);
        }
    }
}
