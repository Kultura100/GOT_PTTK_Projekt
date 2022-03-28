<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Wycieczka;
use Illuminate\Database\Eloquent\Factories\Factory;

class WycieczkaFactory extends Factory
{
    protected $model = Wycieczka::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_turysty' => User::select('id')->orderByRaw("RAND()")->first()->id,  
            'dataod' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'datado' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'punkty' => $this->faker->numberBetween($min = 1, $max = 10), 
        ];
    }
}
