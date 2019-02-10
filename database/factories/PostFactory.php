<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

	$title = $faker->sentence;
	$slug = str_slug($title, '-');

    return [
        'title' => $title,
        'slug' => $slug,
        'deadline' => now(),
        'country' => 'Bangladesh',
        'user_id' => App\User::find(1)->id,
        'website' => $faker->url,
        'nationality' => 'all'
    ];
});
