<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Grupa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrupaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Grupa::factory()->count(20)->create();
        $generator = Factory::create();

        $Grupy = [
            1 => 'Tatry i Podtatrze',
            2 => 'Tatry Słowackie',
            3 => 'Beskidy Zachodnie',
            4 => 'Beskidy Wschodnie',
            5 => 'Góry Swiętokrzyskie',
            6 => 'Sudety',
            7 => 'Słowacja',
        ];
        
        foreach($Grupy as $klucz => $grupa) {
            DB::table('grupa')->insert([
                'id' => $klucz,
                'nazwa' => $grupa,
                'created_at' => $generator->dateTimeBetween('-20 days','-10 days'),
                'updated_at' => rand(0,9) < 5 ? null : $generator->dateTimeBetween('-10 days','-5 days'),
            ]);
        }

    }
}
