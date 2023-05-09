<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\RegionModel>
 */
class RegionModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "label"=> $this->faker->state(), 
            // "label"=> $this->faker->Str::upper(Str::random(10)) //génère aléatoirement avec des noms autres
        ];
    }
}
