<?php

use Blog\Models\Container;

$factory->define(Container::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->slug,
    ];
});