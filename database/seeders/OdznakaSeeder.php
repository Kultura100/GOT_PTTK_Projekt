<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Odznaka;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OdznakaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generator = Factory::create();

        $odznaka = [
            1 => 'W góry - Brązowa',        
            2 => 'W góry - Srebrna',
            3 => 'W góry - Złota',
            4 => 'Popularna',
            5 => 'Mała Brązowa',
            6 => 'Mała Srebrna',
            7 => 'Mała Złota',
            8 => 'Duża Brązowa',
            9 => 'Duża Srebrna',
            10 => 'Duża Złota',
            11 => 'Za wytrwałość',
            12 => 'Przodownik',
            13 => 'Honorowy Przodownik',

        ];

        $punkty = [
            1 => 15,
            2 => 30,
            3 => 45,
            4 =>60,
            5 =>20,
            6 =>360,
            7 =>720,
            8 =>"Odbycie dwóch regulaminowych wycieczek wielodniowych w dwóch wybranych terenach górskich I-VI",
            9 =>"Odbycie dwóch regulaminowych wycieczek wielodniowych w dwóch wybranych terenach górskich I–VI, z pominięciem tych ze stopnia brązowego.
            Dodatkowo należy zdobyć 100 punktów w Górach Świętokrzyskich.",
            10 =>"Odbycie dwóch regulaminowych wycieczek wielodniowych w dwóch pozostałych terenach górskich I–VI.
            W Tatrach i na Podtatrzu 150 punktów,60 punktów w Tatrach Zachodnich, 60 punktów w Tatrach Wysokich, 30 punktów na Podtatrzu.",
            11 =>"Posiadacz dużego złotego stopnia GOT PTTK musi uzyskać siedmiokrotnie, a posiadacz małego złotego stopnia GOT PTTK dziesięciokrotnie normę konieczną do zdobycia któregokolwiek małego stopnia GOT PTTK.
            Jeśli posiadacz małego złotego stopnia GOT PTTK, który zdobywa którąkolwiek normę do odznaki „Za wytrwałość” chce zdobyć duże stopnie GOT PTTK, to zgodnie z § 8 pkt 1 regulaminu nie może równocześnie w latach ich zdobywania uzyskiwać norm do GOT PTTK „Za wytrwałość”.
            Nadwyżek punktów nie zalicza się do kolejnej zdobywanej normy.",
            12 =>"Kandydat na przodownika powinien spełniać następujące warunki: 
            ukończone 18 lat,minimum średnie wykształcenie,co najmniej cztery lata stażu w PTTK,GOT małą w stopniu złotym,pisemną rekomendację macierzystego Oddziału PTTK",
            13 =>"Kandydat mianowany na wniosek własny albo Komisji Egzaminacyjnej",
        ];

        $zrodlo = [
            1 => "/images/odznaki/w_gory_mb.png",
            2 => "/images/odznaki/w_gory_ms.png",
            3 => "/images/odznaki/w_gory_mz.png", 
            4 => "/images/odznaki/gotp.gif",
            5 => "/images/odznaki/gotmb.gif",
            6 => "/images/odznaki/gotms.gif",
            7 => "/images/odznaki/gotmz.gif",
            8 => "/images/odznaki/gotdb.gif",
            9 => "/images/odznaki/gotds.gif",
            10 => "/images/odznaki/gotdz.gif",
            11 => "/images/odznaki/gotzw.gif",
            12 => "/images/odznaki/gotprzod.gif",
            13 => "/images/odznaki/gotph.gif",

        ];
        
        foreach($odznaka as $klucz => $odznaka) {
            DB::table('odznaka')->insert([
                'nazwa' => $odznaka,
                'zrodlo' => $zrodlo[$klucz],
                'wymaganepunkty' => $punkty[$klucz],
                'created_at' => $generator->dateTime(),
                'updated_at' => $generator->dateTime(),
            ]);
        }
    }
}
