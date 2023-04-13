<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItem>
 */
class InvoiceItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'invoice_id'=>$this->faker->NumberBetween(100, 1000),
        'poduct_id'=>$this->faker->NumberBetween(10, 100),
        'unite_price'=>$this->faker->NumberBetween(100, 5000),
        'quantity'=>$this->faker->NumberBetween(1, 5),
        ];
    }
}
