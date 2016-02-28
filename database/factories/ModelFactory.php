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

$factory->define(nameproject\Contacto::class, function (Faker\Generator $faker) {
    return [
        'usuario' => $faker->name,
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(nameproject\User::class, function(Faker\Generator $faker) {
  return [
    'name'  => $faker->name,
    'email' => $faker->email,
    'password'  => bcrypt('mario'),
    'remember_token' => str_random(10),
  ];
});
