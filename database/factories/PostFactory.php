<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(5);
    $slug = str_slug($title, '-');

    return [
        'title' => $title,
        'slug' => $slug,
        'content' => $faker->paragraph(4)
    ];
});
