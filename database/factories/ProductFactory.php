<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'details'=> $faker->paragraph,
        'price'=> $faker->numberBetween(1000,10000),
        'stock'=> $faker->randomDigit,
        'discount'=> $faker->numberBetween(5,30),

    ];
});
