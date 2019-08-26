<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Editorial;
use Faker\Generator as Faker;

$factory->define(App\Models\Editorial::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
    ];
});
