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
            
            72 => 'z przystanku PKS Dolina Chochołowska',
            
            73 => 'z Polany Biały Potok',
            74 => 'z Siwej Polany',
            75 => 'z Polany Trzydniówka / Starorobociańskiej Doliny',
            
            76 => 'z Polany Biały Potok',
            77 => 'z Wyżniej Kiry Miętusie',
            78 => 'z Polany Huciska',
            
            79 => 'z Polany Trzydniówka / Starorobociańskiej Doliny',
            80 => 'z Doliny Jarząbczej',
            81 => 'z Wyżniej Doliny Chochołowskiej',
            
            82 => 'z Polany Trzydniówka Starorobociańskiej Doliny',
            83 => 'z Doliny Jarząbcze',
            84 => 'z Kończystego Wierchu (2002 m)',

            85 => 'z Chochołowa',
            86 => 'z Witowa',
            87 => 'z przystanku PKS "Dolina Chochołowska"',

            88 => 'z przystanku PKS "Dolina Chochołowska" przez Mietłówkę (1128 m)',
            89 => 'z Witowa przez Mietłówkę (1128 m)',
            90 => 'z Kir',
            91 => 'z Gronika',
            92 => 'ze Skibówek',

            93 => 'z Kir',
            94 => 'z Palenicy Kościeliskiej (1183 m)',
            95 => 'z Dzianisza',
            96 => 'z Gronika',
            97 => 'z Chochołowa',
            98 => 'z Domu Turysty PTTK',
            99 => 'z Hotelu Kasprowy',
            100 => 'ze Skibówek',

            101 => 'z Butorowego Wierchu (1160 m)',
            102 => 'z Nowego Bystrego',
            103 => 'z Rogoźnika',
            104 => 'z Eliaszówki',
            105 => 'z Domu Turysty PTTK przez Kotelnicę',
            106 => 'z Domu Turysty PTTK',

            107 => 'od szpitala zakaźnego',
            108 => 'z Szaflar przez Maruszynę',
            109 => 'z Szaflar przez Rolów Wierch (1010 m)',

            110 => 'z Cisowej Skały (685 m) (BZ.08)',
            111 => 'z Ludźmierza (BZ.07)',
            112 => 'Nowy Targ - Cisowa Skała (685 m) (BZ.08)',

            113 => 'z Pod Bielou Skalou (930 m)',
            114 => 'z Przełęczy Palenica (X C, Ż) (1570 m)',
            115 => 'z Przełęczy Preduvratie (X Z, N) (1590 m)',
            116 => 'Zuberec - Pod Bielou Skalou',
            
            117 => 'i BZ z Jalovec (700 m)',
            118 => 'i BZ z Polana Tokariny (X Ż, Z) (780 m)',
            119 => 'ze Schroniska Cervenec (1420 m)',
            120 => 'z Jalovska Dolina Ustie (X C, Ż) (800 m)',
            121 => 'Polana Tokariny (X) - Przełęcz Preduvratie (X) - przez Babky (1567 m)',
            122 => 'Schronisko Cervenec - Przełęcz Preduvratie (X)',

            123 => 'z Polany Tokariny (X)',
            124 => 'z Doliny Jalovska Razc. (X Ż, Z, N) (1006 m)',
            125 => 'z Przełęczy Palenica (X) (1570 m) przez Bobrovecka Doline',

            126 => 'z Jalovska Dolina Razc. (X)',
            127 => 'z Salatin (X Z, C) (2047)',
            128 => 'z Przełęczy Banikovska (X N, C, Ż, Z) (2040 m)',

            129 => 'z Przełęczy Palenica (Ż, X)',
            130 => 'z Salatin (Z, X)',
            131 => 'ze Schroniska Zverovka (1037 m)',

            132 => 'z Salatin (X)',
            133 => 'z Banikov (X C, Z) (2178 m)',
            134 => 'z Spalena Dolina Razc. II (X Ż, Z) (1540 m)',

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
            196 => '(BZ) - Popradske Pleso SK ',
            197 => 'Schronisko pod Soliskom (X) – Predne Solisko (2093 m)',
            198 => 'Strbske Pleso (X) – Bystra Lavka (2300 m) przez Mlynicka Dolina (UWAGA – wejście jednokierunkowe',
            199 => 'Bystra Lavka – Furkotska Dolina Razc. II (X Ż,N (1770 m) (UWAGA – zejście jednokierunkowe)',
            200 => 'Furkotska Dolina Razc. II (X) – Schronisko pod Soliskom (X)',
            201 => 'Furkotska Dol. II (X) – Furkotska Dolina Razc. I (X)',
            202 => 'Razc. Trigan (X) – Popradske Pleso (X)',
            203 => 'Popradske Pleso (X) – Symbolicky Cintorin (1525 m) (zachodnim brzegiem stawu) – Popradska Polana (1500 m)',
            204 => '(BZ) - Popradske Pleso SK – Popradska Polana',
            205 => '(BZ) - Popradske Pleso – szlak okrężny',

            206 => 'z Popradske Pleso (X)',
            207 => 'z Przełęcz Vysne Koprovske (X)',
            208 => 'z Schronisko pod Rysmi (2250 m)',
            209 => 'Schronisko pod Rysmi – Rysy (2502 m)',

            210 => 'z Zdiar Tatra A (865 m)',
            211 => 'z Zdiar Strednica A, Prk (1020 m)',
            212 => 'z Przełęczy Kopske (1750 m)',
            
            213 => 'z Tatranska Kotlina Carda A (760 m)',
            214 => 'z Chaty Plesnivec (1290 m)',
            215 => 'z Chaty Plesnivec przez dolinę Rakuska',
            216 => 'z Kezmarske Zlaby A (902 m)',

            217 => 'Koprova Dolina Razc. Pod Grunikom (X N, Z) (1100 m)',
            218 => 'z Chaty Plesnivec',
            219 => 'z Przełęczy Kopske (X N, Z)',
            220 => '(BZ) - Tatranska Kotlina Belianska Jaskyna A (760 m) – Belianska Jaskyna Vstup',
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

            249 => 'z Kecka (1225 m)',
            250 => 'z Kozi Chrbat (1330 m)',
            251 => 'z Mostenica Kysla (656 m) przez Przełęcz Zubova',
            252 => 'z Hiadelske Sedlo (1099 m)',
            253 => 'Mostenica (480 m) – Uhliarska Dolina – Mostenica Kysla',

            254 => 'z Kozi Chrbat',
            255 => 'z Korytnica Kupele (83O m) przez Przełęcz Baba',
            256 => 'z Hiadel (500 m)',
            257 => 'z Velka Chochula (1753 m)',
            258 => 'z Donovaly (980 m) – Polianka (1045)',
            259 => 'z Polianka – Kecka',
            260 => 'z Korytnica autobus – Korytnica Kupele',

            261 => 'z Kosarisko (1694 m)',
            262 => 'z Brusno SK (450 m)',

            263 => 'z Sedl pod Skalkou (X, Ż/C)',
            264 => 'z Raztocka Hola (1565 m)',

            265 => 'z Liptowska Luzna/Penzion Baltazar (720 m)',
            266 => 'z Latiborska Hola (1648 m)',

            267 => 'z Latiborska Hola',
            268 => 'z Przełęczy Zamostskej Hole (1591 m)',
            269 => 'z Magurka (1035 m)',

            270 => 'z Cieszyna przez Mniszewo',
            271 => 'z Bażantowic',
            272 => 'z Lesznej Górnej',
            273 => 'z Goleszowa',

            274 => 'z Bażantowic',
            275 => 'z Dzięgielowa - Zamek',
            276 => 'z Goleszowa',
            277 => 'z Cisownicy',
            
            278 => 'z Jasieniowej (521 m)',
            279 => 'z Goleszowa',
            280 => 'z Lesznej Górnej',
            281 => 'z Cisownicy',
            282 => 'z Ustronia',
            
            283 => 'z Lesznej Górnej',
            284 => 'ze Schroniska PTTK Tuł (621 m)',

            285 => 'ze Schroniska PTTK Tuł (621 m)',
            286 => 'z Ostrego (712 m)',
            287 => 'z Cisownicy',
            288 => 'z Ustronia',
            289 => 'z Dziędielowa - Zamku',
            290 => 'z Lesznej Górnej',

            291 => 'z Małej Czantorii (864 m)',
            292 => 'z Ustronia przez Poniwiec',
            293 => 'z Ustronia - Polany',
            294 => 'z Przełęczy Beskidek (684 m)',

            295 => 'ze Zwardonia (Górka Gomółka)',
            296 => 'z Kiczory',
            297 => 'z Lalik',
            298 => 'z Soli',
            
            299 => 'ze Zwardonia (Górka Gomółka',
            300 => 'z Magury (1073 m)',
            301 => 'z Ożnej (1073 m)',

            302 => 'ze Zwardonia (Górka Gomółka)',
            303 => 'z Soli',
            304 => 'z Łysicy (704 m)',
            305 => 'z Rycerki Górnej',
            306 => 'z Rycerki Górnej Kolonia',

            307 => 'z Soli',
            308 => 'z Rycerki Dolnej',
            309 => 'z Oźnej (952 m)',

            310 => 'z Rycerki Górnej',
            311 => 'z Rycerki Górnej Kolonia',

            312 => 'z Magury (1073 m)',
            313 => 'z Rycerki Górnej Kolonia',
            314 => 'ze Schroniska PTTK Przegibek',

            315 => 'z Porąbki',
            316 => 'z Kóz',
            317 => 'z Bujakowa',

            318 => 'z Bujakowskiego Gronia (749 m)',
            319 => 'z Porąbki',
            320 => 'z Kóz',
            321 => 'z Lipnika',
            322 => 'z Przełęczy między Gaikami (809 m) a Groniczkami (839m)',
            323 => 'z Międzybrodzia Bialskiego',

            324 => 'z Porąbki',
            325 => 'Międzybrodzia Bialskiego',
            326 => 'z Lipnika',
            327 => 'ze Straconki',

            328 => 'z  Przełęczy między Gaikami (809 m) a Groniczkami (839 m)',
            329 => 'z Magurki Wilkowickiej (909 m) - Schronisko PTTK',
            330 => 'z Podlasu',

            331 => 'ze Straconki',
            332 => 'z Mikuszowic Krakowskich',
            333 => 'ze Stalownika przez Łysą Przełęcz (563 m)',
            334 => 'ze Stalownika przez Rogacz (828 m)',
            335 => 'z Wilkowic',
            336 => 'z Ponikwi',
            337 => 'z Czupla (933 m)',
            338 => 'z Międzybrodzia Bialskiego',

            339 => 'z Międzybrodzia Bialskiego',
            340 => 'z Łodygowic',
            341 => 'z Czernichowa przez Suchy Wierch (799 m)',
            342 => 'z Przyszopu (601 m)',

            343 => 'z Moszczanicy',
            344 => 'z Rychwałdu',
            345 => 'z Pewli Małej',

            346 => 'z Rychwałdu',
            347 => 'z Pewli Małej',
            348 => 'z Gilowic',
            349 => 'z Pewli Ślemieńskiej',

            350 => 'z Jeleśni',
            351 => 'z Pewli Ślemieńskiej',
            352 => 'z Pewli Małej',
            353 => 'ze Ślemienia',
            354 => 'z Gachowizny (758 m)',
            355 => 'z Huciska',
            356 => 'z Pewli Wielkiej',

            357 => 'z Huciska',
            358 => 'ze Ślemienia',
            359 => 'z Koconia',
            360 => 'z Kurowa',
            361 => 'z Gronia Wajdów (677 m)',

            362 => 'z Nad Płonem (BZ.03)',
            363 => 'z Koconia',

            364 => 'z Lasu',
            365 => 'z Kukowa',

            366 => 'z Rabki Zdroju',
            367 => 'z Rokicin (PKP)',
            368 => 'z Rdzawki',

            369 => 'z Rokicin (PKP)',
            370 => 'z Raby Wyżnej',
            371 => 'z Sieniawy',
            372 => 'z  Obidowej - PKS Rdzawka II',
            373 => 'z Piątkowej (715 m)',

            374 => 'z Sieniawy',
            375 => 'z Rdzawki',
            376 => 'z Przełęczy Sieniawskiej',
            
            377 => 'z Przełęczy Sieniawskiej',
            378 => 'z Lasku',
            
            379 => 'z Bacówki PTTK Maciejowa',
            380 => 'z Rdzawki',

            381 => 'z Rabki Zdroju',
            382 => 'z Rabki Słone (tama)',
            383 => 'z Olszówki',
            384 => 'z Poręby Górnej',

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

        ];

        $licznik = 1;

        foreach($punkty as $klucz => $punkt) {
            if($klucz == 5 || $klucz == 7 || $klucz == 9 || $klucz == 13 || $klucz == 15 || $klucz == 18 || $klucz == 20 || $klucz == 23 || $klucz == 25 || $klucz == 28 || $klucz == 31 || $klucz == 33 || $klucz == 35 || $klucz == 38 || $klucz == 40 || $klucz == 42 || $klucz == 44 || $klucz == 46 || $klucz == 48 || $klucz == 51 || $klucz == 54 || $klucz == 57 || $klucz == 60 || $klucz == 62  || $klucz == 72 || $klucz == 73 ||  $klucz == 76 || $klucz == 79 || $klucz ==82 || $klucz == 85 
            || $klucz == 88 || $klucz == 93 || $klucz == 101 || $klucz == 107 || $klucz == 110 || $klucz == 113 || $klucz == 117  || $klucz == 123 || $klucz == 126 || $klucz == 129 || $klucz == 132 || $klucz == 135 || $klucz == 151 || $klucz == 181 || $klucz == 192 || $klucz == 206  || $klucz == 210 || $klucz == 213 || $klucz == 217 || $klucz == 222 || $klucz == 228 || $klucz == 235 || $klucz == 237 || $klucz == 246 || $klucz == 249 || $klucz == 254 || $klucz == 261  || $klucz == 263  || $klucz == 265 || $klucz == 267 
            || $klucz == 270 || $klucz == 274 || $klucz == 278 || $klucz == 283 || $klucz == 285 || $klucz == 291 || $klucz == 295 || $klucz == 299 || $klucz == 302 || $klucz == 307 || $klucz == 310 || $klucz == 312 || $klucz == 315 || $klucz == 318 || $klucz == 324 || $klucz == 328 || $klucz == 331 || $klucz == 339 || $klucz == 343|| $klucz == 346|| $klucz == 350|| $klucz == 357|| $klucz == 362 || $klucz == 364 || $klucz == 366 || $klucz == 369 || $klucz == 374 || $klucz == 377 || $klucz == 379 || $klucz == 381 || $klucz == 385
            || $klucz == 392 || $klucz == 400|| $klucz == 402|| $klucz == 404 || $klucz == 408 || $klucz == 410 || $klucz == 415 || $klucz == 418 || $klucz == 423 || $klucz == 427 || $klucz == 433 || $klucz == 438 || $klucz == 442 || $klucz == 448 || $klucz == 450 || $klucz == 452 || $klucz == 458 || $klucz == 460 || $klucz == 464 || $klucz == 468 || $klucz == 470 || $klucz == 473 || $klucz == 487 || $klucz == 490 || $klucz == 497 || $klucz == 501 || $klucz == 503 || $klucz == 510
            || $klucz == 512 || $klucz == 515 || $klucz == 522 || $klucz == 525 || $klucz == 527 || $klucz == 529 || $klucz == 533 || $klucz == 538 || $klucz == 543 || $klucz == 545 || $klucz == 548 || $klucz == 555) {$licznik++;}
            DB::table('podpunkt')->insert([
                'nazwa' => $punkt,
                'id_punkt' => $licznik,
                'created_at' => $generator->dateTime(),
                'updated_at' => $generator->dateTime(),
            ]);
        }
    }
}
