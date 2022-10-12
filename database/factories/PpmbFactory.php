<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ppmb>
 */
class PpmbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'university_id' => mt_rand(1, 25),
            'jalur_id' => mt_rand(1, 3),
            'link' => $this->faker->url(),
            // 'view' => mt_rand(1, 99),
            'mulai' => $this->faker->dateTime(),
            'selesai' => $this->faker->dateTime()
        ];
    }
}
