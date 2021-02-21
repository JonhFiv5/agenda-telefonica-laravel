<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contato;
use Faker\Generator as Faker;

$factory->define(Contato::class, function (Faker $faker) {
    return [
        'nome' => $faker->firstName,
        'sobrenome' => $faker->lastName,
        'telefone' => $faker->unique()->phoneNumber,
    ];
});
