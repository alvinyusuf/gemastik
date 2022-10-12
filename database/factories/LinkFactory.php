<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jalur_id' => mt_rand(1, 3),
            'university_id' => mt_rand(1, 25),
            'link' => $this->faker->url(),
            'mulai' => $this->faker->dateTime(),
            'selesai' => $this->faker->dateTime()
        ];
    }
}
