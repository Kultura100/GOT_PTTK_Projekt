<?php

namespace Database\Seeders;

use App\Models\Wycieczka;
use Illuminate\Database\Seeder;

class WycieczkaSeeder extends Seeder
{
    public function run()
    {
        $generator=Factory::create();
        $wycieczka=
        [
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            12,
            13,
            14,
            15
        ];
        foreach($wycieczka as $klucz=> $wycieczka)
        {
            DB::table('wycieczka')->insert(
                [
                    'id'=>$klucz + 1,
                    'id_turysty'=>$klucz + 1,
                    'dataod'=>$generator->dateTimeBetween('-30 days','-10 days'),
                    'datado'=>$generator->dateTimeBetween('-30 days','-10 days'),
                    'punkty'=>rand(1,3)
                ]);
        }
    }
}
