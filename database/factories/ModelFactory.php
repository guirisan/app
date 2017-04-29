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

$factory->define(App\Plaga::class, function(Faker\Generator $faker){
    return [
        'nom' => $faker->word,
        'nom_cientific' => $faker->word,
        'descripcio' => $faker->text,
        'tractament' => $faker->text,
        'user_id' => 1,
    ];
});

$factory->define(App\Remei::class, function(Faker\Generator $faker){
    return [
        'nom' => $faker->word,
        'nom_cientific' => $faker->word,
        'descripcio' => $faker->text,
        'preparacio' => $faker->text,
        'aplicacio' => $faker->text,
        'user_id' => 1,
    ];
});

$factory->define(App\Image::class, function(Faker\Generator $faker){
    return [
        'user_id' => 1,
        'nom' => $faker->word,
        'url' => $faker->imageUrl,
        'descripcio' => $faker->text,
        'imageable_type' => '\App\Planta',
        'imageable_id' => 1,
    ];
});

$factory->define(App\Bancal::class, function(Faker\Generator $faker){
    return [
        'user_id' => 1,
        'nom' => $faker->word,
        'superficie' => $faker->numberBetween(1000,2000),
        'descripcio' => $faker->text,
    ];
});

$factory->define(App\Parcela::class, function(Faker\Generator $faker){
    return [
        'user_id' => 1,
        'bancal_id' => 1,
        'nom' => $faker->word,
        'superficie' => $faker->numberBetween(50,200),
        'ocupada' => $faker->boolean,
        'descripcio' => $faker->text,
    ];
});

$factory->define(App\Cultiu::class, function(Faker\Generator $faker){
    return [
        'user_id' => 1,
        'parcela_id' => 1,
        'planta_id' => 1,
        'data_ini' => $faker->date,
        'data_fi' => $faker->date,
        'descripcio' => $faker->text,
    ];
});

$factory->define(App\Event::class, function(Faker\Generator $faker){
    return [
        'user_id' => 1,
        'parcela_id' => 1,
        'nom' => $faker->word,
        'data' => $faker->date(),
        'fet' => $faker->boolean,
        'descripcio' => $faker->text,
    ];
});


$factory->define(App\Tasca::class, function(Faker\Generator $faker){
    return [
        'user_id' => 1,
        'nom' => $faker->word,
        'dies' => $faker->numberBetween(5,30),
        'descripcio' => $faker->text,
    ];
});


