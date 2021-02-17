<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    $name = $faker->name;
    $ramdon = Str::random(10);
    return [
        'name'=> $faker->company,
        'address' => $faker->address,
        "nit"=> $faker->numberBetween(),
        "phone"=> $faker->numberBetween(),
        'email' => $faker->unique()->safeEmail,
        "picture"=> '/images/user-profile.jpg',
        'slug' => Str::slug($name . '-' . $ramdon, '-'),
        'categorycompany_id' => \App\CategoryCompany::all()->random()->id,
    ];
});
