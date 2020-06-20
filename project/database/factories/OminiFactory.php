<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
        'name'  => $faker -> firstname(),
        'lastname' => $faker -> lastname(),
        'address' => $faker -> streetAddress(),
        'zip' => $faker -> postcode(),
        'state' => $faker -> country(),
        'phone_number' => $faker -> phoneNumber(),
        'role' => $faker -> jobTitle()
    ];
});
