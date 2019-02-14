<?php

use Faker\Generator as Faker;
use App\Vol;
use App\Voyage;

$factory->define(Vol::class, function (Faker $faker) {
    //$voyage = Voyage::all()->random(1);
    //dd($voyage);
    return [
        'serial' => $faker->isbn10,
        'destination' => $faker->word,
    ];
});
