<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Planta::class, function(Faker\Generator $faker){
    return [
        'nom' => $faker->word,
        'nom_cientific' => $faker->word,
        'descripcio' => $faker->text,
        'sembra_ini' => $faker->dateTimeThisYear,
        'sembra_fi' => $faker->dateTimeThisYear,
        'sembra' => $faker->text,
        'cultiu' => $faker->text,
        'collita' => $faker->text,
        'grup_id' => $faker->numberBetween(1,4),
        'familia_id' => $faker->numberBetween(1,4),
        'user_id' => 1,
        'file'=> $faker->imageUrl,
    ];
});

$factory->define(App\Familia::class, function(Faker\Generator $faker){
    return [
        'nom' => $faker->word,
        'nom_altres' => $faker->word,
        'descripcio' => $faker->text,
        'user_id' => 1,
    ];   
});

$factory->define(App\Grup::class, function(Faker\Generator $faker){
    return [
        'nom' => $faker->word,
        'nom_altres' => $faker->word,
        'descripcio' => $faker->text,
        'user_id' => 1,
    ];   
});
