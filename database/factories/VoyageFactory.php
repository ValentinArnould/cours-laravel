<?php

use Faker\Generator as Faker;
use App\Voyage;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
        //
        "libelle"=>$faker->word,
        "vol_id"=>$faker->numberBetween(1,20),
        //"pays"=>$faker->city,
        //"photo"=>$faker->imageUrl($width = 640, $height = 400),
        //"description"=>$faker->realText($maxnbChars = 200, $indexeSize = 2),
        //"disponibilite"=>$faker->boolean
    ];
});
