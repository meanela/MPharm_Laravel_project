<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'gender'=>$this->faker->randomElement(['m', 'ž']),
            'age'=>$this->faker->numberBetween(18,100),
            'description'=>$this->faker->shuffle('description'),

        ];
    }
}
