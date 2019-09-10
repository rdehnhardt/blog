<?php

use Blog\Models\Post;

$factory->define(Post::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->slug,
    ];
});