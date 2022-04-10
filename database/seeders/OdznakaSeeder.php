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
            1 => 'Popularna',
            2 => 'Mała Brązowa',
            3 => 'Mała Srebrna',
            4 => 'Mała Złota',
            5 => 'Duża Brązowa',
            6 => 'Duża Srebrna',
            7 => 'Duża Złota',
            8 => 'Za wytrwałość',
            9 => 'Przodownik',
            10 => 'Honorowy Przodownik',
            11 => 'W góry - Brązowa',
            12 => 'W góry - Srebrna',
            13 => 'W góry - Złota',
        ];

        $punkty = [
            1 =>60,
            2 =>120,
            3 =>360,
            4 =>720,
            5 =>"Odbycie dwóch regulaminowych wycieczek wielodniowych w dwóch wybranych terenach górskich I-VI",
            6 =>"Odbycie dwóch regulaminowych wycieczek wielodniowych w dwóch wybranych terenach górskich I–VI, z pominięciem tych ze stopnia brązowego.
            Dodatkowo należy zdobyć 100 punktów w Górach Świętokrzyskich.",
            7 =>"Odbycie dwóch regulaminowych wycieczek wielodniowych w dwóch pozostałych terenach górskich I–VI.
            W Tatrach i na Podtatrzu 150 punktów,60 punktów w Tatrach Zachodnich, 60 punktów w Tatrach Wysokich, 30 punktów na Podtatrzu.",
            8 =>"Posiadacz dużego złotego stopnia GOT PTTK musi uzyskać siedmiokrotnie, a posiadacz małego złotego stopnia GOT PTTK dziesięciokrotnie normę konieczną do zdobycia któregokolwiek małego stopnia GOT PTTK.
            Jeśli posiadacz małego złotego stopnia GOT PTTK, który zdobywa którąkolwiek normę do odznaki „Za wytrwałość” chce zdobyć duże stopnie GOT PTTK, to zgodnie z § 8 pkt 1 regulaminu nie może równocześnie w latach ich zdobywania uzyskiwać norm do GOT PTTK „Za wytrwałość”.
            Nadwyżek punktów nie zalicza się do kolejnej zdobywanej normy.",
            9 =>"Kandydat na przodownika powinien spełniać następujące warunki: 
            ukończone 18 lat,minimum średnie wykształcenie,co najmniej cztery lata stażu w PTTK,GOT małą w stopniu złotym,pisemną rekomendację macierzystego Oddziału PTTK",
            10 =>"Kandydat mianowany na wniosek własny albo Komisji Egzaminacyjnej",
            11 => 15,
            12 => 30,
            13 => 45,
        ];

        $zrodlo = [
            1 => "/images/odznaki/gotp.gif",
            2 => "/images/odznaki/gotmb.gif",
            3 => "/images/odznaki/gotms.gif",
            4 => "/images/odznaki/gotmz.gif",
            5 => "/images/odznaki/gotdb.gif",
            6 => "/images/odznaki/gotds.gif",
            7 => "/images/odznaki/gotdz.gif",
            8 => "/images/odznaki/gotzw.gif",
            9 => "/images/odznaki/gotprzod.gif",
            10 => "/images/odznaki/gotph.gif",
            11 => "/images/odznaki/w_gory_mb.png",
            12 => "/images/odznaki/w_gory_ms.png",
            13 => "/images/odznaki/w_gory_mz.png", 
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
