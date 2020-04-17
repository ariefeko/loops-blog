<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Comment;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->domainName,
        'comment' => $faker->sentence
    ];
});
