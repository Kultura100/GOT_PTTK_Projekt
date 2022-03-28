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
            //2 => 'Tatry Zachodnie',
           // 3 => 'Podtatrze',

        ];
        
        foreach($pasmo as $klucz => $pasma) {
            DB::table('pasmo')->insert([
                'id' => $klucz,
                'nazwa' => $pasma,
                'id_grupa' => $klucz,
                'created_at' => $generator->dateTimeBetween('-20 days','-10 days'),
                'updated_at' => rand(0,9) < 5 ? null : $generator->dateTimeBetween('-10 days','-5 days'),
            ]);
        }
    }
}
