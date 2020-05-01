<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'product_brand_id'=>1,
        'name'=>$faker->name,
        'price'=>$faker->randomFloat,
        'desc'=>$faker->sentence(15)
    ];
});
