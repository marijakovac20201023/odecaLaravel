<?php

namespace Database\Factories;

use App\Models\Odeca;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PorudzbinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'adresaDostave'=>$this->faker->address(),
            'cena'=>$this->faker->numberBetween($min = 500, $max = 9000),
            'status' => $this->faker->randomElement($array = array (  'u pripremi','isporuceno','neisporuceno')),
            'user_id'=>User::find(random_int(1,User::count())),
            'odeca_id'=> Odeca::find(random_int(1,Odeca::count()))


        ];
    }
}
