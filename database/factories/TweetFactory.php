<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tweet;
use Faker\Generator as Faker;

$factory->define(Tweet::class, function (Faker $faker) {
    return [
        'send' =>$faker->numberBetween(0,50),
        'recieve' =>$faker->numberBetween(0,50),
        'tweet'=>$faker->realText(10),
    ];
});
