<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Libro;
use Faker\Generator as Faker;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'sinopsis' => $faker->paragraph,
        'editorial_id' => function(){
        	return factory(App\Models\Editorial::class)->create()->id;
        }
    ];
});
