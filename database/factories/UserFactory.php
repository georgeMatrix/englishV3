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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'edad' => $faker->numberBetween(20,30)
    ];
});

$factory->define(App\controlEscolar::class, function (Faker $faker) {
    return [
        'niveles'=> $faker->numberBetween(10,30),
        'grupo'=> $faker->name,
        'escolaridad'=> $faker->name,
        'noControl'=> $faker->name,
        'cicloEscolar'=> $faker->name,
        'edad'=> $faker->name,
        'incorporados'=> $faker->name,
        'sexo'=> $faker->name,
        'maestro'=> $faker->name,
        'horarioSep'=> $faker->name,
        'curp'=> $faker->name,
        'horario'=> $faker->name,
        'modulosAcreditados'=> $faker->name,
        'nombreCompleto'=> $faker->name,
        'status' => $faker->randomElement(['active', 'inactive'])
    ];
});
