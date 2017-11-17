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

$factory->define(App\Models\Article::class, function (Faker $faker) {
    static $password;

    return [
        'title' => $faker->sentence(),
        'content' => $faker->text(300),
        'user_id' => $faker->randomDigit,
        'cat_id' => $faker->numberBetween(1,5),
        'created_at' => $faker->dateTime('now', 'Asia/Shanghai')
    ];
});
