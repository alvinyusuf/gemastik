<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Admin;
use App\Models\Comment;
use App\Models\Jalur;
use App\Models\Operator;
use App\Models\Ppmb;
use App\Models\Saran;
use App\Models\University;
use App\Models\Link;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Post::factory(20)->create();

        Admin::factory(5)->create();

        Operator::factory(3)->create();

        University::factory(25)->create();

        Tag::factory(25)->create();

        Comment::factory(50)->create();

        Jalur::factory(3)->create();

        Ppmb::factory(20)->create();

        Saran::factory(20)->create();

        Link::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
