<?php

namespace Database\Factories;

use App\Models\Zdjecia;
use App\Models\Wycieczka;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZdjeciaFactory extends Factory
{
    protected $model = Zdjecia::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_wycieczka' => Wycieczka::select('id')->orderByRaw("RAND()")->first()->id,  
            'zrodlo_zdjecia' => $this->faker->text(10),
            'opis' => $this->faker->text(50),
        ];
    }
}
