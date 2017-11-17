<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    static $password;

    return [
        'user_id' => $faker->randomDigit,
        'content' => $faker->text(100),
        'commentable_id' => $faker->numberBetween(1,30),
        'commentable_type' => \App\Models\Article::class,
        'created_at' => $faker->dateTime('now', 'Asia/Shanghai')
    ];
});
