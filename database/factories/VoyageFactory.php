<?php

use Faker\Generator as Faker;
use App\Voyage;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
        //
        "libelle"=>$faker->sentence,
        //"pays"=>$faker->city,
        //"photo"=>$faker->imageUrl($width = 640, $height = 400),
        //"description"=>$faker->realText($maxnbChars = 200, $indexeSize = 2),
        //"disponibilite"=>$faker->boolean
    ];
});
