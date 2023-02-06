<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_name' => $this->faker->sentence(1),
            'item_desc' => $this->faker->paragraph(),
            'price' => rand(500000,3000000)
        ];
    }
}
