<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rima>
 */
class RimaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
         'slug' => fake()->slug(),
         'category_id' => mt_rand(1,5),
         'author_id' => mt_rand(1,5),
         'content' => fake()->text()
        ];
    }
}
