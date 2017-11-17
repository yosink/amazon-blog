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

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'avatar' => $faker->imageUrl(200,200,'people'),
        'address' => $faker->address,
        'description' => $faker->sentence(10),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTime('now', 'Asia/Shanghai')
    ];
});
