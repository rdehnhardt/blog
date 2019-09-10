<?php

namespace Blog\Data\Seeders;

use Illuminate\Database\Seeder;
use Skeleton\Container\Models\Container;

class ContainerTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Container::class, 50)->create();
    }
}
