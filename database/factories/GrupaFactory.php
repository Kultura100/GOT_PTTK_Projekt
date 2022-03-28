<?php

namespace Database\Factories;

use App\Models\Grupa;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrupaFactory extends Factory
{

    protected $model = Grupa::class;
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
