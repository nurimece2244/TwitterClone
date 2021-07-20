<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\tweets;
use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(tweets::class, function (Faker $faker) {
    return [

        'user_id' => 1,
        'text' =>$faker->sentence(3)
    ];
});
