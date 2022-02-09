<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WalletFactory extends Factory
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
            'main_wallet' => $this->faker->numberBetween(100,1000000000000),
            'referral_wallet' => $this->faker->numberBetween(10,100000000),
            'bonus_wallet' => $this->faker->numberBetween(10,10000000),
        ];
    }
}
