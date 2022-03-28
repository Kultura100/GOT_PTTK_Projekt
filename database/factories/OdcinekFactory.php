<?php

namespace Database\Factories;

use App\Models\Pasmo;
use App\Models\Punkt;
use App\Models\Odcinek;
use Illuminate\Database\Eloquent\Factories\Factory;

class OdcinekFactory extends Factory
{
    protected $model = Odcinek::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_punkt_poczatek' => Punkt::select('id')->orderByRaw("RAND()")->first()->id,
            'id_punkt_koniec' => Punkt::select('id')->orderByRaw("RAND()")->first()->id,
            'punkty_od' => Punkt::select('id')->orderByRaw("RAND()")->first()->id,
            'punkty_do' => Punkt::select('id')->orderByRaw("RAND()")->first()->id,
            'otwarty' => $this->faker->boolean,
            'id_pasma' => Pasmo::select('id')->orderByRaw("RAND()")->first()->id,
        ];
    }
}
