<?php
use Faker\Factory as FakerFactory;
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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;
     $faker = FakerFactory::create('ja_JP');
    return [
        'email' => $faker->unique()->safeEmail,
        'name' => $faker->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'provider' => 'twitter',
        'provider_id' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Novels::class, function (Faker $faker) {
    static $password;
     $faker = FakerFactory::create('ja_JP');
    return [
        'email' => $faker->unique()->safeEmail,
        'name' => $faker->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'provider' => 'twitter',
        'provider_id' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'remember_token' => str_random(10),
    ];
});
