<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Grupa;
use App\Models\Grupa_Przodownik;
use Illuminate\Database\Eloquent\Factories\Factory;

class Grupa_PrzodownikFactory extends Factory
{
    protected $model = Grupa_Przodownik::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_przodownik' => User::select('id')->orderByRaw("RAND()")->first()->id,
            'id_grupa' => Grupa::select('id')->orderByRaw("RAND()")->first()->id,
        ];
    }
}
