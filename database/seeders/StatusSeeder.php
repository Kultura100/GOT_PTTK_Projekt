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
            3 => 'Odcinek nieprzebyty',
        ];
        
        foreach($statusy as $klucz => $status) {
            DB::table('status')->insert([
                'nazwa' => $status,
                'created_at' => $generator->dateTime(),
                'updated_at' => $generator->dateTime(),
            ]);
        }
    }
}
