<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_code'=>'1C-1000'.rand(10, 500),
            'description'=>'Name of product'.rand(10,500),
            'unit_price'=> mt_rand(100,1000)
        ];
    }
}
