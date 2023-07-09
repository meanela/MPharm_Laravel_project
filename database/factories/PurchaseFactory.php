<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Purchase;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'amount'=>$this->faker->numberBetween(1,5),
            'date'=>Carbon::now(),
            'customer'=>$this->faker->numberBetween(1,10),
            'medicine'=>$this->faker->numberBetween(1,20),
        ];
    }
}
