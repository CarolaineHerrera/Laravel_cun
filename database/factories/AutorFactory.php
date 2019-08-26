<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Autor;
use Faker\Generator as Faker;

$factory->define(App\Models\Autor::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellidos'=>$faker->lastname,

    ];
});
