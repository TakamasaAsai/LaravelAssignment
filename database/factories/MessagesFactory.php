<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Messages;
use Faker\Generator as Faker;

$factory->define(Messages::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->realText(50),
        'message' => $faker->realText(200),
    ];
});
