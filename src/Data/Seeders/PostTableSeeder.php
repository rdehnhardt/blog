<?php

namespace Blog\Data\Seeders;

use Blog\Models\Post;
use Skeleton\Parents\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 50)->create();
    }
}
