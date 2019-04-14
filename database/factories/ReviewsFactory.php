<?php

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(App\Model\Reviews::class, function (Faker $faker) {
    return [
        //
        'product_id' => function(){
            return Product::all()->random();
        },
        'customer' => $faker->name,
        'reveiw' => $faker->paragraph,
         'star' => $faker->numberBetween(0,5)
    ];
});
