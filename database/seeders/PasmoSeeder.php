<?php

namespace Database\Seeders;
use Faker\Factory;
use App\Models\Pasmo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasmoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Pasmo::factory()->count(20)->create();
        
        $generator = Factory::create();

        $pasmo = [
            1 => 'Tatry Wysokie',
            2 => 'Tatry Zachodnie',
            3 => 'Podtatrze',
            4 => 'Zapadne Tatry',
            5 => 'Vysoke Tatry',
            6 => 'Belanskie Tatry',
            7 => 'Tatry Słowackie',
            8 => 'Niskie Tatry',
            9 => 'Beskid Śląski',
            10 => 'Beskid Żywiecki',
            11 => 'Beskid Mały',
            12 => 'Beskid Średni',
            13 => 'Gorce',
            14 => 'Beskid Wyspowy',
            15 => 'Orawa',
            16 => 'Spisz i Pieniny',
            17 => 'Beskid Sądecki',
            18 => 'Pogórze Wielickie',
            19 => 'Pogórze Wiśnickie',
            20 => 'Pogórze Rożnowskie',
            21 => 'Pogórze Cięzkowickie',
            22 => 'Beskid Niski część zachodnia',
            23 => 'Beskid Niski część wschodnia',
            24 => 'Bieszczady',
            25 => 'Pogórze Strzyżowsko-Dynowskie',
            26 => 'Pogórze Przemyskie',
            27 => 'Góry Świetokrzyskie Ł01',
            28 => 'Góry Świetokrzyskie Ł02',
            29 => 'Góry Świetokrzyskie Ł03',
            30 => 'Góry Świetokrzyskie Ł04',
            31 => 'Góry Świetokrzyskie Ł05',
            32 => 'Góry Izerskie',
            33 => 'Pogórze Izerskie',
            34 => 'Karkonosze',
            35 => 'Kotlina Jeleniogórska',
            36 => 'Rudawy Janowickie',
            37 => 'Góry Kaczawskie',
            38 => 'Pogórze Kaczawskie',
            39 => 'Kotlina Kamiennogórska',
            40 => 'Góry Kamienne',
            41 => 'Góry Wałbszyskie, Pogórze Bolkowsko-Wałbszyskie',
            42 => 'Góry Sowie, Wzgórza Włodzickie',
            43 => 'Góry Bardzkie',
            44 => 'Góry Stołowe, Wzgórza Lewińskie',
            45 => 'Góry Orlickie, Góry Bystrzyckie',
            46 => 'Kotlina Kłodzka, Rów Górnej Nysy',
            47 => 'Masyw Śnieżnika, Góry Bialskie',
            48 => 'Góry Złote',
            49 => 'Góry Opawskie',
            50 => 'Wzgórza Strzegomskie',
            51 => 'Masyw Ślęży, Równica Świdnicka, Kotlina Dierżoniowska',
            52 => 'Wzgórza Niemczańsko-Strzelińskie, Przedgórze Paczkowskie',
            53 => 'Słowacki Raj',
            54 => 'Mała Fatra - Vratna',
            55 => 'Mała Fatra - Martinske hole',
            56 => 'Velka Fatra i Choć',
            57 => 'Kysucke Beskydy - Grzbiet Graniczny',
            58 => 'Orabske Beskydy - Słowacja',
            59 => 'Pieniny - Słowacja',

        ];
        $grupaid =0;
        foreach($pasmo as $klucz => $pasma) {
                if($klucz <= 3) $grupaid=1;
                else if($klucz <= 8) $grupaid=2;
                else if($klucz <= 20) $grupaid=3;
                else if($klucz <= 26) $grupaid=4;
                else if($klucz <= 31) $grupaid=5;
                else if($klucz <= 52) $grupaid=6;
                else if($klucz <= 59) $grupaid=7;
            DB::table('pasmo')->insert([
                'id' => $klucz,
                'nazwa' => $pasma,
                'id_grupa' => $grupaid,
                'created_at' => $generator->dateTimeBetween('-20 days','-10 days'),
                'updated_at' => rand(0,9) < 5 ? null : $generator->dateTimeBetween('-10 days','-5 days'),
            ]);
        }
    }
}
