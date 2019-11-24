<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vacancy;
use Faker\Generator as Faker;

$factory->define(Vacancy::class, function (Faker $faker) {
    return [
        'company_id' => factory(\App\Company::class),
        'title' => $faker->jobTitle,
        'location' => $faker->city,
        'salary' => $faker->numberBetween(100000, 100000000),
        'description' => $faker->paragraph(1),
        'responsibilities' => $faker->text(300),
        'min_qualification' => $faker->text(250),
        'benefit' => $faker->text(150)
    ];
});
