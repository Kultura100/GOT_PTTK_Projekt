<?php

namespace Database\Factories;

use App\Models\Odznaka;
use Illuminate\Database\Eloquent\Factories\Factory;

class OdznakaFactory extends Factory
{
    protected $model = Odznaka::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nazwa' => $this->faker->text(10),
            'wymaganepunkty' =>  $this->faker->numberBetween($min = 1, $max = 50)
        ];
    }
}
