<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'detail' => $faker->realText(30),
        'title' => $faker->realText(10),
        'sub_title'=>$faker->realText(10),
        'price' => $faker->numberBetween(0,20000),
        'user_id'=>1,
        'image_path'=>$faker->imageUrl,
    
    ];
});
