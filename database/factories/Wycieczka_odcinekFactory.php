<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\Odcinek;
use App\Models\Wycieczka;
use App\Models\Ksiazeczka;
use App\Models\Wycieczka_odcinek;
use Illuminate\Database\Eloquent\Factories\Factory;

class Wycieczka_odcinekFactory extends Factory
{
    protected $model = Wycieczka_odcinek::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_wycieczka' => Wycieczka::select('id')->orderByRaw("RAND()")->first()->id,  
            'id_odcinek' => Odcinek::select('id')->orderByRaw("RAND()")->first()->id,
            'data' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'id_status' => Status::select('id')->orderByRaw("RAND()")->first()->id,
            'liczba_punktow' => $this->faker->numberBetween($min = 1, $max = 10),
            'odwrocony' => $this->faker->boolean,
        ];
    }
}
