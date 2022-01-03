<?php

namespace Database\Factories;

use App\Models\Kategorija;
use Illuminate\Database\Eloquent\Factories\Factory;

class OdecaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->randomElement($array = array ('majica','farmerke','suknja','haljina','pidzama','jakna','pantalone','trenerka','kaput','odelo')),
            'opis' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'proizvedenoU'=>$this->faker->country(),
            'velicina' => $this->faker->randomElement($array = array ('s','m','l','xs','xl','xxl','xxl','10','14','12')),
            'kategorija_id'=> Kategorija::factory()


        ];
    }
}
