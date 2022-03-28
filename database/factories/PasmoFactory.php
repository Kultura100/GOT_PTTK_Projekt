<?php

namespace Database\Factories;

use App\Models\Grupa;
use App\Models\Pasmo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasmoFactory extends Factory
{
    protected $model = Pasmo::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nazwa' => $this->faker->text(10),
            'id_grupa' => Grupa::select('id')->orderByRaw("RAND()")->first()->id,
        ];
    }
}
