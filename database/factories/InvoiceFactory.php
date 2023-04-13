<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'number'=>$this->faker->NumberBetween(10, 1000),
        'customer_id'=>$this->faker->NumberBetween(1,20),
        'date'=>$this->faker->date,
        'due_date'=>$this->faker->date,
        'reference'=>'REF-'.rand(10, 500),
        'terms_and_conditions'=>$this->faker->paragraph(2),
        'sud_total'=>$this->faker->NumberBetween(100, 1000),
        'discount'=>$this->faker->NumberBetween(100, 100),
        'total'=>$this->faker->NumberBetween(20, 2000),
            
        ];
    }
}
