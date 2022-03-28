<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Odznaka;
use App\Models\Odznaka_Turysty;
use Illuminate\Database\Eloquent\Factories\Factory;

class Odznaka_TurystyFactory extends Factory
{
    protected $model = Odznaka_Turysty::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_turysty' => User::select('id')->orderByRaw("RAND()")->first()->id,
            'id_odznaki' => Odznaka::select('id')->orderByRaw("RAND()")->first()->id,
        ];
    }
}
