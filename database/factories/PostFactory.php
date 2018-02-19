<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence,
      'content' => $faker->paragraphs(rand(3, 100), true),
      'published' => $faker->boolean,
    ];
});
