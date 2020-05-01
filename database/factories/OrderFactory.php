<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Order::class, function (Faker $faker) {
    return [
        'users_id' => 1
    ];
});
