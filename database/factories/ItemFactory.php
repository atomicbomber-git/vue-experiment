<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        "name" => $faker->country,
        "stock" => rand(1, 10) * 10,
        "price" => rand(13, 67) * 1000,
    ];
});
