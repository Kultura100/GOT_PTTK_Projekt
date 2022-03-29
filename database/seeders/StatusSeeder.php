<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Status::factory()->count(20)->create();

        $generator = Factory::create();

        $statusy = [
            1 => 'Ukończony odcinek',
            2 => 'Odcinek zablokowany przez PTTK',
            3 => 'Nieodbyty odcinek',

        ];
        
        foreach($statusy as $klucz => $status) {
            DB::table('status')->insert([
                'nazwa' => $status,
                'created_at' => $generator->dateTimeBetween('-20 days','-10 days'),
                'updated_at' => rand(0,9) < 5 ? null : $generator->dateTimeBetween('-10 days','-5 days'),
            ]);
        }
    }
}
