<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 4)),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(mt_rand(20, 50)),
            'like' => mt_rand(0, 150),
            'comments' => mt_rand(1, 200),
            'lihat' => mt_rand(1, 500),
            'published_at' => $this->faker->date(),
            'admin_id' => mt_rand(1, 3),
            'tag_id' => mt_rand(1, 5),
            'comment_id' => mt_rand(1, 10)

            //
        ];
    }
}
