<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        // 'name' => $faker->company,
        // 'description' => $faker->text(200),
        // 'email' => $faker->companyEmail,
        // 'password' => $faker->userName,
        // 'website' => $faker->domainName,
        // 'address' => $faker->city
    ];
});
