<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\University>
 */
class UniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(3, 8)),
            'link_id' => mt_rand(1, 3),
            'slug' => $this->faker->slug(),
            'view' => mt_rand(1, 100),
            'jalur' => mt_rand(1, 3),
            'body' => $this->faker->paragraph(mt_rand(6, 10))
        ];
    }
}
