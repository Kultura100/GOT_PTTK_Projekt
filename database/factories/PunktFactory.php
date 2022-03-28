<?php

namespace Database\Factories;

use App\Models\Punkt;
use Illuminate\Database\Eloquent\Factories\Factory;

class PunktFactory extends Factory
{
    protected $model = Punkt::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nazwa' => $this->faker->text(10),
        ];
    }
}
