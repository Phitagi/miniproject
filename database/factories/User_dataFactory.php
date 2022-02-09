<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class User_dataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'user_id' =>$this->faker->unique()->numberBetween(1,10),
             'name' => $this->faker->name(),
             'address' => $this->faker->word(),
             'state' => $this->faker->word(),
             'birth_date' => $this->faker->dateTimeBetween($startDate = '-70 years', $endDate = '-18 years',$timezone = 'Africa/Nairobi'),
        ];
    }
}
